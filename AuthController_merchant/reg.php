<?php
session_start();
include_once "../link.php";

if(isset($_POST['submit'])){

	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = trim($_POST['password']);
	$cpassword = trim($_POST['cpassword']);
	$phoneno = $_POST['phoneno'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	

	$chkpartner = $partner->chkPartner($email, $username);
	$no = $chkpartner->rowCount();

	if($no > 0)
	{
		echo "
		 				<script>
		                alert('User Already in Existance');
		                window.location.href='../merchant_view/login';
		                </script>
			";
			
	}

	if($password != $cpassword){
		echo "
		 			<script>
		                alert('password mis matched');
		                window.location.href='../merchant_view/login';
		                </script>
			";
			
			
	}


	
	if($no < 1 && $password== $cpassword)
	{
		
		$insertParner = $partner->partnerReg($fname, $username, $email, $phoneno, $password);
		if($insertParner)
		{
			
			$_SESSION['partner'] = $username;
			echo "
			<script>
			   alert('You are successfuly Register');
				window.location.href='../merchant_view/login';
			   </script>
   ";
   
	}

		
	}


	
	
	

}


?>
