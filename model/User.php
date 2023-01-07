<?php
class User{
	

private $conn;
public $user_id;
public $username;
public $password;
public $email;
public $phoneno;
public $fname;
public $lname;
public $pix;
public $price;
public $company;
public $partner_id;
public $amount;
public $credited;
public $from;
public $to;
public $msg; 
public $time; 
public $loop; 
public $loop_every;
public $nextTime;


public function __construct($db){
	
	$this->conn = $db;

}
            function getUser($email){
		$stmt =$this->conn->prepare( "SELECT * FROM users WHERE email=?  ");
			
		$stmt->execute([$email]);
		return $stmt;
		
	}

	function getUser2($username){
		$stmt =$this->conn->prepare( "SELECT * FROM users WHERE username=?");
		
		
		$stmt->execute([$username]);
		return $stmt;
		
	}


	function getUser3($username){
		$stmt =$this->conn->prepare( "SELECT * FROM trans WHERE username=?");
		
		
		$stmt->execute([$username]);
		return $stmt;
		
	}
		
	function checkUser($email){
		
		$stmt = $this->conn->prepare( "SELECT * FROM users WHERE email=? ");
		
		
		$stmt->execute([$email]);
		return $stmt;
		
	}
        
        function userReg($email, $phoneno, $password, $username, $fname, $lname){


				$stmt = $this->conn->prepare( "INSERT INTO users SET username=:username, email=:email, 
				password=:password, fname=:fname, lname=:lname, phoneno=:phoneno,  pix=:pix");
				$username= htmlspecialchars(strip_tags($username));
				$email = htmlspecialchars(strip_tags($email)) ;
				$password= password_hash($password, PASSWORD_DEFAULT);
				$phoneno= htmlspecialchars(strip_tags($phoneno));
				$fname= htmlspecialchars(strip_tags($fname));
				$lname= htmlspecialchars(strip_tags($lname));

				$pix = "pix.jpg";
				$stmt->bindParam(":username", $username);
				$stmt->bindParam(":email", $email);
				$stmt->bindParam(":password", $password);
				$stmt->bindParam(":fname", $fname);
				$stmt->bindParam(":lname", $lname);
				$stmt->bindParam(":pix", $pix);
				$stmt->bindParam(":phoneno", $phoneno);


				if($stmt->execute()){
					return true;
				}

			return false;
	}


          function createWallet($username, $balance){

			$query = "INSERT INTO wallet SET username=:username, balance=:balance";
			$stmt = $this->conn->prepare($query);

			$username = htmlspecialchars(strip_tags($username));;
			$balance= htmlspecialchars(strip_tags($balance));
			
			$stmt->bindParam(":username", $username);
			$stmt->bindParam(":balance", $balance);

			if($stmt->execute()){
				return true;
			}
			return false;

		}


		   
            
        function debitWallet($username,$amount){


			$query= "UPDATE wallet SET balance = balance-:balance WHERE username= :username";
			$stmt = $this->conn->prepare($query);
	
			$amount= htmlspecialchars(strip_tags($amount));
	
			$stmt->bindParam(":balance", $amount);
			$stmt->bindParam(":username", $username);
	
	
			if ($stmt->execute()){
				return true;
			}
			return false;
	
		}

		
		function depositAmount($username, $amount){

			$query = "INSERT INTO user_deposit SET username=:username, amount_deposited=:amount_deposited";
			$stmt = $this->conn->prepare($query);

			$username = htmlspecialchars(strip_tags($username));;
			$amount= htmlspecialchars(strip_tags($amount));
			
			$stmt->bindParam(":username", $username);
			$stmt->bindParam(":amount_deposited", $amount);

			if($stmt->execute()){
				return true;
			}
			return false;

		}


             function createTrans($ref, $username, $transtype, $amount,$to){

			$query = "INSERT INTO trans SET ref=:ref, username=:username, usercredited=:usercredited, transtype=:transtype, amount=:amount";
			$stmt = $this->conn->prepare($query);

			$ref = htmlspecialchars(strip_tags($ref));;
			$transtype= htmlspecialchars(strip_tags($transtype));
			$amount= htmlspecialchars(strip_tags($amount));


			$stmt->bindParam(":ref", $ref);
			$stmt->bindParam(":transtype", $transtype);
			$stmt->bindParam(":amount", $amount);
			$stmt->bindParam(":username", $username);
			$stmt->bindParam(":usercredited", $to);

			if($stmt->execute()){
				return true;
			}
			return false;
		}

		
		function updateTrans($ref, $username,$to,$amount){

			
			$query = "INSERT INTO recievedpayment SET ref=:ref, from_user=:from_user, to_user=:to_user, amount=:amount";
			$stmt = $this->conn->prepare($query);

			$ref = htmlspecialchars(strip_tags($ref));;
			$amount= htmlspecialchars(strip_tags($amount));


			$stmt->bindParam(":ref", $ref);
			$stmt->bindParam(":amount", $amount);
			$stmt->bindParam(":from_user", $username);
			$stmt->bindParam(":to_user", $to);
			

			if($stmt->execute()){
				return true;
			}
			return false;
		

		}


		function buycard($username,$phoneno,$network,$amount,$Ref){


			$query= "INSERT INTO airtime SET username=:username, phoneno=:phoneno, network=:network,amount=:amount,ref=:ref";
			$stmt = $this->conn->prepare($query);

			$username= htmlspecialchars(strip_tags($username));
			$network= htmlspecialchars(strip_tags($network));
			$phoneno= htmlspecialchars(strip_tags($phoneno));
			$amount= htmlspecialchars(strip_tags($amount));
			$Ref= htmlspecialchars(strip_tags($Ref));

			$stmt->bindParam(":username", $username);
			$stmt->bindParam(":network", $network);
			$stmt->bindParam(":phoneno", $phoneno);
			$stmt->bindParam(":amount", $amount);
			$stmt->bindParam(":ref", $Ref);


			if ($stmt->execute()){
				return true;
		
			return false;

		}
	}
                        
                
                    
            function WithdrawWallet($username,$amount){


				$query= "UPDATE wallet SET balance = balance-:balance WHERE username= :username";
				$stmt = $this->conn->prepare($query);
	
				$amount= htmlspecialchars(strip_tags($amount));
	
				$stmt->bindParam(":balance", $amount);
				$stmt->bindParam(":username", $username);
	
	
				if ($stmt->execute()){
					return true;
				}
				return false;
	
			}


			  

            function confirmBalance($username){

			$query = "SELECT * FROM wallet WHERE username=:username ";
			$stmt = $this->conn->prepare($query);

			$username = htmlspecialchars(strip_tags($username));;
			

			$stmt->bindParam(":username", $username);

			$stmt->execute();
			return    $stmt;

		}



        function getWallet($username){

			$query = "SELECT * FROM wallet WHERE username=? ";
			$stmt = $this->conn->prepare($query);
			$stmt->execute([$username]);
			return $stmt;
		}


        function tranHistory($username){

			$query= "SELECT * FROM trans WHERE username=? ORDER BY id  DESC";
			$stmt = $this->conn->prepare($query);
			$stmt->execute([$username]);			
				return $stmt;
		}


		function tranHistory2($username){

			$query= "SELECT * FROM 
			trans 
			JOIN recievedpayment WHERE trans.username=recievedpayment.from_user  AND trans.username=? ";
			$stmt = $this->conn->prepare($query);
			$stmt->execute([$username]);			
				return $stmt;
		}

		

            function hashPassword($password){
		return password_hash($password, PASSWORD_DEFAULT);
                }


	function userPixUpdate($userid, $pix){
		$query = "UPDATE users SET pix =:pix WHERE username=:username";
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

            function userDetails($username){
		$sql =$this->conn->prepare( "SELECT * FROM users  WHERE username=?");
		$sql->execute([$username]);
			return $sql;
                        
				}
				
				


	function chkUser($email, $username){
		
		$stmt = $this->conn->prepare( "SELECT * FROM users WHERE email=:email OR username=:username ");
		
		$email = htmlspecialchars(strip_tags($email));
		$username = htmlspecialchars(strip_tags($username));
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":username", $username);
		$stmt->execute();
		return $stmt;
	}


	function chkedit($phoneno, $fname, $lname){
		
		$stmt = $this->conn->prepare( "SELECT * FROM users WHERE phoneno=:phoneno,fname=:fname, lname=:lname");
		$phoneno = htmlspecialchars(strip_tags($phoneno));
		$fname = htmlspecialchars(strip_tags($fname));
		$lname = htmlspecialchars(strip_tags($lname));
		$stmt->bindParam(":phoneno", $phoneno);
		$stmt->bindParam(":fname", $fname);
		$stmt->bindParam(":lname", $lname);
		
		$stmt->execute();
		return $stmt;
	}

	


	function editUsers($phoneno,$fname,$lname,$email){


		$query = "UPDATE users SET phoneno=:phoneno, fname=:fname, lname=:lname WHERE email=:email " ;
		$stmt = $this->conn->prepare($query);

		$email= htmlspecialchars(strip_tags($email));
		$phoneno= htmlspecialchars(strip_tags($phoneno));
		$fname= htmlspecialchars(strip_tags($fname));
		$lname= htmlspecialchars(strip_tags($lname));
		
		$stmt->bindParam(":email",$email);
		$stmt->bindParam(":phoneno", $phoneno);
		$stmt->bindParam(":fname", $fname);
		$stmt->bindParam(":lname", $lname);
		$stmt->execute();
		return $stmt;

	}

	


		function vendorAvailaible(){

			$query= "SELECT * FROM partner";
			$stmt = $this->conn->prepare($query);
			
		$stmt->execute();
		return $stmt;



		}


		
		function revertWallet($pusername, $pamount){


			$query= "UPDATE wallet SET balance =:balance WHERE username= :username";
			$stmt = $this->conn->prepare($query);

			$amount= htmlspecialchars(strip_tags($pamount));


			$stmt->bindParam(":balance", $pamount);
			$stmt->bindParam(":username", $pusername);


			if ($stmt->execute()){
				return true;
		
			return false;

		}
	}

			
	function getTrans($ref){

		$query = "SELECT * FROM trans WHERE ref=?";
		$stmt = $this->conn->prepare($query);
		$stmt->execute([$ref]);
		return $stmt;
	}



		function creditWallet($username,$amount,$credited){


			$query= "UPDATE wallet SET balance = balance+:balance, credited=:credited WHERE username= :username";
			$stmt = $this->conn->prepare($query);

			$amount= htmlspecialchars(strip_tags($amount));


			$stmt->bindParam(":balance", $amount);
			$stmt->bindParam(":username", $username);
			$stmt->bindParam(":credited", $credited);


			if ($stmt->execute()){
				return true;
		
			return false;

		}





		
		

	



		

		


		


		
		

	}
}

?>