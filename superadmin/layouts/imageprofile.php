<!-- Modal -->

<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-dialog-scrollable">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title">USER PROFILE Picture </h4>
      </div>
      <div class="modal-body">
        <form action="../../Controller/AuthController/imageupload" method="post" enctype="multipart/form-data" >
            <div class="row form-control">
                
                <p>Select image to upload:</p>
                <div>
                    <input type="file" name="fileToUpload" id="fileToUpload" />
                   <input  type="hidden" name="UserID" value="<?= $userName; ?>" />
                   
                   </div>
                      
            
                <div class="center" ><input class= "center mt-3" type="submit" value="Upload Image" name="submit"></div>

                <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
</form>

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
                                            <input name="lname" type="text" class=" form-control mt-3"
                                                 value="<?php echo $lname;?>">
                                        </div>

                                        <div class="form-line">
                                            <input type="text" class="form-control mt-3"  name="phoneno"value="<?php echo $phoneno;?>"
                                         />
                                        </div>
                                        <div class="center mt-4">
                                        <button type="submit"  name="update" class="btn btn-primary waves-effect m-r-15">Submit</button>
                                        <button type="reset" class="btn btn-danger waves-effect">Cancel</button>
                                        </div>
                
                </div>
        
      </div>
     

  </div>
</div>