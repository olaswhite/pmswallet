


  <!--#End of   -->


   <!----------------Transfer Modal---------------------->


   <div class="modal fade" id="myTransfer"  role="dialog" >
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                          <h6 class="modal-title">Transer Fund form your wallet to your friends and families</h6>
                      
                      </div>

                          <div class="modal-body">
                          <form  method="post" action="../users/tran" >
                                  
                                        <input type="number" min="100"  max="<?= $balance; ?>" name="amount" class= "form-control"><br>
                                        <input type="text"  name="to" placeholder="send to" class= "form-control">
                                        <div class=" modal-dialog-centered ml-5 mt-3">
                                        <button  name="transfer" class="btn btn-primary">Transfer</button>
                                        <button class="btn btn-danger ml-3" data-dismiss="modal">Close</button>
                                        </div>
                                  </form>    
                                        </div>

                                        <!-- Modal footer -->
                        

                                      </div>
                                    </div>
                                  </div>
                   <!---------------------------- End of Bitcoin Modal--------------------------->
