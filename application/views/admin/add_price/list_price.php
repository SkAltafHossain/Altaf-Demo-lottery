
 <div class="wrapper wrapper-content animated fadeInRight">
           
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">                
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12 pull-left">
                                <a href="<?=base_url('admin/add-price')?>"> <button class="btn btn-primary m-t-n-xs grediant-btn" type="submit" id="men_add_garments_view"><strong>Add Price</strong></button></a>
                            </div>                         
                        </div>
                        <br><br>
                    <h2>Price List</h2>
                    <div class="table-responsive">
                    <form role="form" id="list_data" action="<?=base_url('RoomController/multi_delete')?>" method="post" >
                       
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Title</th>
                        <th>Drow Number</th>
                        <th>1st Price</th>
                        <th>2nd Price</th>
                        <th>3rd Price</th>
                        <th>4th Price</th>    
                        <th>5th Price</th>
                        <th>PDF</th>
                        <!-- <th>Status</th> -->
                        <th class="noExport">Action</th>
                    </tr>
                    </thead>
                    <tbody>   
                         <?php foreach ($price_data as $key => $value) {?>
                        <tr class="gradeX">
                            <td><?=$key+1?></td>
                            <td><?=$value->date?></td>
                            <td><?=$value->time_t?></td>
                            <td><?=$value->title?></td>
                            <td><?=$value->drow_number?></td>
                            <td><?=$value->first_price?></td>
                            <td><?=$value->sce_price?></td>
                            <td><?=$value->third_price?></td>
                            <td><?=$value->for_price?></td>
                            <td><?=$value->five_price?></td>
                            <td>
                                <?php if (!empty($value->pdf_file)) { ?>
                                    <a href="<?=base_url($value->pdf_file)?>" class="btn btn-xs btn-info" target="_blank">View PDF</a>
                                <?php } else { ?>
                                    -
                                <?php } ?>
                            </td>
                            <!-- <td>
                                <input type="checkbox" class="js-switch" onchange="common_status_change(this.value)" id="status" value="<?=$value->uniqcode?>" <?=$value->status == 'Active' ? 'checked' : ''?> /></td> -->


                             
                                <td>
                                    
                                  
                                    
                                    <a href="<?=base_url('admin/edit_price/'.$value->uniqcode)?>"><i class="fa fa-pencil-square action"></i></a>
                                    <a href="<?=base_url('admin/destroy/'.$value->uniqcode)?>" onclick="return confirm('Are you sure delete this Price?')"><i class="fa fa-trash action"></i></a>
                                
                                    
                                    
                                    
                                </td>
                               
                                 
                                  
                            
                        </tr>
                    <?php }?>
                    
                    </tbody>
                    
                    </table>
                    </form>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
