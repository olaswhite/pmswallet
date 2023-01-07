<?php 
@session_start();

include_once "../../link.php";

include '../../Controller/AuthController/auth.php';



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
                    <span class="font-weight-bold display-4">Product History</span>
                    <span class="d-block text-muted mt-4 h6">Manage your product history</span>
                  </p>
                </header>
                <!-- /.page-title-bar -->
                <div class="container">
    <h3></h2>
  
    <table id="easylife_table" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead class="bg-light">
      <tr>
                                           
                                            <th class="center">Refreences </th>
                                            <th class="center"> Transaction Type</th>
                                              <th class="center">Amount</th>
                                              <th class="center">Date</th>
                                              <th class="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php

$getHistory=$user->tranHistory($username);
if($getHistory->rowCount() > 0)
{
while($set=$getHistory->fetch(PDO::FETCH_ASSOC))
{
 $status="";
 $Ref=$set['ref'];
 $transtype= $set['transtype'];
 $amount= $set['amount'];
 $action=$set['usercredited'];
 
 $created= $set['created'];
 if($transtype==='Transfer'){
  $status.='To';
  
 }elseif ($transtype==='Recieved') {
  $status='From';
 }elseif ($transtype==='Purchase') {
  $status='From';
 }




 echo'


                                        <tr>
                                                                                        
                                            <td class="center">
                                            '.@$Ref.' </td>
                                        
                                            </td>
                                            <td class="center">'. $transtype.'&nbsp;&nbsp;&nbsp;'.$status.'&nbsp;&nbsp;&nbsp;'. $action.'</td>
                                            <td class="center">'.$amount.'</td>
                                             <td class="center">'.$created.'</td>
                                             <td class="center"><i class="delete"></i></td>
                                            
                                            
                                        </tr>

 ';

    
}
}
else
{
    echo'<div class="center">No Records</div>';
}

?>
           
    </tbody>
  </table>

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
      <script src="../resources/js/frontend_js/popper.min.js"></script>
      <script src="../resources/js/frontend_js/bootstrap.min.js"></script>
      <!-- END BASE JS -->
      <!-- BEGIN PLUGINS JS -->
     <script src="../resources/js/frontend_js/stacked-menu.min.js"></script>
      
      <script src="../resources/js/frontend_js//perfect-scrollbar.min.js"></script>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js"
       integrity="sha256-L4cf7m/cgC51e7BFPxQcKZcXryzSju7VYBKJLOKPHvQ=" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/dataTables.bootstrap4.min.js"
        integrity="sha256-A8HQsn/9uXt+VRkaLhWtj7KMC8bYT76r3IB7iTqDtLo=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
        <script src="../../js/frontend_js/datatable_linking.js"></script>

      <!-- END PAGE LEVEL JS -->
     
      </script>
    </body>

  </html>