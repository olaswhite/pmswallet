<!-- Modal -->

<div id="addproduct" class="modal fade" role="dialog" tabIndex="-1" aria-labelledby="#myModal" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog modal-dialog-scrollable" >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      
       <h4 class="modal-tile text-muted">
       Avaialable Product
       </h4>
      </div>
      <div class="modal-body m-4">
                            <form method="POST" action="ProductAdd" >
                                <div class="row">
                                <div class="col-sm-12 col-xl-12">

                                    <div class="form-group">
                                        
                                           <select class="form-control" required name="prod_id">
                                               <option value="">---</option>
                                               <?php

                                               $getProdList = $product->getActivepro($username);
                                               if($getProdList->rowCount() > 0){
                                                while($lst= $getProdList->fetch(PDO::FETCH_ASSOC)){
                                                    echo '<option value="'.$lst['prod_id'].'">'.$lst['prod_name'].'</option>';
                                                }
                                               }

                                               ?>
                                           </select>
                                            
                                              </div>
                                
                                </div>
                                
                            </div>
                                <div class="row">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                    
                                           
                                            <input type="text" class=" form-control-lg form-control" name="prod_price" value="Product Price"
                                             />
                                        </div>
                                
                                </div>
                                
                            </div>
                                
                                 <div class="row ">
                                <div class="col-sm-12">

                                   
                                <div class="modal-footer">                                                                                
                                <button type="submit"  name="ProductAdd" class="btn btn-primary waves-effect m-r-15">Submit</button>
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



  
