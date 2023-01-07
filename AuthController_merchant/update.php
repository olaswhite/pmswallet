
<?php 
@session_start();
include_once "../link.php";

if(isset($_POST["update"])){

$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$fname = $_POST['fname'];
$username = $_POST['username'];


$chkpartner = $partner->chkPartner($email, $username);
$no = $chkpartner->rowCount();

if($no > 0)
{
  echo "
           <script>
                  alert('User Already in Existance');
                  window.location.href='../merchant_view/merchants/dashboard';
                  </script>
    ";
    
}

$ckedit=$partner->editpartner($email,$fname,$username,$phoneno);


      
        if( $ckedit ) {

          
             echo "
                                <script>
                        alert('sucessfully Activated');
                        window.location.href='../merchant_view/merchants/dashboard';
                        </script>
            ";
                
          
        }else{

            echo "
            <script>
            alert('Update not successfully');
            window.location.href='../merchant_view/merchants/dashboard';
                        </script>

          ";
        }

         
      }