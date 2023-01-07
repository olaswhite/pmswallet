<?php
class	Transaction{
	

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


	public function transfer($from, $to, $amount) {


	 	 // get available amount of the transferer account
            $sql = 'SELECT amount FROM accounts WHERE id=:from';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array(":from" => $from));
            $availableAmount = (int) $stmt->fetchColumn();
            $stmt->closeCursor();

            if ($availableAmount < $amount) {
                echo 'Insufficient amount to transfer';
                return false;
            }
            // deduct from the transferred account
            $sql_update_from = 'UPDATE accounts
				SET amount = amount - :amount
				WHERE id = :from';
            $stmt = $this->conn->prepare($sql_update_from);
            $stmt->execute(array(":from" => $from, ":amount" => $amount));
            $stmt->closeCursor();

            // add to the receiving account
            $sql_update_to = 'UPDATE accounts
                                SET amount = amount + :amount
                                WHERE id = :to';
            $stmt = $this->conn->prepare($sql_update_to);
            $stmt->execute(array(":to" => $to, ":amount" => $amount));

            // commit the transaction
            $this->conn->commit();

            echo 'The amount has been transferred successfully';
        }




        public function createWithdraw($username, $to, $amount) {


            // get available amount of the withdrawrer account
              $sql = 'SELECT balance FROM wallet WHERE username=:username';
              $stmt = $this->conn->prepare($sql);
              $stmt->execute(array(":username" => $username));
              $availableAmount = (int) $stmt->fetchColumn();
              $stmt->closeCursor();
  
              if ($availableAmount < $amount) {
                  echo 'Insufficient amount to transfer';
                  return false;
              }
              // deduct from the transferred account
              $sql_update_from = 'UPDATE accounts
                  SET amount = amount - :amount
                  WHERE id = :from';
              $stmt = $this->conn->prepare($sql_update_from);
              $stmt->execute(array(":from" => $from, ":amount" => $amount));
              $stmt->closeCursor();
  
              // add to the receiving account
              $sql_update_to = 'UPDATE accounts
                                  SET amount = amount + :amount
                                  WHERE id = :to';
              $stmt = $this->conn->prepare($sql_update_to);
              $stmt->execute(array(":to" => $to, ":amount" => $amount));
  
              // commit the transaction
              $this->conn->commit();
  
              echo 'The amount has been transferred successfully';
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



        function sumPartnerEarning($username){
            $sql = 'SELECT amount FROM accounts WHERE id=:from';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array(":from" => $from));
            $availableAmount = (int) $stmt->fetchColumn();
            $stmt->closeCursor();

        }



}
	
?>