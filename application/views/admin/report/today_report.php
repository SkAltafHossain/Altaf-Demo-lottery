
 <div class="wrapper wrapper-content animated fadeInRight">
           
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">                
                    <div class="ibox-content">
                       
                    <h2>Today Report</h2>
                    <div class="table-responsive">
                    <form role="form" id="list_data" action="<?=base_url('RoomController/multi_delete')?>" method="post" >
                       
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
                    </form>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
