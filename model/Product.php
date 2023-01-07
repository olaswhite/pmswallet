<?php
class	Product{
	

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
public $nozzle;


public function __construct($db){
	
	$this->conn = $db;

}


function addpro($prod_name,$username){

				$stmt = $this->conn->prepare( "INSERT INTO product SET prod_name=:prod_name, prod_price=:prod_price, nozzle=:nozzle,  status = :status, username=:username");
				$prod_name= htmlspecialchars(strip_tags($prod_name));
				$nozzle=0;
				$prod_price = 0 ;
				$username = htmlspecialchars(strip_tags($username));
				$status = "Not-Active";
				$stmt->bindParam(":prod_name", $prod_name);
				$stmt->bindParam(":prod_price", $prod_price);
				$stmt->bindParam(":nozzle", $nozzle);
				$stmt->bindParam(":username", $username);
				$stmt->bindParam(":status", $status);
				if($stmt->execute()){
					return true;
				}

			return false;
	}


	function getpro($prod_name,$username){


				$stmt = $this->conn->prepare( "SELECT * FROM product WHERE prod_name=:prod_name AND username =:username");
				$prod_name= htmlspecialchars(strip_tags($prod_name));
				$username = htmlspecialchars(strip_tags($username)) ;
				$stmt->bindParam(":prod_name", $prod_name);
				$stmt->bindParam(":username", $username);
				$stmt->execute();
				
			return $stmt;
	}


function getActivepro($username){


				$stmt = $this->conn->prepare( "SELECT * FROM product WHERE status=? AND username =?");
				$stmt->execute(["Active", $username]);
				
			return $stmt;
	}


	function getpro2($prod_id){

					$stmt = $this->conn->prepare( "SELECT * FROM product WHERE prod_id=? ");
					
					$stmt->execute([$prod_id]);
					return $stmt;
		}


	function updatepro($prod_name,$prod_price,$status,$username){


				$stmt = $this->conn->prepare( "UPDATE product SET prod_price=:prod_price,  status = :status WHERE prod_name=:prod_name AND username=:username");
				$prod_name= htmlspecialchars(strip_tags($prod_name));
				$prod_price = htmlspecialchars(strip_tags($prod_price)) ;
				$username = htmlspecialchars(strip_tags($username));
				$status = htmlspecialchars(strip_tags($status));
				$stmt->bindParam(":prod_name", $prod_name);
				$stmt->bindParam(":prod_price", $prod_price);
				$stmt->bindParam(":status", $status);
				$stmt->bindParam(":username", $username);
				if($stmt->execute()){
					return true;
				}

			return false;
	}

	function updateproprice($prod_id,$prod_price){


				$stmt = $this->conn->prepare( "UPDATE product SET prod_price=?  WHERE prod_id=?");
				
				if($stmt->execute([$prod_price, $prod_id,])){
					return true;
				}

			return false;
	}

	function productAvail($status, $product){

			$query= "SELECT *
			 FROM product
			 JOIN partner
			 WHERE partner.username=product.username AND product.status= ? AND product.prod_name = ? order by product.prod_id DESC ";
			$stmt = $this->conn->prepare($query);			
				$stmt->execute([$status, $product]);
				return $stmt;



		}


			function proStatus($prod_name, $username,$status){

			$query= "UPDATE product SET status=? WHERE username=? AND prod_name=? ";
			$stmt = $this->conn->prepare($query);			
				if($stmt->execute([$status, $username,$prod_name])){

					return true;
				}
				return false;
			}


			
function getNozzle($username){


	$stmt = $this->conn->prepare( "SELECT * FROM product WHERE username =?");
	$stmt->execute([$username]);
	
return $stmt;
}


		function updateNozzle($nozzle,$username,$status){

			$query= "UPDATE product SET nozzle=? WHERE username=? AND status=? ";
			$stmt = $this->conn->prepare($query);			
				if($stmt->execute([$nozzle,$username,"Active"])){

					return true;
				}
				return false;
		}



		function waitingDelivery($username,$sta){
			$query= "SELECT * FROM pending_pro  WHERE  partnerstatus=? AND username=?" ;
			$stmt = $this->conn->prepare($query);
				$stmt->execute([$username,$sta]);
				return $stmt;
	
		}
		
			

			
	}

	

	
?>