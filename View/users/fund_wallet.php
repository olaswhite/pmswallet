
        <?php 

        @session_start();


         include_once '../../Controller/AuthController/auth.php';


        if(isset($_POST['Deposit'])){
            $amount = $_POST['Amount'];

            if($updateWallet = $user->creditWallet($username,$amount,"Credited")){
                    $user-> depositAmount($username, $amount);
                echo "
                            <script>
                            alert('Deposit Successfully');
                            window.location.href='dashboard';
                            </script>
                ";
            }
            else
            {
               echo "
                            <script>
                            alert('Deposit Failed');
                            window.location.href='dashboard';
                            </script>
                ";
            }
        }

        ?>
        <meta name="theme-color" content="#3063A0">
            <!-- End FAVICONS -->

            <!-- BEGIN BASE STYLES -->
            <link rel="stylesheet" href="../resources/css/frontend_css/pace.min.css">
            <link rel="stylesheet" href="../resources/css/frontend_css/bootstrap.min.css">
            <link rel="stylesheet" href="../resources/css/frontend_css/open-iconic-bootstrap.min.css">

            <!-- END BASE STYLES -->
            <!-- BEGIN PLUGINS STYLES -->
            <link rel="stylesheet" href="../resources/css/frontend_css/flatpickr.min.css">
            <!-- END PLUGINS STYLES -->
            <!-- BEGIN THEME STYLES -->
            <link rel="stylesheet" href="../resources/css/frontend_css/main.min.css">
            <link rel="stylesheet" href="../resources/css/frontend_css/custom.css">
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
                          <span class="font-weight-bold display-4">Fund Wallet</span>
                          <span class="d-block text-muted h6">Fund your wallet from below options</span>
                          
                        </p>
                      </header>
                      <!-- /.page-title-bar -->
                      <!-- .page-section -->
                      <div class="page-section">
<!--                         .section-block -->
                        <div class="section-block " >
<!--                           metric row -->
                          <div class="metric-row">
                            <div class="col-lg-12">
                              <div class="metric-row metric-flush">
<!--                                 metric column -->
                                <div class="col">
<!--                                   .metric -->
                                  <div href="#" class="metric metric-bordered align-items-center">

                                    <h2 class="metric-label">
                                    <i class="fa fa-credit-card fa-5x"></i>
                                    </h2>

                                   
                                      <sub>
                                    <p class="metric-value h3">
                                        
<!--                                         <i class="oi oi-people"></i> -->
                                          <h2>
                                              <button type="button" class="btn btn-primary  rounded" data-toggle="modal" data-target="#creditORDebitCardModal">Credit or debit card</button>
                                              
                                          </h2>
                                      </sub>
                                      <span class="value "></span>
                                  </p>
                                  </div>
<!--                                   /.metric -->
                                </div>
                                
                                                            
                                
<!--                                 /metric column 
                                 metric column -->
                                <div class="col">
<!--                                   .metric -->
                                  <div href="#" class="metric metric-bordered align-items-center">

                                    <h2 class="metric-label">
                                    <i class="fa fa-cash-register fa-5x"></i>
                                    </h2>

                                    <p class="metric-value h3">
                                      <sub>
<!--                                         <i class="oi oi-people"></i> -->
                                        <h2><button type="button" class="btn btn-primary  rounded" data-toggle="modal" data-target="#bankTransferModal">Bank transfer</button></h2>
                                      </sub>
                                      <span class="value "></span>
                                    </p>
                                  </div>
<!--                                   /.metric -->
                                </div>
                                
<!--                                 /metric column 
                                 metric column -->
                                <div class="col">
<!--                                   .metric -->
                                  <div href="user-teams.html" class="metric metric-bordered align-items-center">

                                    <h2 class="metric-label">
                                    <i class="fa fa-coins fa-5x"></i>
                                    </h2>

                                    <p class="metric-value h3">
                                      <sub>
<!--                                         <i class="oi oi-people"></i> -->
                                          <h2> <button type="button" class="btn btn-primary  rounded" data-toggle="modal" data-target="#bitCoinModal">Deposit with bitcoin</button></h2>
                                      </sub>
                                      <span class="value "></span>
                                    </p>
                                  </div>
<!--                                 -  /.metric-- -->
                                </div>
<!--                                 /metric column -->
                              
                            
<!--                            metric column -->
                           <div class="col">
<!--                                   .metric -->
                                  <div href="user-teams.html" class="metric metric-bordered align-items-center">

                                    <h2 class="metric-label">
                                    <i class="fab fa-paypal fa-5x"></i>
                                    </h2>

                                    <p class="metric-value h3">
                                      <sub>
<!--                                         <i class="oi oi-people"></i> -->
                                       <h2> <button type="button" class="btn btn-primary  rounded" data-toggle="modal" data-target="#paypalModal">Deposit with paypal</button></h2>
                                      </sub>
                                      <span class="value "></span>
                                    </p>
                                  </div>
<!--                                   /.metric 

                                  -->
                                </div>
<!--                                 /metric column -->
                          </div>
<!--                           /metric row -->
                        </div>
<!--                         /.section-block 
                         grid row 
                        -->
                        <div class="row">
                      
                                    </div>
                    <!--   /.page-section -->
                    </div>
