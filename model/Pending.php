<?php
class	Pending{
	

private $conn;
public $id;
public $pid;
public $ref;
public $username;
public $partner;
public $userstatus;
public $partnerstatus;
public $nos;
public $created;
public $modified;


public function __construct($db){
	
	$this->conn = $db;

}







function PendingReg($pid,$nozzle, $ref,$username, $pusername,$pname, $prate, $amount,$userstatus,$partnerstatus){


				$stmt = $this->conn->prepare( "INSERT INTO pending_pro SET prod_id=:prod_id, nozzle=:nozzle,ref=:ref, username=:username,partner=:partner, pname=:pname,prate=:prate,amount=:amount, userstatus=:userstatus, partnerstatus=:partnerstatus, created=:created");
		
				$pid= htmlspecialchars(strip_tags($pid));
                $nozzle= htmlspecialchars(strip_tags($nozzle));
				$ref = htmlspecialchars(strip_tags($ref)) ;
				$username = htmlspecialchars(strip_tags($username)) ;
				$pusername= htmlspecialchars(strip_tags($pusername));
				$pname= htmlspecialchars(strip_tags($pname));
				$prate= htmlspecialchars(strip_tags($prate));
				$amount= htmlspecialchars(strip_tags($amount));
				$userstatus= htmlspecialchars(strip_tags($userstatus));
				$partnerstatus= htmlspecialchars(strip_tags($partnerstatus));
				$created= date("d-m-y h:m:s");

				$stmt->bindParam(":prod_id", $pid);
                $stmt->bindParam(":nozzle", $nozzle);
				$stmt->bindParam(":ref", $ref);
				$stmt->bindParam(":username", $username);
				$stmt->bindParam(":partner", $pusername);
				$stmt->bindParam(":pname", $pname);
				$stmt->bindParam(":prate", $prate);
				$stmt->bindParam(":amount", $amount);
				$stmt->bindParam(":userstatus", $userstatus);
				$stmt->bindParam(":partnerstatus", $partnerstatus);
				$stmt->bindParam(":created", $created);
				

				if($stmt->execute()){
					return true;
				}

			return false;
	}

	function PendingUpdateUserStatus($ref,$status,$username){
		$stmt=$this->conn->prepare("UPDATE pending_pro SET userstatus=? WHERE ref=? AND username=?");

		if($stmt->execute([$status,$ref,$username])){

			return true;
		}
		return false;
	}

function PendingUpdatePartnerStatus($ref,$status,$partner){
		$stmt=$this->conn->prepare("UPDATE pending_pro SET partnerstatus=? WHERE ref=? AND partner=?");

		if($stmt->execute([$status,$ref,$partner])){

			return true;
		}
		return false;
	}
	
	function PendingUserList($username){
		// $stmt=$this->conn->prepare("SELECT * FROM pending_pro WHERE username=? OR partner=? ORDER BY id desc");
		 $stmt=$this->conn->prepare("SELECT * FROM pending_pro WHERE username=?  ORDER BY id desc limit 10");

		if($stmt->execute([$username])){

			return $stmt;
		}
	}


	function PendingUserList1($username){
		// $stmt=$this->conn->prepare("SELECT * FROM pending_pro WHERE username=? OR partner=? ORDER BY id desc");
		 $stmt=$this->conn->prepare("SELECT * FROM pending_pro WHERE partner=?  ORDER BY id desc limit 10");

		if($stmt->execute([$username])){

			return $stmt;
		}
	}

	function PendingUserList2($username,$sta){
		// $stmt=$this->conn->prepare("SELECT * FROM pending_pro WHERE username=? OR partner=? ORDER BY id desc");
		 $stmt=$this->conn->prepare("SELECT * FROM pending_pro WHERE partner=? AND partnerstatus=?  ORDER BY id desc limit 10");

		if($stmt->execute([$username,$sta])){

			return $stmt;
		}
	}



	function PendingList(){
	$stmt=$this->conn->prepare("SELECT * FROM pending_pro ORDER BY id desc" );
	$stmt->execute();
	return $stmt;
	}
	
	function PendingDelete($ref){

		$stmt=$this->conn->prepare("DELETE * FROM pending_pro  WHERE ref=?");

		if($stmt->execute([$ref])){

			return true;
		}
		return false;
	}

		function PendingUserStatus($id, $status){

			$stmt=$this->conn->prepare("UPDATE pending_pro SET userstatus=? WHERE id=?");
			if($stmt->execute([$status, $id])){
				return true;
			}
			return false; 
		}

		function PendingUserStatusRevert($id, $status){

			$stmt=$this->conn->prepare("UPDATE pending_pro SET userstatus=? WHERE id=?");
			if($stmt->execute([$status, $id])){
				return true;
			}
			return false; 
		}


		function PendingPartnerStatus($id, $status){

			$stmt=$this->conn->prepare("UPDATE pending_pro SET partnerstatus=? WHERE id=?");
			if($stmt->execute([$status, $id])){
				return true;
			}
			return false; 
		}


		function PendingWallet($username){

			$stmt=$this->conn->prepare("SELECT * FROM pending_pro WHERE partner=? AND userstatus !=? ORDER BY id DESC");
			$stmt->execute([$username, 2]);
			return $stmt;
		}
	
}