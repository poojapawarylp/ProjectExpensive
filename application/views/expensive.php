<div class="container-fluid">
		    <div class="card">
			    <div class="container-fluid">
				    <div class="row">
				        <div class="col-md-3 col-xl-3">
                          <h5>Expensive Detailes</h5>
					    </div>
					    <div class="col-md-6 col-xl-7">
                        </div>
				        <div class="col-md-3 col-xl-2">
                       <a href='<?= base_url() ?>Balances/exportCSV' class="btn btn-link" > <button type="button" class="btn btn-success">Export</button></a>  
					    </div>
                
                    </div>
                </div>
		    </div><br>
			<div class="pt-4 ">
	            <div class="card">
	                <div class="card-header bg-success text-white">
	                   <?php $today = date("F Y");?>
		               <h5 class="text-white"><?php echo $today ?></h5>
	                </div>
	                <div class="card-body">
					    <div class="list-group" >
						<?php foreach($month_expensive_transaction as $today){?>
                            <li  class="list-group-item">
					            <div class="row">
						            <div class="col-md-2">
					                   <h6 class="text-dark"><?php echo $today['name'];?></h6>
						            </div>
                                    <div class="col-md-7">
					                    <div class="progress">
                                            <div class="progress-bar progress-bar-striped" style="width:<?php echo ($today['amount']/$total_expensive->amount)*100 ?>%"></div>
						                </div> 
  						            </div>
									<div class="col-md-1">
					                     <h6 class="text-dark"><?php echo round(($today['amount']/$total_expensive->amount)*100) ?>% </h6>
						            </div>
					                <div class="col-md-2">
					                     <h6 class="text-dark"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $today['amount'];?> </h6>
						            </div>
								</div>
					        </li>
					    <?php }?>
					    </div>
					</div>
					
	               <div class="card-footer">
	                    <h6 class="pull-left text-dark">Number of Transaction</h6>
	                    <h6 class="pull-right text-dark"><?php echo $total_expensive->id; ?></h6>
	                </div>
	                <div class="card-footer">
	                    <h6 class="pull-left text-dark">Total Expensive amount</h6>
	                    <h6 class="pull-right text-dark"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $total_expensive->amount; ?></h6>
	                </div>
	            </div>
	        </div>
	  
</div>   
	  