<?php
class	Partner{
	

private $conn;
public $partner_id;
public $pusername;
public $password;
public $email;
public $phoneno ;
public $fname;
public $lname;
public $pix;
public $prod_name;
public $prod_price;
public $prod_type;
public $status;
public $user_fname;
public $partnerstatus;
public $userstatus;
public $customername;
public $productname;




public function __construct($db){
	
	$this->conn = $db;

}


	

	function partnerPixUpdate($userid, $pix){
		$query = "UPDATE partner SET pix =:pix WHERE username=:username";
		$stmt = $this->conn->prepare($query);

		$userid= htmlspecialchars(strip_tags($userid));
		$pix= htmlspecialchars(strip_tags($pix));

		$stmt->bindParam(":pix", $pix);
		$stmt->bindParam(":username", $userid);
		
		if($stmt->execute()){
			return true;
		}
		return false;
	}

	function partnerDetails($pusername){
		$sql =$this->conn->prepare( "SELECT * FROM partner WHERE username=? ");
		$sql->execute([$pusername]);
		return $sql;
	}

	function getPartner($email){
		$stmt =$this->conn->prepare( "SELECT * FROM partner WHERE email=?");
		$stmt->execute([$email]);
		return $stmt;
		
	}

	
	

	function checkPartner($email){
		
		$stmt = $this->conn->prepare( "SELECT * FROM partner WHERE email=:email ");
		
		$email = htmlspecialchars(strip_tags($email));
		$stmt->bindParam(":email", $email);
		
		if($stmt->execute())
		{
			return true;
		}
		return false;
	}

