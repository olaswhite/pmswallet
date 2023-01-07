<?php
@session_start();
 include_once '../../link.php';

if(isset($_SESSION['user']) && !empty($_SESSION['user']))
{
	
	$username = $_SESSION['user'];
	$chkuser = $user->getUser2($username);
	
		

	if(!$chkuser){
	echo "<script>window.location.href='../../View/userAuth/login'</script>";
	}

	
	$rw= $chkuser->fetch(PDO::FETCH_ASSOC);
	$pix = $rw['pix'];
	$email = $rw['email'];
	$fname = $rw['fname'];
	$lname = $rw['lname'];
	$phoneno = $rw['phoneno'];
	$userName= $rw['username'];
	$balance = 0;

	$getWallet = $user->getWallet($username);

	$count = $getWallet->rowCount();



	if($count > 0){
		$rw2= $getWallet->fetch(PDO::FETCH_ASSOC);
		$balance = floatval($rw2['balance']);
	}
	else
	{

		$createWallet = $partner->createWallet($username, $balance);
		if($createWallet){
			header('location:../../View/users/dashboard');
		}
	}
	
}
else
{
	echo "<script>window.location.href='../../View/userAuth/login'</script>";
}





?>