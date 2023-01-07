<?php

include '../../Controller/AuthController/auth.php';


if(isset($_POST['trans'])){

  $submit = $_POST['pending'];
  $pusername = $_POST['pusername'];
  $pamount = $_POST['pamount'];
  $product1 = $_POST['productname'];
   $date = date("ymdhs");
  $Ref = "ref-".$date;
 
 $pending->PendingUserStatus($submit, 2);
 $user->creditWallet($pusername, $pamount,$username);
 $insertTrans = $user->createTrans($Ref, $pusername,$pamount,$username, 'Credited');





 $insertPending=$partner->creditPartnerWallet($pusername,$pamount);
$insert = $partner->createPartnerTrans($Ref,$pusername,$username,$product1,$pamount,'Sell');



}


?>

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
                    <span class="font-weight-bold display-4">Product Request</span>
                    <span class="d-block text-muted mt-4 h6">Manage your product Wallet</span>
                  </p>
                </header>
                <!-- /.page-title-bar -->
                <div class="container">
    <h3></h2>
  
    <table id="easylife_table" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead class="bg-light">
    <tr>
                                            <th class="center">vendors Details</th>
                                            <th class="center"> Product Purchased</th>
                                            <th class="center"> Amount Paid </th>
                                            <th class="center"> Total Liters </th>
                                            <th class="center"> Nozzle Number </th>
                                            <th class="center"> Delivery Status</th>
                                              <th class="center"> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php

$getPending=$pending->PendingUserList($username);
if($getPending->rowCount() > 0)
{
while($set=$getPending->fetch(PDO::FETCH_ASSOC))
{
 $pending_id=$set['id'];
 $prod_id= $set['prod_id'];
 $ref= $set['ref'];
 $partner_username= $set['partner'];
 $pamount= $set['amount'];
 $amount=intval($pamount);
 $partnerstatus= $set['partnerstatus'];
 $userstatus= $set['userstatus'];
 $nozzle= $set['nozzle'];

$getVendor = $partner->partnerDetails($partner_username);
$i= $getVendor->fetch(PDO::FETCH_ASSOC);

$partner_pix= $i['pix'];
 $partner_fname= $i['fname'];
 $partner_email= $i['email'];
 $partner_phoneno= $i['phoneno'];

 $getProduct = $product->getpro2($prod_id);
$i= $getProduct->fetch(PDO::FETCH_ASSOC);

 $product_name= $i['prod_name'];
 $product_price= $i['prod_price'];
 $price=intval($product_price);
 $totalliter= number_format($amount / $price,2 );
 $btn ='';

 if($partnerstatus == 0){
    $status = '<div class="btn btn-warning">Waiting Delivery</div>';
 }elseif($partnerstatus == 1 && $userstatus == 1){
$status = '<div class="btn btn-info">Delivered</div>';
$btn= '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#b'.$pending_id.'">Confirm Delivery</button>';
 }elseif($partnerstatus == 1 && $userstatus == 0){
  $status = '<div class="btn btn-danger">Cancelled</div>';
   }
 elseif($partnerstatus == 1 && $userstatus == 2){
$status = '<div class="btn btn-success">Confirmed</div>';
 }





 echo'


                                        <tr>
                                            <td class="center"><div class="row">
                                            <div class="col-sm-4"><img src="../../upload/'.$partner_pix.'" class="img-rounded" width= 50 /></div>
                                            <div class="col-sm-6">'.@$partner_fname.'
                                            

                                            </div></td>
                                            
                                            <td class="center">
                                            '.@$product_name.' @ '.@$product_price.'
                                        
                                            </td>
                                            <td class="center">'.$pamount.'</td>
                                            <td class="center">'.$totalliter.'</td>
                                            <td class="center">'.$nozzle.'</td>
                                            <td class="center">'.$status.'</td>
                                            <td class="center">

                                            <!-- Trigger the modal with a button -->


                                            '.@$btn.'

<!-- Modal -->
<!-- Modal for buying  product -->
<div id="b'.$pending_id.'" class="modal fade" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
             
        <form method="post" action ="product_request"class="credit-card-div">
        <h6>Are you sure want to confirm</h6>

     <div class="row">
<div class="col-md-12 pad-adjust">
<div class="center">
<input hidden value="'.$pending_id.'" name="pending" />
<input hidden value="'.$partner_username.'" name="pusername" />
<input hidden value="'.$product_name.'" name="productname" />
<input hidden value="'.$pamount.'" name="pamount" />

     <button type="submit" name="trans" class="btn btn-info btn-lg"  >Yes</button>
    <button type="reset" class="btn btn-danger btn-lg  " data-toggle="modal" >No</button>
    
 <div>
    
</div>
     </div>

            </form>

      </div>
  </div>
</div>
</div>

<!-- end Modal for buying  product -->


                                            </td>
                                            
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
      
      include'../layouts/frontend_footer.php';
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