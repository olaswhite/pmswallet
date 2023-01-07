
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
    <link rel="stylesheet" href="../resources/css/frontend_css/jstable.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/js/all.min.js" 
    integrity="sha256-E5mramsMV1XxSt/DJLJzswHQCPGNBDl+0eA/OeSs644=" crossorigin="anonymous"></script>    <!-- END THEME STYLES -->
  </head>
  <body>


<?php
include 'frontend_header.php';
include 'frontend_sidebar.php';
 
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
                  <span class="d-block text-muted float-right  h1" title="This is the balance in your wallet"><s>N</s><?= number_format($balance, 2, '.', ''); ?></span>
                  <span class="d-block text-muted h6">Welcome back to your Dashboard</span>
                  
                  
                </p>
              </header>
              <!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <!-- metric row -->
                  <div class="metric-row">
                    <div class="col-lg-9">
                      <div class="metric-row metric-flush">
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="" class="metric metric-bordered align-items-center">
                                
                            <h2 class="metric-label">
                            <i class="fa fa-wallet fa-5x"></i>
                            </h2>
                              
                            <p class="metric-value h3">
                              <sub>
                                <!-- <i class="oi oi-people"></i> -->
                                <h2><button type="button" class="btn btn-primary  rounded">Customers</button></h2>
                              </sub>
                              <span class="value "></span>
                            </p>
                          </a>
                          <!-- /.metric -->
                        </div>
                        <!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <div  class="metric metric-bordered align-items-center">
                                
                            <h2 class="metric-label">
                            <i class="fa fa-money fa-5x"></i>
                            </h2>
                              
                            <p class="metric-value h3">
                              <sub>
                                <!-- <i class="oi oi-people"></i> -->
                                <h2><a href="waiting_delivery"  class="btn btn-primary  rounded"  > Wainting for delivery</a></h2>
                              </sub>
                              <span class="value "></span>
                            </p>
                          </div>
                          <!-- /.metric -->
                        </div>
                        <!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="../usertails/fund_wallet" class="metric metric-bordered align-items-center">
                                
                            <h2 class="metric-label">
                            <i class="fa fa-mobile fa-5x"></i>
                            </h2>
                              
                            <p class="metric-value h3">
                              <sub>
                                <!-- <i class="oi oi-people"></i> -->
                               <h2> <button type="button" class="btn btn-primary  rounded">Delivered</button></h2>
                              </sub>
                              <span class="value "></span>
                            </p>
                          </a>
                          <!-- /.metric -->
                        </div>
                        <!-- /metric column -->
                      </div>
                    </div>
                   <!-- metric column -->
                   <div class="col">
                          <!-- .metric -->
                          <a href="" class="metric metric-bordered align-items-center">
                                
                            <h2 class="metric-label">
                            <i class="fa fa-shopping-bag fa-5x"></i>
                            </h2>
                              
                            <p class="metric-value h3">
                              <sub>
                                <!-- <i class="oi oi-people"></i> -->
                               <h2> <button type="button" class="btn btn-primary  rounded" >Total Amount</button></h2>
                              </sub>
                              <span class="value "></span>
                            </p>
                          </a>
                          <!-- /.metric -->
                        </div>
                        <!-- /metric column -->
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



                               
 
    
    
    
                             
    <?php
    
    include 'frontend_footer.php';
    ?>




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
    <script src="../resources/js/frontend_js/jstable.js"></script>
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