 <!-- .app -->
 <?php 

@session_start();
include_once '../../link.php';
include_once '../../Controller/AuthController/auth.php';

include_once ('withdraw.php');
include_once ('buyairtime.php');
 

?>

 <div class="app">
      <!-- .app-header -->
      <header class="app-header">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <a href="dashboard">
            <span class="user-avatar">
              <img src="../../upload/<?= $pix; ?>" width='50px' height='50px' alt="profile" >
</span>
            </a>
          </div>
          <!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="Menu" aria-controls="navigation">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
              <!-- /toggle menu -->
            </div>
            <!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-full">
              <!-- .top-bar-search -->
              <div class="top-bar-search">
                <div class="input-group input-group-search">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="fas fa-search"></span>
                    </span>
                  </div>
                  <input type="text" class="form-control" aria-label="Search" placeholder="Search"> </div>
              </div>
              <!-- /.top-bar-search -->
            </div>
            <!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
              <!-- .nav -->
              <ul class="header-nav nav">
                            <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fas fa-envelope"></span>
                  </a>
                  <div class="dropdown-arrow"></div>
                  <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <h6 class="dropdown-header stop-propagation">
                      <span>Messages</span>
                      <a href="#">Mark all as read</a>
                    </h6>
                    <!-- .dropdown-scroll -->
                    <div class="dropdown-scroll has-scrollable">
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="image/team1.jpg" alt=""> </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Stilearning </p>
                          <p class="text text-truncate"> Invitation: Joe's Dinner @ Fri Aug 22 </p>
                          <span class="date">2 hours ago</span>
                        </div>
                      </a>
                      <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="image/team3.png" alt=""> </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Openlane </p>
                          <p class="text text-truncate"> Final reminder: Upgrade to Pro </p>
                          <span class="date">23 hours ago</span>
                        </div>
                      </a>
                      <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-green"> GZ </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Gogo Zoom </p>
                          <p class="text text-truncate"> Live healthy with this wireless sensor. </p>
                          <span class="date">1 day ago</span>
                        </div>
                      </a>
                      <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-teal"> GD </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Gold Dex </p>
                          <p class="text text-truncate"> Invitation: Design Review @ Mon Jul 7 </p>
                          <span class="date">1 day ago</span>
                        </div>
                      </a>
                      <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="image/team2.png" alt=""> </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Creative Division </p>
                          <p class="text text-truncate"> Need some feedback on this please </p>
                          <span class="date">2 days ago</span>
                        </div>
                      </a>
                      <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-pink"> LD </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Lab Drill </p>
                          <p class="text text-truncate"> Our UX exercise is ready </p>
                          <span class="date">6 days ago</span>
                        </div>
                      </a>
                      <!-- /.dropdown-item -->
                    </div>
                    <!-- /.dropdown-scroll -->
                    <a href="#" class="dropdown-footer">All messages
                      <i class="fa fa-fw fa-long-arrow-alt-right"></i>
                    </a>
                  </div>
                  <!-- /.dropdown-menu -->
                </li>
                <!-- /.nav-item -->
               
              </ul>
              <!-- /.nav -->
              <!-- .btn-account -->
              <div class="dropdown">
                <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="user-avatar">
                  <img src="../../upload/<?= $pix; ?>" width='50px' height='50px' alt="profile" > 
                  </span>
                  <span class="account-summary pr-lg-4 d-none d-lg-block">
                      <span class="account-name"class="text-center" style="color:white;"><?= $username; ?> </span>
                   <!-- <span class="account-description">Mtreal62@gmail.com</span>-->
                  </span>
                </button>
                <div class="dropdown-arrow dropdown-arrow-left"></div>
                <!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"> <?php $email ?> </h6>
                  <a class="dropdown-item"  data-toggle="modal" href="#myModal">
                    <span class="dropdown-icon fas fa-user-circle" ></span> Profile</a>
                  <a class="dropdown-item" href="../../Controller/AuthController/logout.php">
                    <span class="dropdown-icon fas fa-sign-out-alt"></span> Logout</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Ask Forum</a>

                </div>
                <!-- /.dropdown-menu -->
              </div>
              <!-- /.btn-account -->
            </div>
            <!-- /.top-bar-item -->
          </div>
          <!-- /.top-bar-list -->
        </div>
        
        <!-- /.top-bar -->
        
        


      </header>
      <!-- /.app-header -->


      <!-- Modal  for partner information-->

<!-- Modal -->

<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-dialog-scrollable">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title">USER PROFILE Picture </h4>
      </div>
      <div class="modal-body">
        <form action="../../Controller/AuthController/imageupload"  method="post" enctype="multipart/form-data" >
            <div class="row form-control">
                
                <p>Select image to upload:</p>
                <div>
                    <input type="file" name="fileToUpload" id="fileToUpload" />
                   <input  type="hidden" name="UserID" value="<?= $username; ?>" />
                   
                   </div>
                      
            
                <div class="center" ><input class= "center mt-3" type="submit" value="Upload Image" name="submit"></div>

                <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>


</form>
<div>
          <form method="POST" action="../../Controller/AuthController/update" >
                <div class= "form-control">
                <h1 class="center">Edit User Profile</h1>

               
                <div class="form-line">
          <input type="text" class="form-control" readonly name="email" value="<?php echo $email;?> "/>

                                        </div>

                                        <div class="form-line">
                                            <input type="text" class="form-control mt-3" name="fname" readonly value="<?php echo $fname;?>"
                                             />
                                        </div>

                                        <div class="form-line">
                                            <input name="username" type="text" class=" form-control mt-3"
                                                 value="<?php echo $username;?>">
                                        </div>

                                        <div class="form-line">
                                            <input type="text" class="form-control mt-3"  name="phoneno" value="<?php echo $phoneno;?>"
                                         />
                                        </div>
                                                                               
                                        <div class="center mt-4">
                                        <button type="submit"  name="update" class="btn btn-primary waves-effect m-r-15">Submit</button>
                                        <button type="reset" class="btn btn-danger waves-effect">Cancel</button>
                                        </div>
                
                </div>
</form>
        
      </div>
     

  </div>
</div>

</div>

     <!-- End Modal  for partner information-->