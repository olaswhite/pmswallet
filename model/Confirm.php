<?php
class	Confirm{
	

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
public $from;
public $to;


public function __construct($db){
	
	$this->conn = $db;

}


function confirmAmount($pid,$username,$partner){

}






}