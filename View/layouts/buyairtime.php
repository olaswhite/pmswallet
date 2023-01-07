<!-- Modal -->

<div id="buyairtime" class="modal fade" role="dialog" tabIndex="-1" aria-labelledby="#myModal" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog modal-dialog-scrollable" >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      
       <h4 class="modal-tile text-muted">
       Buy Airtime
       </h4>
      </div>
      <div class="modal-body m-4">
                            <form method="POST"  action="../users/airtime" >
                                <div class="row">
                                <div class="col-sm-12 col-xl-12">

                                    <div class="form-group">
                                        
                                           <select class="form-control" required name="network">
                                               <option disabled>---</option>
                                               <option  value="MTN">MTN</option>
                                               <option value="Glo">Glo</option>
                                               <option value="Airtel">Airtel</option>
                                               <option value="9Mobil">9Mobil</option>
                                           </select>
                                            
                                              </div>
                                
                                </div>
                                
                            </div>
                                <div class="row">
                                <div class="col-sm-12">
                                <div class="form-group">
                                    <p>Mobil</p>
                                   <span class=" form-control-lg">+234</span>                                          
                                   <input type="number"    class=" form-control-lg" name="phoneno"required placeholder=""
                                             />
                                
                                </div>

                                    <div class="form-group">
                                    
                                           
                                            <input type="number" min="<?php echo 100 ?>"   required class=" form-control-lg form-control" name="amount" placeholder="Min 100"
                                             />
                                        </div>
                                
                                </div>
                                
                            </div>
                                
                                 <div class="row ">
                                <div class="col-sm-12">

                                   
                                <div class="modal-footer">                                                                                
                                <button type="submit"  name="buyAirtime" class="btn btn-primary waves-effect m-r-15">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel</button>
                            </div>
                                         
                                       
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
                      
                           
                        
                        
                        </form>
                    </div>
    </div>
    </div>



  
