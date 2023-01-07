<?php 
@session_start();
include_once '../../link.php';

	
if(isset($_POST["ProductAdd"])){

    $prod_id= $_POST['prod_id'];
    $prod_price = $_POST['prod_price'];
   
    
    
    


    $ckedit=$product->updateproprice($prod_id,$prod_price);


          
            if( $ckedit ) {

                 echo "
                <script>
                alert('Product Price set   successfully');
                window.location.href='dashboard';
                </script>   ";

              
            }

            echo "
                <script>
                alert('Not Set successfully');
                window.location.href='dashboard';
                </script>

              ";
          }