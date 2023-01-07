<!-- Modal -->

<div id="withdraw" class="modal fade" role="dialog" tabIndex="-1" aria-labelledby="#myModal" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog modal-dialog-scrollable" >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      
       <h4 class="modal-tile text-muted">
       Withdraw 
       </h4>
      </div>
      <div class="modal-body m-4">
                            <form method="POST" action="withdraw" >
                                
                                
                                
                                 <div class="row ">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        
                                           <label for="">Account to withdraw</label>
                                    <input type="number" min="100"  max="<?= $balance; ?>" class="form-control" name="withdraw" placeholder="Amount to Withdraw"  /><br>
                                    <input type="number" class="form-control" name="withdraw"   placeholder="Enter your account number" />
                                    </div>
                                    <div class="form-group">
                                        
                                       
                                    
                                 </div>
                                
                            </div>
                            </div> 
                            </div>     
                                                    
                          <!--  <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"  name="phoneno"value=""
                                         />
                                        </div>
                                    </div>
                                </div>
                            </div--> 
                      
                            <div class="modal-footer">                                                                                
                                <button type="submit"  name="withdraw" class="btn btn-primary waves-effect m-r-15">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel</button>
                            </div>
                        
                        
                        </form>
                    </div>
    </div>
    </div>



  
