
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Login  Page </title>
    <!-- Bootstrap -->
    <link href="resources/css/frontend_css/bootstrap.min.css"  type="text/css" rel="stylesheet">
   
    <!-- Style CSS -->
     <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <!-- Google Fonts -
    <link href="https://fonts.googleapis.com/css?family=Glegoo:400,700%7cRoboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!--  FontAwesome CSS -->
     <link href="font/css/fontawesome-all.css" type="text/css" rel="stylesheet">
    <!-- OwlCarosuel CSS -->
    <link href="resources/css/frontend_css/owl.carousel.css" type="text/css" rel="stylesheet">
    <link href="resources/css/frontend_css/owl.theme.default.css" type="text/css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->
</head>
<body style="background-color : #eeeeee">
<div class="container">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                 <h2 class="text-center py-4">EasyLife Wallet</h2>
                    <!-- form card login -->
                    <div class="card bg-light">
                       <div class="card-header bg-white">
                            <h3 class="h5 text-center text-muted lead">LOGIN TO YOUR DASHBOARD</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="../AuthController_merchant/log" >
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control form-control-lg rounded" name="email" id="email" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded"  name="password" id="password" required="" >
                                    <div class="invalid-feedback">Enter your password too!</div>
                                </div>
                                <div class="d-flex justify-content-around">
                                    <label class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description small text-dark">Remember me on this computer</span>
                                    </label>
                                    <span><a href="">forgot password?</a></span>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" id="btnLogin" name="login">Login</button>
                            </form>
                             <p class=" mt-4 text-center text-muted lead"><small>Don't have a Easylife account?<a href="register" class="text-primary">&nbsp;Register</a></small></p>

                        </div>
                        <!--/card-block-->
                    </div>
                   <ul class="list-inline text-center py-2 ">
            <li class="list-inline-item"><small>&nbsp;Terms & Condition</small></li>
             <li class="list-inline-item"><small>Privacy&nbsp;</small></li>
               <li class="list-inline-item"></small>&nbsp;Help</small></li>
        
      </ul>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->


 
<script src="../resources/js/frontend_js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../resources/js/frontend_js/bootstrap.min.js"></script>
    <script src="../resources/js/frontend_js/menumaker.js"></script>
    <script src="../resources/js/frontend_js/return-to-top.js"></script>
    <script src="../resources/js/frontend_js/sticky-header.js"></script>
    <script src="../resources/js/frontend_js/jquery.sticky.js"></script>
    <script src="../resources/js/frontend_js/owl.carousel.min.js"></script>
    <script src="../resources/js/frontend_js/multiple-carousel.js"></script>


    <script type="text/javascript">
          $("#btnLogin").click(function(event) {

    //Fetch form to apply custom Bootstrap validation
    var form = $("#formLogin")

    if (form[0].checkValidity() === false) {
      event.preventDefault()
      event.stopPropagation()
    }
    
    form.addClass('was-validated');
  });

    </script>


  
</body>



</html>