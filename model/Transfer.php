<?php
class	Transfer{
	

private $conn;
public $partner_id;
public $username;
public $password;
public $email;
public $phoneno;
public $fname;
public $lname;
public $pix;
public $prod_name;
public $prod_price;
public $prod_type;


public function __construct($db){
	
	$this->conn = $db;

}
	

function trans($status){


				$stmt = $this->conn->prepare( "INSERT INTO partner SET fname=:fname, username=:username, email=:email, phoneno=:phoneno, password=:password, pix=:pix");
				$fname= htmlspecialchars(strip_tags($fname));
				$username = htmlspecialchars(strip_tags($username)) ;
				$email = htmlspecialchars(strip_tags($email));
				$phoneno= htmlspecialchars(strip_tags($phoneno));
				$password= password_hash($password, PASSWORD_DEFAULT);
				
			

				$pix = "Pix.png";
				$stmt->bindParam(":fname", $fname);
				$stmt->bindParam(":username", $username);
				$stmt->bindParam(":email", $email);
				$stmt->bindParam(":phoneno", $phoneno);
				$stmt->bindParam(":password", $password);
				$stmt->bindParam(":pix", $pix);
				if($stmt->execute()){
					return true;
				}

			return false;
	}
}

?>