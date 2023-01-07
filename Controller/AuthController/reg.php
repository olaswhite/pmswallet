<?php
session_start();
include_once "../../link.php";

if(isset($_POST['submit'])){

	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = trim($_POST['password']);
	$cpassword = trim($_POST['cpassword']);
	$phoneno = $_POST['phoneno'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	

	$chkuser = $user->chkUser($email, $username);
	$no = $chkuser->rowCount();

	if($no > 0)
	{
		echo "
		 				<script>
		                alert('User Already in Existance');
		                 window.location.href='../../view/userAuth/register';
		                </script>
			";
			
	}

	if($password != $cpassword){
		echo "
		 			<script>
		                alert('password mis matched');
		                 window.location.href='../../view/userAuth/register';
		                </script>
			";
			
			
	}


	
	if($no < 1 && $password== $cpassword)
	{
		
		$insertUser = $user->userReg($email, $phoneno, $password, $username, $fname, $lname);
		if($insertUser)
		{
			
			$_SESSION['user'] = $username;
			echo "
			<script>
			   alert('You are successfuly Register');
				window.location.href='../../view/users/dashboard';
			   </script>
   ";
   
	}

		
	}


	
	
	

// }

// $return["error"]= false;
// $return["message"]="";

// $val= isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["phoneno"]) &&
// isset($_POST["password"]) ;

// if($val){
// 	$username = $_POST["username"];
// 	$email = $_POST["email"];
// 	$phoneno = $_POST["phoneno"];
// 	$password = $_POST["password"];

// 	if($return['error']==false && strlen(($username<3))){
// 		$return["error"]=true;


// 	}

	
	
// }else{
// 	echo json_encode('error in your post');
// }
	
	

// 	$chkuser = $user->chkUser($email, $username);
// 	$no = $chkuser->rowCount();

// 	if($no > 0)
// 	{
// 		echo  json_encode(['user exist'=>$chkuser]);
			
// 	}



	
// 	if($no < 1 && $password== $cpassword)
// 	{
		
// 		$insertUser = $twidii->userReg($username,$email,$phoneno,$password);
// 		if($insertUser)
// 		{
			
// 			$_SESSION['user'] = $username;
// 			echo json_encode(['success'=>$insertUser]);
   
// 	}

		
// 	}


	
}
	


?>
