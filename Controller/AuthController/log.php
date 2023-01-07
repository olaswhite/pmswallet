<?php
@session_start();
include_once "../../link.php";


if(isset($_SESSION['user']) && !empty($_SESSION['user']))
{
	
	//header("location:../userlinks/userAuth/login");
    
        
}


if(isset($_POST['login'])){

	$email = $_POST['email'];
	$password = $_POST['password'];
	

	$chkuser = $user->checkUser($email);

	$getuser = $user->getUser($email);
	$rw = $getuser->fetch(PDO::FETCH_ASSOC);
	$email = $rw["email"];
	$username=$rw["username"];
	$pass = $rw["password"];

		if(!password_verify($password, $pass))
		{

			echo "<script>window.location.href='../../View/userAuth/login';</script>";
			

			die();
		}

	$_SESSION['user'] = $username;

	echo "<script>window.location.href='../../View/users/dashboard';</script>";
	
	

}