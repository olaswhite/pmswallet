
<?php 
session_start();
include_once "../link.php";
include_once 'auth.php';
include 'navbar.php';
include 'sideleft.php';
include 'rightsidebar.php';


if(isset($_POST['Prod_Active'])){

    $st= $_POST['status'];
     $pn= $_POST['Prod_name'];

     if($product->proStatus($pn, $username,$st)){

            echo "
                                <script>
                        alert('sucessfully Activated');
                        window.location.href='product';
                        </script>
            ";
     }
     else
     {
         echo "
                                <script>
                        alert('Not sucessfully Activated');
                        window.location.href='product';
                        </script>
            ";

     }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Dashbaord</title>
    <!-- Favicon-->
    <link rel="icon" href="../../../assets/images/favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="../../../assets/css/app.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="../../../assets/css/style.css" rel="stylesheet" />
    <link href="../../../../../../../../../cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.3.1/css/flag-icon.min.css" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="../../../assets/css/styles/all-themes.css" rel="stylesheet" />
</head>

<body class="dark">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="../../../assets/images/loading.png" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
   
    <!-- #Top Bar -->
   
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->


<!-- section start-->
   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Product</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="dashboard">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
           <div class="row clearfix">
<?php

$getPetrol = $product->getpro("Petrol", $username);
$count= $getPetrol->rowCount();
if($count > 0)
{
    foreach($getPetrol as $key => $list1){
        $ProdName = $list1['prod_name'];
        $ProdPrice = $list1['prod_price'];
        $status = $list1['status'];

        if($status == "Active"){
           
            $staDis = '
            <form method="post">
            <input name="Prod_name" hidden value="Petrol" />
            <input name="status" hidden value="Not-Active" /> 
            <select name= "prod_nozzle"><option>Nozzle 1</option></select>
            <button type="submit" name="Prod_Active" class="btn btn-danger btn-lg" >De-Activate Product</button>
            <br/>
            <span class="text-center" style="color:white;">N'.number_format(@$ProdPrice, 2).'</span>
            </form>
            ';
        }else{
            $staDis = '
            <form method="post">
            <input name="Prod_name" hidden value="Petrol" />
            <input name="status" hidden value="Active" /> 
            <button type="submit" name="Prod_Active" class="btn btn-success btn-lg" >Activate Product</button>
            </form>
            ';
        }

        
    }

    echo '

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <i class="fas fa-car"></i>
                        <div class="title p-t-15">
                            <h3>'.@$ProdName.'</h3>
                        </div>
                        <div class="text p-b-10">
                            <span>Why not activate your product with us have fast growing sales 24/7 active now and enjoy the best of sales.</span>
                        </div>
                        '.@$staDis.'
                    </div>
                </div>

        ';
}


$getPetrol = $product->getpro("Diesel", $username);
$count= $getPetrol->rowCount();
if($count > 0)
{
    foreach($getPetrol as $key => $list1){
        $ProdName = $list1['prod_name'];
        $ProdPrice = $list1['prod_price'];
        $status = $list1['status'];

       if($status == "Active"){
           
            $staDis = '
            <form method="post">
            <input name="Prod_name" hidden value="Diesel" />
            <input name="status" hidden value="Not-Active" /> 
            <button type="submit" name="Prod_Active" class="btn btn-danger btn-lg" >De-Activate Product</button>
            <br/>
            <span class="text-center" style="color:white;">N'.number_format(@$ProdPrice, 2).'</span>
            </form>
            ';
        }else{
            $staDis = '
            <form method="post">
            <input name="Prod_name" hidden value="Diesel" />
            <input name="status" hidden value="Active" /> 
            <button type="submit" name="Prod_Active" class="btn btn-success btn-lg" >Activate Product</button>
            </form>
            ';
        }

        
    }

    echo '

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <i class="fas fa-car"></i>
                        <div class="title p-t-15">
                            <h3>'.@$ProdName.'</h3>
                        </div>
                        <div class="text p-b-10">
                            <span>Why not activate your product with us have fast growing sales 24/7 active now and enjoy the best of sales.</span>
                        </div>
                        '.@$staDis.'
                    </div>
                </div>

        ';
}


$getPetrol = $product->getpro("Gas", $username);
$count= $getPetrol->rowCount();
if($count > 0)
{
    foreach($getPetrol as $key => $list1){
        $ProdName = $list1['prod_name'];
        $ProdPrice = $list1['prod_price'];
        $status = $list1['status'];

       if($status == "Active"){
           
            $staDis = '
            <form method="post">
            <input name="Prod_name" hidden value="Gas" />
            <input name="status" hidden value="Not-Active" /> 
            <button type="submit" name="Prod_Active" class="btn btn-danger btn-lg" >De-Activate Product</button>
            <br/>
            <span class="text-center" style="color:white;">N'.number_format(@$ProdPrice, 2).'</span>
            </form>
            ';
        }else{
            $staDis = '
            <form method="post">
            <input name="Prod_name" hidden value="Gas" />
            <input name="status" hidden value="Active" /> 
            <button type="submit" name="Prod_Active" class="btn btn-success btn-lg" >Activate Product</button>
            </form>
            ';
        }

        
    }

    echo '

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <i class="fas fa-car"></i>
                        <div class="title p-t-15">
                            <h3>'.@$ProdName.'</h3>
                        </div>
                        <div class="text p-b-10">
                            <span>Why not activate your product with us have fast growing sales 24/7 active now and enjoy the best of sales.</span>
                        </div>
                        '.@$staDis.'
                    </div>
                </div>

        ';
}

 ?>

                
                
             
         
    <!-- #END section start-->



    <!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">USER PROFILE</h4>
      </div>
      <div class="modal-body">
        <form action="imageupload" method="post" enctype="multipart/form-data">
            <table class="table">
                <th>
    Select image to upload:</th><tr><td>
        <input type="file" name="fileToUpload" id="fileToUpload" />
        <input type="hidden" name="UserID" value="<?= $pusername; ?>" />

    </td></tr>
    <tr><td><input type="submit" value="Upload Image" name="submit"></td></tr>
    
      <table class="table">

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

        
    </div>
   
    <script src="../../../assets/js/app.min.js"></script>
    <script src="../../../assets/js/chart.min.js"></script>
    <!-- Custom Js -->
    <script src="../../../assets/js/admin.js"></script>
    <script src="../../../assets/js/bundles/datamaps/d3.min.js"></script>
    <script src="../../../assets/js/bundles/datamaps/topojson.min.js"></script>
    <script src="../../../assets/js/bundles/datamaps/datamaps.world.min.js"></script>
    <script src="../../../assets/js/bundles/apexcharts/apexcharts.min.js"></script>
    <script src="../../../assets/js/pages/dashboard/dashboard2.js"></script>
</body>

</html>