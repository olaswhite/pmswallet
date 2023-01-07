<?php 
 @session_start();

 include_once '../../link.php';
 include '../../AuthController_merchant/auth.php';?>

<meta name="theme-color" content="#3063A0">
      <!-- End FAVICONS -->
      
      <!-- BEGIN BASE STYLES -->
      <link rel="stylesheet" href="../resources/css/frontend_css/bootstrap.min.css">
      <link rel="stylesheet" href="../resources/css/frontend_css/pace.min.css">
      <link rel="stylesheet" href="../resources/css/frontend_css/open-iconic-bootstrap.min.css">
    
      <!-- END BASE STYLES -->
      <!-- BEGIN PLUGINS STYLES -->
      <link rel="stylesheet" href="../resources/css/frontend_css/flatpickr.min.css">
      <!-- END PLUGINS STYLES -->
      <!-- BEGIN THEME STYLES -->
      <link rel="stylesheet" href="../resources/css/frontend_css/main.min.css">
      <link rel="stylesheet" href="../resources/css/frontend_css/custom.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/js/all.min.js" 
      integrity="sha256-E5mramsMV1XxSt/DJLJzswHQCPGNBDl+0eA/OeSs644=" crossorigin="anonymous"></script> 


       <!-- END THEME STYLES -->
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
                    <span class="font-weight-bold display-4">Diesel</span>
                    <span class="d-block text-muted mt-4 h6">Manage your Diesel Wallet</span>
                  </p>
                </header>
                <!-- /.page-title-bar -->
                <div class="container">
    <h3></h2>
  
    <table id="easylife_table" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead class="bg-light">
      <tr>
    
        <th>Customer Name</th>
        <th>Purchased</th>
       
      </tr>
    </thead>

    <tbody>
      <?php 
        
        $get=$partner->getPartnerInfo($username);
        if($get->rowCount() > 0)
      {
        while($set=$get->fetch(PDO::FETCH_ASSOC)){

          $customer=$set['customer_username'];
         

         
          

         $getAmount=$partner-> getcustomerAmount($customer,$username);
         $i=$getAmount->fetch(PDO::FETCH_ASSOC);
         
         
         $amount=$i['amount'];
         $totalAmount=intval($amount);

          echo '<tr>
          <th scope="row">'.@$customer.'</th>
          <td><strike><em>N</em></Strike>&nbsp;'.@$totalAmount.'</td>
        
          
        </tr>';
          

          
          
        }

        
       
      }else{
       echo 'No record';
      }

     
      
      ?>
     
    </tbody>

  </table>
      
<div id="listingTable">
1
<div id="listingTable"></div>
2
<a href="javascript:prevPage()" id="btn_prev">Prev</a>
3
<a href="javascript:nextPage()" id="btn_next">Next</a>
4
page: <span id="page"></span>
  </div>
  </body>
  </html>


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
      
      include '../layouts/frontend_footer.php';
      ?>
  <!-- BEGIN BASE JS -->
  <script src="../resources/js/frontend_js/jquery.min.js"></script>
  <script src="../resources/js/frontend_js/pace.min.js"></script>
      <script src="../resources/js/frontend_js/popper.min.js"></script>
      <script src="../resources/js/frontend_js/bootstrap.min.js"></script>
      <script src="../resources/js/frontend_js/pagination.js"></script>
      
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js"
       integrity="sha256-L4cf7m/cgC51e7BFPxQcKZcXryzSju7VYBKJLOKPHvQ=" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/dataTables.bootstrap4.min.js"
        integrity="sha256-A8HQsn/9uXt+VRkaLhWtj7KMC8bYT76r3IB7iTqDtLo=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
        <script src="../../js/frontend_js/datatable_linking.js"></script>

      <!-- END PAGE LEVEL JS -->
      <select name="nozzle" class="form-control custom-select">
          <option value="">nozzle 1</option>
          <option value="">nozzle 2</option>
      </select>
    </body>

  </html>