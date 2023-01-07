<!-- Modal -->

<div id="addNozzle" class="modal fade" role="dialog" tabIndex="-1" aria-labelledby="#myModal" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog modal-dialog-scrollable" >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      
       <h4 class="modal-tile text-muted">
       Avaialable Product
       </h4>
      </div>
      <div class="modal-body m-4">
                            <form method="POST" action="NozzleAdd" >
                                
                                
                                
                                 <div class="row ">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        
                                           <label for="">Total of Number of Nozzle you have at your filling station</label>
                                    <input type="text" class="form-control" name="nozzle" value=<?php echo $nozzle ?> />
                                       
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
                                <button type="submit"  name="NozzleAdd" class="btn btn-primary waves-effect m-r-15">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel</button>
                            </div>
                        
                        
                        </form>
                    </div>
    </div>
    </div>



  
