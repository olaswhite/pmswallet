
  <?php

include '../layouts/frontend_header.php';

include '../layouts/frontend_sidebar.php';

?>


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
                    <span class="font-weight-bold display-4">PMS</span>
                    <span class="d-block text-muted mt-4 h6">Manage your PMS Wallet</span>
                  </p>
                </header>
                <!-- /.page-title-bar -->
                <div class="container">
    <h3></h2>
  
    <table id="easylife_table" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead class="bg-light">
      <tr>
        <th>Company Name</th>
        <th>Product</th>
        <th>Price</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>

   <?php
   
$vendor= $product->productAvail('Active', 'Petrol');

while($set=$vendor->fetch(PDO::FETCH_ASSOC))
{
 
 $partner_id= $set['partner_id'];
 $partner_pix= $set['pix'];
 $partner_fname= $set['fname'];
 $partner_email= $set['email'];
 $partner_phoneno= $set['phoneno'];
 $product_name= $set['prod_name'];
 $product_price= $set['prod_price'];
 $product_status= $set['status']; 
 $product_id= $set['prod_id'];
 $partner_username=$set['username'];
 $nozzle=$set['nozzle'];
 $nozzle1=intval($nozzle);
 
 
 
 $res= '';
 for($i=1; $i<=$nozzle1; $i++){
     $res.="<option> Nozzle $i</option>";
  
 }


 echo ' <tr>
 <td class="center">'.$partner_fname.'</td>
 <td class="center">'.$product_name.'</td>
 <td class="center">'.$product_price.'</td>
 <td>
 <div class="btn-group btn-group-sm">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buyProductModal'.$product_id.'">Buy</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#companyDetailsModal'.$product_id.'">Company Details</button> </td></tr>

</div>


<div class="modal fade" id="buyProductModal'.$product_id.'" tabindex="-1" role="dialog" aria-labelledby="#buyProductModal">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content" >

    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title h4"><small>You are buying  '.$product_name.'  from &nbsp; &nbsp;&nbsp;'.$partner_fname.' at the rate of '.$product_price.'</small></h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">      
    <form method="post" action="../../controller/AuthController/buyproduct">

               <input name="pusername" hidden value="'.@$partner_username.'" />
                <input name="pid" hidden value="'.@$product_id.'" />
                <input name="pname" hidden value="'.@$product_name.'" />
                <input name="prate" hidden value="'.@$product_price.'" />

         <input type="number" class="form-control form-control-lg" name="amount" placeholder="Amount" min="'.@$product_price.'" " required>
        <select name="nozzle" class="form-control-lg custom-select mt-4">
            
        
            <option value="">Select You want to buy from</option>
          
          '.@$res.';
          
      </select>
            </div>

    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="Buy" >Buy</button>
     
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </form>
    </div>

  </div>
</div>
</td>
<td>
 <!----------------Company Details Modal---------------------->


                <div class="modal fade" id="companyDetailsModal'.$product_id.'" tabindex="-1" role="dialog" aria-labelledby="#companyDetailsModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                          <h6 class="modal-title">View Company Details</h6>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <div class="modal-body" >
                          <table class = "center" p-3> 
                           <th class="center"> Logo </th>
                                            <th class="center"> Details </th>
                                            <th class="center"> Product </th>
                                            <th class="center"> Product Price </th>
                                            
                                            </tr><td><img src="../../upload/'.@$partner_pix.'" class = "img_round" width = "50"/></td>
                                                <td class = "center">'.@$partner_fname.'</td>
                                                    <td class = "center">'.@$product_name.'</td>
                                                        <td class="center">'.@$product_price.'</td></tr>
  
                          </table>
                              
                           </div>

                                        <!-- Modal footer -->
                          <div class="modal-footer">
             
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          
                                        </div>

                                      </div>
                                    </div>
                                  </div>
                   <!----------------------------End of Company Details Modal--------------------------->
 


</td>

';
}

 ?>
      
      
    
           
    </tbody>
    
   
  </table>

  </div>
 
</div>
             

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
  
  
  <script>
  
  $(document).ready(function() {
    $('#example').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
} );
  
  </script>
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
      <script src="../resources/js/frontend_js/validation.js"></script>
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
