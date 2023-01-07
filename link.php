<?php

include_once 'config/conn.php';
include_once 'model/Partner.php';
include_once 'model/Pending.php';
include_once 'model/Product.php';
include_once 'model/Transaction.php';
include_once 'model/Transfer.php';
include_once 'model/User.php';
include_once 'model/Confirm.php';
include_once 'model/UserAdmin.php';
include_once 'model/Twidii.php';
$database = new Database;
$db = $database->getConnect();

$user= new User($db);
$twidii= new Twidii($db);
$partner= new Partner($db); 
$product= new Product($db);
$transaction= new Transaction($db);
$pending= new Pending($db);
$transfer= new Transfer($db);
$confirm= new Confirm($db); 
$superadmin=new SuperAdmin($db);



?>