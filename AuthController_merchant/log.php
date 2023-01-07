<?php
@session_start();
include_once "../link.php";

if(isset($_POST['login'])){

	$email = $_POST['email'];
	$password = $_POST['password'];

	$chkuser = $partner->checkPartner($email);

	if(!$chkuser)
	{
		echo "
	 				<script>
	                alert('Invalid Login Details');
	                window.location.href='../merchant_view/login';
	                </script>
		";
		die();
	}

	$getuser = $partner->getPartner($email);
	$rw = $getuser->fetch(PDO::FETCH_ASSOC);
	$email = $rw["email"];
	$pass = $rw["password"];
	$username=$rw["username"];

		if(!password_verify ($password,$pass))
		{
		echo "
		 			test
			";
			die();
		}

	$_SESSION['partner'] = $username;

	echo "<script>window.location.href='../merchant_view/merchants/dashboard';</script>";
	
	

}





?>