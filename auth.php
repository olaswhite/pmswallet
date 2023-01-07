<?php
@session_start();


if(isset($_SESSION['user']) && !empty($_SESSION['user']))
{
	
	$username = $_SESSION['user'];
	$chkuser = $user->getUser($username);
	
		

	if(!$chkuser){
	echo "window.location.href='../userlinks/userAuth/login';";
	}

	


	$rw= $chkuser->fetch(PDO::FETCH_ASSOC);
	$pix = $rw['pix'];
	$email = $rw['email'];
	$fname = $rw['fname'];
	$lname = $rw['lname'];
	$phoneno = $rw['phoneno'];
	$balance = 0;

	$getWallet = $user->getWallet($username);

	$count = $getWallet->rowCount();

	if($count > 0){
		$rw2= $getWallet->fetch(PDO::FETCH_ASSOC);
		$balance = floatval($rw2['balance']);
	}
	else
	{

		$createWallet = $user->createWallet($username, $balance);
		
		if($createWallet){
		header('location: ../userlinks/userdetails/dashboard');
		}
	}
	
}
else
{
	echo "window.location.href='../userlinks/userAuth/login';";
}


?>