<!--                     /.page-inner -->
<!--                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="border m-3">
                                    <p></p>
                                <button class="btn btn-primary text-center m-5" data-toggle="modal" data-target="#creditORDebitCardModal">Credit</button>
                               </div>
                            </div>
                        </div>
                    </div>-->
                    
                    
                  </div>
                  <!-- /.page -->
                </div>

                      

                <!-- /.wrapper -->
                                   
                      
                         <!----------------Debit or Credit Card Modal---------------------->


                <div class="modal fade" id="creditORDebitCardModal" tabindex="-1" role="dialog" aria-labelledby="#creditORDebitCardModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                          <h6 class="modal-title">Fund Wallet with your card</h6>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                          <div class="modal-body">
                              <form method="post" action="fund_wallet">
                                  
                                  <input type="number" name="Amount" id="Amount" class="form-control" placeholder="Amount to be deposited in your wallet">
                                 
                                     
                                        </div>

                                        <!-- Modal footer -->
                                        
                          <div class="modal-footer">
                          <button type="submit" name="Deposit" class="btn btn-primary">Pay Now</button>
                          </form> 
                          
                                <!-- <button type="button"   id="Rave" onClick="payWithRave()" class="btn btn-primary">Pay Now</button> -->
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          
                          
                                        </div>

                                      </div>
                                    </div>
                                  </div>
                   <!---------------------------- End of Credit or Debit Card Modal--------------------------->
                   
                                 <!----------------Bank transfer Modal---------------------->


                <div class="modal fade" id="bankTransferModal" tabindex="-1" role="dialog" aria-labelledby="#bankTransferModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                          <h6 class="modal-title">Fund Wallet with your Bank Account</h6>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                          <div class="modal-body">
                              <form method="post" action="">
                                  
                                  <input type="number" class="form-control" placeholder="Amount to be deposited in your wallet">
                                  </form>    
                                        </div>

                                        <!-- Modal footer -->
                          <div class="modal-footer">
                              <button type="submit" name="transfer" class="btn btn-primary">Transfer</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          
                                        </div>

                                      </div>
                                    </div>
                                  </div>
                   <!----------------------------End of Bank Transfer Modal--------------------------->
                      
                   
                      <!----------------Bitcoin Modal---------------------->


                <div class="modal fade" id="bitCoinModal" tabindex="-1" role="dialog" aria-labelledby="#bitCoinModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                          <h6 class="modal-title">Fund Wallet with your bitcoin account</h6>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                          <div class="modal-body">
                              <form method="post" action="">
                                  
                                  <input type="number" class="form-control" placeholder="Amount to be deposited in your wallet">
                                  </form>    
                                        </div>

                                        <!-- Modal footer -->
                          <div class="modal-footer">
                              <button type="submit" name="paynow" class="btn btn-primary">Fund with Bitcoin</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          
                                        </div>

                                      </div>
                                    </div>
                                  </div>
                   <!---------------------------- End of Bitcoin Modal--------------------------->
                   
                   
                   
                   
                   <!----------------Paypal Modal---------------------->


                <div class="modal fade" id="paypalModal" tabindex="-1" role="dialog" aria-labelledby="#paypalModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                          <h6 class="modal-title">Fund Wallet with your Paypal account</h6>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                          <div class="modal-body">
                              <form method="post" action="">
                                  
                                  <input type="number" class="form-control" placeholder="Amount to be deposited in your wallet">
                                  </form>    
                                        </div>

                                        <!-- Modal footer -->
                          <div class="modal-footer">
                              <button type="submit" name="paypal" class="btn btn-primary">Pay with Paypal</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          
                                        </div>

                                      </div>
                                    </div>
                                  </div>
                   <!---------------------------- pay with paypal Modal--------------------------->
                   
                   
                      
                      
              </main>
              <!-- /.app-main -->
              
              
              
              
              
              
                                       <!-------End of Main Contents----------->
            <?php

            include '../layouts/frontend_footer.php';
            ?>
                                       
                                       
                                       
        <script>
    const API_publicKey = "FLWPUBK_TEST-1c10180c7e32c3a7c7a249a0933dd646-X";

    $("#Rave").text("Waiting..."),
                                    $("#Rave").css("opacity", "0.5"),
                                    $("#Rave").attr("disabled", true);

    function payWithRave() {

var AllTotal = document.getElementById("Amount").value;
var fname = "<?php echo $fname; ?>";
var lname = "<?php echo $lname; ?>";
var phoneno = "<?php echo $phoneno; ?>";
var email = "<?php echo $email; ?>";
var username = "<?php echo $username; ?>";


        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: email,
                                    customer_firstname: fname,
                                    customer_lastname: lname,
                                    custom_description: "Easylife Pro",
                                    custom_logo: "http://www.iseletrends.com/images/getiv.png",
                                    custom_title: "Make Payment",
                                    amount: AllTotal,
                                    customer_phone: phoneno,
                                    currency: "NGN",
            txref: "<?php echo date("Ymds"); ?>",
           
            onclose: function() {
            	 $("#Rave").text("Pay Now"),
                                            $("#Rave").css("opacity", "1"),
                                            $("#Rave").attr("disabled", false);
            },
            callback: function(response) {
                var txref = response.tx.txRef; // collect txRef returned and pass to a 					server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.tx.chargeResponseCode == "00" ||
                    response.tx.chargeResponseCode == "0"
                ) {
                    // redirect to a success page
                window.location.href = "confirm?email="+ email +"&Ref="+ txRef +"&amt="+ AllTotal+"&username="+ username;
                } else {
                    // redirect to a failure page.
                    alert("Sorry, Transaction Unsuccessful");
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }
</script>
                                       
                <!-- <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>-->
                <script type="text/javascript" src="https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>             
                             
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