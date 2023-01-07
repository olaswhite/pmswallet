<?php 

Class SuperAdmin{

private $conn;
public $superAdmin;
public $username;
public $prod_id;
public $nozzle;
public $status;
public $pid;
public $product_name;
public $customer_name;
public $partnerStatus;
public $userStatus;


public function __construct($db){
	
	$this->conn = $db;

}

function approvePayment($username){
    $stmt=$this->conn->prepare("SELECT * FROM partner WHERE username=?");
    $stmt->execute(["$username"]);

    return $stmt;


}

function getUserDeposit($customer_name){
    $stmt=$this->conn->prepare("SELECT * FROM user_deposit WHERE username=?");
    $stmt->execute(["$customer_name"]);
    return $stmt;
}

function userBalance($customer_name){
    $stmt=$this->conn->prepare("SELECT * FROM wallet WHERE username=?");
    $stmt->execute(["$customer_name"]);
    return $stmt;


}


function allCustomer(){
    $stmt=$this->conn ->prepare(" SELECT * FROM users ");
    $stmt->execute();

    return $stmt;
}


function allPartner(){
    $stmt=$this->conn ->prepare(" SELECT * FROM partner ");
    $stmt->execute();

    return $stmt;
}



function customerPendingOrder($partnerStatus, $userStatus){
    $stmt=$this->conn ->prepare(" SELECT * FROM pending_pro WHERE $partnerStatus=? AND $userStatus=? ORDER BY id desc ");
    $stmt->execute([$partnerStatus,$userStatus]);

    return $stmt;
}



function waitingDelivery($username,$sta){
    $query= "SELECT * FROM pending_pro  WHERE  partnerstatus=? AND username=?" ;
    $stmt = $this->conn->prepare($query);
        $stmt->execute([$username,$sta]);
        return $stmt;

}


function deliveredProduct($partnerStatus, $userStatus){
    $stmt=$this->conn ->prepare(" SELECT * FROM pending_pro WHERE $partnerStatus=? AND $userStatus=? ORDER BY id desc ");
    $stmt->execute([$partnerStatus,$userStatus]);
    return $stmt;
}


function newCustomer($customer_name, $time){
    $stmt=$this->conn ->prepare(" SELECT * FROM users WHERE $customer_name=? AND $time=? ORDER BY id desc ");
    $stmt->execute([$customer_name,$time]);
    return $stmt;
}



function newPartner($username, $time){
    $stmt=$this->conn ->prepare(" SELECT * FROM users WHERE $username=? AND $time=? ORDER BY id desc ");
    $stmt->execute([$username,$time]);
    return $stmt;
}


function dailyAmountGenerated($userStatus,$time){
    $stmt=$this->conn ->prepare(" SELECT sum(amount) as amount FROM pending_pro WHERE $userStatus=? AND $time=? ORDER BY id desc ");
    $stmt->execute([$userStatus,$time]);
    return json_decode( $stmt);
}



function weeklyAmountGenerated($userStatus,$time){
    $stmt=$this->conn ->prepare(" SELECT sum(amount) as amount FROM pending_pro WHERE $userStatus=? AND $time=? ORDER BY id desc ");
    $stmt->execute([$userStatus,$time]);
    return $stmt;
}

function allAmountGenerated($partner){
    $stmt=$this->conn ->prepare(" SELECT sum(balance) as balance FROM partner_wallet WHERE $userStatus=? AND $partnerStatus=? ORDER BY id desc ");
    $stmt->execute([$userStatus,$partnerStatus]);
    return $stmt;
}



function weopeb($userStatus,$partnerStatus){
    $stmt=$this->conn ->prepare(" SELECT sum(amount) as amount FROM users WHERE $userStatus=? AND $partnerStatus=? ORDER BY id desc ");
    $stmt->execute([$userStatus,$partnerStatus]);
    return $stmt;
}



}


?>