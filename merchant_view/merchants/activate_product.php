<?php 
@session_start();
include_once '../../link.php';

 include '../../AuthController_merchant/auth.php';



?>
<meta name="theme-color" content="#3063A0">
    <!-- End FAVICONS -->
    
    <!-- BEGIN BASE STYLES -->
    <link rel="stylesheet" href="../resources/css/frontend_css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/frontend_css/custom.css">
    <link rel="stylesheet" href="../resources/css/frontend_css/flatpickr.min.css">
   
    <!-- END BASE STYLES -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="../resources/css/frontend_css/main.min.css">
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="../resources/css/frontend_css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/frontend_css/pace.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/js/all.min.js" 
    integrity="sha256-E5mramsMV1XxSt/DJLJzswHQCPGNBDl+0eA/OeSs644=" crossorigin="anonymous"></script>    <!-- END THEME STYLES -->
  </head>
  <body>


<?php
include '../layouts/frontend_header.php';
include '../layouts/frontend_sidebar.php';

 
 ?>
                              <!---- Main Contents    -------->
        <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <p class="lead">
                    <span class="font-weight-bold display-4"></span>
                    <span class="d-block text-muted h6">Welcome to merchant Dashboard</span>
                  
                  
                </p>
              </header>
              <!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <!-- metric row -->
                  <div class="metric-row">
                    <div class="col-lg-12">
                      <div class="metric-row metric-flush">
                        <!-- metric column -->
                       
        
           
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
            <form method="post" action="../../AuthController_merchant/product_active">
            <input name="Prod_name" hidden value="Petrol" />
            <input name="status" hidden value="Not-Active" /> 
            <button type="submit" name="Prod_Active" class="btn btn-danger btn-lg" >De-Activate Product</button>
            <br/>
            <span class="text-center" style="color:#6ABFFF;">N'.number_format(@$ProdPrice, 2).'</span>
            </form>
            ';
        }else{
            $staDis = '
            <form method="post" action="../../AuthController_merchant/product_active">
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
            <form method="post" action="../../AuthController_merchant/product_active">
            <input name="Prod_name" hidden value="Diesel" />
            <input name="status" hidden value="Not-Active" /> 
            <button type="submit" name="Prod_Active" class="btn btn-danger btn-lg" >De-Activate Product</button>
            <br/>
            <span class="text-center" style="color:#6ABFFF;">N'.number_format(@$ProdPrice, 2).'</span>
            </form>
            ';
        }else{
            $staDis = '
            <form method="post" action="../../AuthController_merchant/product_active">
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
            <form method="post" action="../../AuthController_merchant/product_active">
            <input name="Prod_name" hidden value="Gas" />
            <input name="status" hidden value="Not-Active" /> 
            <button type="submit" name="Prod_Active" class="btn btn-danger btn-lg" >De-Activate Product</button>
            <br/>
            <span class="text-center" style="color:#6ABFFF;">N'.number_format(@$ProdPrice, 2).'</span>
            </form>
            ';
        }else{
            $staDis = '
            <form method="post" action="../../AuthController_merchant/product_active">
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
</div>
                  </div>
                  <!-- /metric row -->
                </div>
                <!-- /.section-block -->
                <!-- grid row -->
                <div class="row">
                
                            </div>
              <!-- /.page-section -->
            </div>
            <!-- /.page-inner -->
          </div>
          <!-- /.page -->
        </div>
        <!-- /.wrapper -->
      </main>
      <!-- /.app-main -->
          
                               <!-------End of Main Contents----------->



                               




 <!-- BEGIN BASE JS -->
 <script src="../resources/js/frontend_js/jquery.min.js"></script>
  <script src="../resources/js/frontend_js/popper.min.js"></script>
  <script src="../resources/js/frontend_js/bootstrap.min.js"></script>
    <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="../resources/js/frontend_js/stacked-menu.min.js"></script>
    
    <script src="../resources/js/frontend_js/perfect-scrollbar.min.js"></script>
    <script src="../resources/js/frontend_js/flatpickr.min.js"></script>
    <script src="../resources/js/frontend_js/jquery.easypiechart.min.js"></script>
    <script src="../resources/js/frontend_js/Chart.min.js"></script>
    <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="../resources/js/frontend_js/main.min.js"></script>
    <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="../resources/js/frontend_js/easypiechart-demo.js"></script>
    <script src="../resources/js/frontend_js/dashboard-demo.js"></script>
    <script src="../resources/js/frontend_js/pace.min.js"></script>
    <!-- END PAGE LEVEL JS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
      // window.dataLayer = window.dataLayer || [];

      // function gtag()
      // {
      //   dataLayer.push(arguments);
      // }
      // gtag('js', new Date());
      // gtag('config', 'UA-116692175-1');
    </script>
  </body>

</html>