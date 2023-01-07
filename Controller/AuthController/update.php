
<?php 
@session_start();
include_once "../../link.php";

if(isset($_POST["update"])){

$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$ckedit=$user->editUsers($phoneno,$fname,$lname,$email);


      
        if( $ckedit ) {

             echo "
            <script>
            alert('Update  successfully');
            window.location.href='../../View/users/dashboard';
            </script>   ";

          
        }

        echo "
            <script>
            alert('Update not successfully');
            window.location.href='../../View/users/dashboard';
            </script>

          ";
      }