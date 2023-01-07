<?php 
@session_start();
include_once '../../link.php';
include_once '../../AuthController_merchant/auth.php';

if(isset($_POST["NozzleAdd"])){

    $nozzle= $_POST['nozzle'];    
      

    $ckedit=$product->updateNozzle($nozzle,$username,$status);
          
            if(!$ckedit) {

                

                echo "
                <script>
                alert('Not Active your product first Set successfully');
                window.location.href='dashboard';
                </script>

              ";
              
            }else{
                echo "
                <script>
                alert('Number of Nozzle set successfully');
                window.location.href='dashboard';
                </script>   ";
            }

            
          }