<?php
@session_start();

if(isset($_SESSION['partner']) && !empty($_SESSION['partner']))
{
	$username = $_SESSION['partner'];
	
	$chkpartner = $partner->partnerDetails($username);
	$chkNozzle=$product->getNozzle($username);
	
	
	if(!$chkpartner){
	echo "<script>
	alert('Invalid Login Details');
	window.location.href='../merchant_view/login';
	</script>";
	}
	$noz= $chkNozzle->fetch(PDO::FETCH_ASSOC);
	$nozzle = $noz['nozzle'];
	//$status = $noz['status'];

	

	$rw= $chkpartner->fetch(PDO::FETCH_ASSOC);
	$pix = $rw['pix'];
	$email = $rw['email'];
	$fname = $rw['fname'];
	$phoneno = $rw['phoneno'];
	$sta=$rw['status'];
	$balance = 0;
	
	$chkProd1 = $product->getpro("Petrol",$username);
	$count1 = $chkProd1->rowCount();

	if($count1 < 1){
		$insertpro1 = $product->addpro("Petrol",$username);
	}


	$chkProd2 = $product->getpro("Diesel",$username);
	$count2 = $chkProd2->rowCount();

	if($count2 < 1){
		$insertpro2 = $product->addpro("Diesel",$username);
	}


	$chkProd3 = $product->getpro("Gas",$username);
	$count3 = $chkProd3->rowCount();

	if($count3 < 1){
		$insertpro3 = $product->addpro("Gas",$username);
	}


	
	$getWallet = $partner->getPartnerWallet($username);

	$count = $getWallet->rowCount();



	if($count > 0){
		$rw2= $getWallet->fetch(PDO::FETCH_ASSOC);
		$balance = floatval($rw2['balance']);
	}else
	{

		$createWallet = $partner->createPartnerWallet($username, $balance);
		if($createWallet){
			header('location:../login');
		}
	}
	

}
else
{
	echo "<script>window.location.href='../login';</script>";
}





?>