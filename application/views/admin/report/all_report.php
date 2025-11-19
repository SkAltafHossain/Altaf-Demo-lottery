<div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
        <div class="col-lg-12">
      		<div class="ibox float-e-margins">
            <div class="ibox-content">
                <h2>All Report</h2>
            </div>    
 			<div class="ibox-content">
 			    
                <div class="row">
                <div class="col-lg-5">
                  <div class="form-group">
                      <label>From Date</label>
                        <input type="date" name="fromdate" id="fromdate" class="form-control" max="<?php echo date("Y-m-d"); ?>" data-errormessage-value-missing="Start date is required" data-prompt-position="bottomLeft" placeholder="Enter start date" maxlength="200">
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="form-group">
                      <label>To Date</label>
                        <input type="date" name="todate" id="todate" class="form-control" max="<?php echo date("Y-m-d"); ?>" data-errormessage-value-missing="Start date is required" data-prompt-position="bottomLeft" placeholder="Enter start date" maxlength="200">
                  </div>
                </div>
                 <div class="col-sm-1" style="margin-top: 22px">
                            <input type="button" class="btn btn-success"  value="Search" onclick="all_date_search()">
                        </div>
                        <div class="col-sm-1">
                            <label class="hide-pc"> &nbsp;</label>
                                <div  class="text-center">
                                    <a href="<?=current_url()?>">
                                        <i class=" fa fa-refresh fa-spin" aria-hidden="true" title="Refresh" style="color:orange;font-size: 32px;"></i>
                                    </a>
                                </div>
                        </div>
                </div>
              <div class="table-responsive" id="load_dataTable">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                       <thead>
                    <tr>
                        <th>Sl.</th>    
                        <th>Date</th>
                        <th>Time</th>
                        <th>1st Price</th>
                        <th>2nd Price</th>
                        <th>3rd Price</th>
                        <th>4th Price</th>
                        <th>5th Price</th>
                        
                    </tr>
                    </thead>
                    <tbody>   
                     <?php foreach ($price_data as $key => $value) {?>
                        <tr class="gradeX">
                            <td><?=$key+1?></td>
                            <td><?=$value->date?></td>
                            <td><?=$value->time?></td>
                            <td><?=$value->first_price?></td>
                            <td><?=$value->sce_price?></td>
                            <td><?=$value->third_price?></td>
                            <td><?=$value->for_price?></td>
                           <td><?=$value->five_price?></td>
                            
                        </tr>
                    <?php }?>
                    
                    </tbody>
                  </table>   
                </div>           	       
            </div>
					</div>
				</div>
			</div>
		</div>



