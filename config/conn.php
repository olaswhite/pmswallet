<?php

class Database
{
	
		private $host="localhost";
		private $dbname="wallet";
		private $username="root";
		private $password="";

		public $conn;

			
		public function getConnect(){
			
			$this->conn= null;

			try{
				$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->username,$this->password);
				$this->conn->exec("set names utf8");
			}
			catch(PDOException $e)
			{
					echo "connection error:".$e->getMessage();
			}
			return $this->conn;

		}
}
?>