	function chkPartner($email, $username){
		
		$stmt = $this->conn->prepare( "SELECT * FROM partner WHERE email=:email OR username=:username ");
		
		$email = htmlspecialchars(strip_tags($email));
		$username = htmlspecialchars(strip_tags($username));
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":username", $username);
		$stmt->execute();
		return $stmt;
	}


	function chkedit($phoneno, $fname, $lname){
		
		$stmt = $this->conn->prepare( "SELECT * FROM partner WHERE phoneno=:phoneno,fname=:fname, lname=:lname");
		$phoneno = htmlspecialchars(strip_tags($phoneno));
		$fname = htmlspecialchars(strip_tags($fname));
		$lname = htmlspecialchars(strip_tags($lname));
		$stmt->bindParam(":phoneno", $phoneno);
		$stmt->bindParam(":fname", $fname);
		$stmt->bindParam(":lname", $lname);
		
		$stmt->execute();
		return $stmt;
	}

	function partnerReg($fname, $username, $email, $phoneno, $password){


				$stmt = $this->conn->prepare( "INSERT INTO partner SET fname=:fname, username=:username, email=:email, phoneno=:phoneno, password=:password, pix=:pix, status=:status");
				$fname= htmlspecialchars(strip_tags($fname));
				$username = htmlspecialchars(strip_tags($username)) ;
				$email = htmlspecialchars(strip_tags($email));
				$phoneno= htmlspecialchars(strip_tags($phoneno));
				$password= password_hash($password, PASSWORD_DEFAULT);
				
			

				$pix = "pix.jpg";
				$status=0;
				$stmt->bindParam(":fname", $fname);
				$stmt->bindParam(":username", $username);
				$stmt->bindParam(":email", $email);
				$stmt->bindParam(":phoneno", $phoneno);
				$stmt->bindParam(":password", $password);
				$stmt->bindParam(":pix", $pix);
				$stmt->bindParam(":status", $status);
				
				if($stmt->execute()){
					return true;
				}

			return false;
	}


	function editpartner($email,$fname,$username,$phoneno){


		$query = "UPDATE partner SET username=:username, phoneno =:phoneno, fname=:fname WHERE email=:email " ;
		$stmt = $this->conn->prepare($query);

		$email= htmlspecialchars(strip_tags($email));
		$fname= htmlspecialchars(strip_tags($fname));
		$username= htmlspecialchars(strip_tags($username));
		$phoneno= htmlspecialchars(strip_tags($phoneno));
		
		
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":fname", $fname);
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":phoneno", $phoneno);
		$stmt->execute();
		return $stmt;

	}

	function customerAvailaible($email){

		$query= "SELECT * FROM partner WHERE email=?" ;
		$stmt = $this->conn->prepare($query);
			$stmt->execute([$email]);
			return $stmt;



	}

	function transHistory($username,){
		$query= "SELECT * FROM pending_pro  WHERE username=?" ;
		$stmt = $this->conn->prepare($query);
			$stmt->execute([$username]);
			return $stmt;

	}



	function confirmPartnerBalance($username){

		$query = "SELECT * FROM partner_wallet WHERE partner=? ";
		$stmt = $this->conn->prepare($query);

			$stmt->execute([$username]);
		return $stmt;

	}


	function getPartnerWallet($username){

		$query = "SELECT * FROM partner_wallet WHERE partner=? ";
		$stmt = $this->conn->prepare($query);
		$stmt->execute([$username]);
		return $stmt;
	}
	
	function createPartnerTrans($ref, $username,$customername,$productname,$amount,$transtype){

		$query = "INSERT INTO partner_trans SET ref=:ref, partner=:partner, customer_username=:customer_username, product_name=:product_name,amount=:amount,transtype=:transtype";
		$stmt = $this->conn->prepare($query);

		$ref = htmlspecialchars(strip_tags($ref));
		$username= htmlspecialchars(strip_tags($username));
		$customername= htmlspecialchars(strip_tags($customername));
		$productname= htmlspecialchars(strip_tags($productname));
		$amount= htmlspecialchars(strip_tags($amount));
		$transtype= htmlspecialchars(strip_tags($transtype));


		$stmt->bindParam(":ref", $ref);
		$stmt->bindParam(":partner", $username);
		$stmt->bindParam(":customer_username", $customername);
		$stmt->bindParam(":product_name", $productname);
		$stmt->bindParam(":amount", $amount);
		$stmt->bindParam(":transtype", $transtype);
		

		if($stmt->execute()){
			return true;
		}
		return false;
	}

	function createPartnerWallet($username, $balance){

		$query = "INSERT INTO partner_wallet SET partner=:partner, balance=:balance";
		$stmt = $this->conn->prepare($query);

		$username = htmlspecialchars(strip_tags($username));;
		$balance= htmlspecialchars(strip_tags($balance));
		
		$stmt->bindParam(":partner", $username);
		$stmt->bindParam(":balance", $balance);

		if($stmt->execute()){
			return true;
		}
		return false;

	}


		function creditPartnerWallet($username,$productamount){


			$query= " UPDATE partner_wallet SET balance = balance+:balance WHERE partner= :partner";
			$stmt = $this->conn->prepare($query);

			$productamount= htmlspecialchars(strip_tags($productamount));


			$stmt->bindParam(":balance", $productamount);
			$stmt->bindParam(":partner", $username);
			
			if ($stmt->execute()){
				return true;
			}
			return false;

		}

		



	
	function getPartnerInfo($username){
		$sql =$this->conn->prepare( "SELECT  DISTINCT customer_username FROM  partner_trans WHERE partner=? ORDER BY id DESC");
		$sql->execute([$username]);
		return $sql;


	}

	
	function getcustomerDetail($customer){


		$query= " SELECT  customer_username FROM  partner_trans WHERE customer_username=? ORDER BY id DESC";
		$sql = $this->conn->prepare($query);
		$sql->execute([$customer]);
		return $sql;

	}



	function getcustomerAmount($customer,$username){


		$query= "SELECT  SUM(amount) AS amount FROM partner_trans WHERE customer_username=? AND partner=?ORDER BY id DESC";
		$sql = $this->conn->prepare($query);
		$sql->execute([$customer,$username]);
		return $sql;

	}


	

	function totalSpentByCustomer($customer,$username,$amount){


		$query = "INSERT INTO total_spentby_customer SET partner=:partner, username=:username, amount=:amount";
		$stmt = $this->conn->prepare($query);

		$username = htmlspecialchars(strip_tags($username));
		$customer= htmlspecialchars(strip_tags($customer));
		$amount= htmlspecialchars(strip_tags($amount));
		
		$stmt->bindParam(":username", $customer);
		$stmt->bindParam(":partner", $username);
		$stmt->bindParam(":amount", $amount);

		if($stmt->execute()){
			return true;
		}
		return false;

	}

	

	function gettotalSpentByCustomer($customer,$username){


		$query= "SELECT * FROM total_spentby_customer WHERE username=? AND partner=? ORDER BY id DESC";
		$sql = $this->conn->prepare($query);
		$sql->execute([$customer,$username]);
		return $sql;

	}

        
      
}
	
?>