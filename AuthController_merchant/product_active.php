<?php
include_once "../link.php";
@session_start();

if(isset($_POST['Prod_Active'])){
        $username = $_SESSION['partner'];
    $status= $_POST['status'];
     $prod_name= $_POST['Prod_name'];

     if($product->proStatus($prod_name,$username,$status)){

            echo "
                                <script>
                        alert('sucessfully Activated');
                        window.location.href='../merchant_view/merchants/activate_product';
                        </script>
            ";
     }
     else
     {
         echo "
                                <script>
                        alert('Not sucessfully Activated');
                        window.location.href='../merchant_view/merchants/activate_product';
                        </script>
            ";

     }
}
?>