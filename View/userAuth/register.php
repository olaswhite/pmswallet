<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Register  Page </title>
        <!-- Bootstrap -->
        <link href="../resources/css/frontend_css/bootstrap.min.css"  type="text/css" rel="stylesheet">
    <!-- Style CSS -->
     <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <!-- Google Fonts -
    <link href="https://fonts.googleapis.com/css?family=Glegoo:400,700%7cRoboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome CSS -->
     <link href="font/css/fontawesome-all.css" type="text/css" rel="stylesheet">
    <!-- OwlCarosuel CSS -->
    <link href="../resources/css/frontend_css/owl.carousel.css" type="text/css" rel="stylesheet">
    <link href="../resources/css/frontend_css/owl.theme.default.css" type="text/css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->
  </head>
  <body class="bg-white shadow-sm index-forward" style="background-color:#fff">
    <!-- navbar-->
     
    <!-- Contact Section -->
    <section class="">
      <div class="container">
        <div class="card rounded-0 border-0">
          <div class="card-body p-4 p-lg-5">
            <div class="row py-5">
              <div class="col-lg-5">
                <h2>Request a <span class="text-primary text-justify">Call </span>Back</h2>
                <p class="mb-5 text-muted text-justify">Easylife enhance your cashless experience.<br>With Easylife your dreaming shopping<br> experience can come to reality</p>
                <ul class="list-unstyled mb-0">
                  <li>
                    <h5 class="text-muted">Address</h5>
                    <p class="text-muted">1798 Pretty View Lane, California</p>
                  </li>
                  <li>
                    <h5 class="text-muted">Email</h5>
                    <p class="text-muted">Construction@example.com</p>
                  </li>
                  <li>
                    <h5 class="text-muted">Phone</h5>
                    <p class="text-muted">+535 421 895 6523</p>
                  </li>
                </ul>
              </div>
              <div class="col-lg-7">
                
                  <form class="m-3" method="post" action="../../Controller/AuthController/reg.php">
                  <div class="row">
                      
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h5 class="h5 text-justify">
                        Get started with your account
                       Find your people. Engage your customers.</h5>

       <p class="text-justify">Build your brand. Do it all with Easylife. Already have an account?<a href="login"> Log in</a></p>


                        </h5>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">

                      <input class="form-control form-control-lg" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <input class="form-control form-control-lg" type="email" name="email" placeholder="Email address">
                    </div> 
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <input class="form-control form-control-lg" type="password" name="password" placeholder="Password">
                    </div>  
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <input class="form-control form-control-lg" type="password" name="cpassword" placeholder="Confirm Password">
                    </div>          
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <input class="form-control form-control-lg " type="text" name="fname" placeholder="First name">
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <input class="form-control form-control-lg" type="text" name="lname" placeholder="Last name">
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control form-control-lg" type="tel" name="phoneno" placeholder="Phone number">
                    </div>
                    
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Register</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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

  
    </script>
     </body>
</html>