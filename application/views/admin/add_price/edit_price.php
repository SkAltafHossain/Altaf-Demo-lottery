
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">    
        <h2>Edit Price </h2>  
     
    </div>    
</div>
<div class="wrapper wrapper-content animated fadeInRight">   
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">                    
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form id="validate" method="post" action="<?=base_url('admin/update_price')?>" class="icon-form" enctype="multipart/form-data"> 
                            <input type="hidden" name="uniqcode" value="<?=$price_data->uniqcode?>">  
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Select Time</label>
                                    <select name="time" id="time" class="form-control validate[required]" data-errormessage-value-missing="Time is required" data-prompt-position="bottomLeft" maxlength="200">
                                       <option value="">Select Time</option>
                                        <?php foreach($time_data as $key => $value) {
                                            if($value->id==$price_data->time)
                                            {
                                            ?>
                                        <option value="<?=$value->id?>"selected><?=$value->time?></option>
                                        <?php }
                                        else
                                        {
                                            ?>
                                            <option value="<?=$value->id?>"><?=$value->time?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" id="title" class="form-control validate[required]" data-errormessage-value-missing=" Title is required" data-prompt-position="bottomLeft" placeholder="Enter title" maxlength="200" value="<?=$price_data->title?>">     
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Drow Number</label>
                                    <input type="text" name="drow_number" id="drow_number" class="form-control validate[required]" data-errormessage-value-missing=" Drow number is required" data-prompt-position="bottomLeft" placeholder="Enter drow number" maxlength="200" value="<?=$price_data->drow_number?>">     
                                </div> 
                            </div>   
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>1st Price</label>
                                    <input type="text" name="first_price" id="first_price" class="form-control validate[required]" data-errormessage-value-missing=" 1st Price is required" data-prompt-position="bottomLeft" placeholder="Enter 1st Price" maxlength="200" value="<?=$price_data->first_price?>">     
                                </div> 
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label>2nd Price</label>
                                    <textarea rows="3" autocomplete="off" placeholder="Enter 2nd Price" id="sce_price" name="sce_price" class="form-control validate[required]"  data-errormessage-value-missing="2nd Price is required" data-prompt-position="bottomLeft"><?=$price_data->sce_price?></textarea>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label>3rd Price</label>
                                    <textarea rows="3" autocomplete="off" placeholder="Enter 3rd Price" id="third_price" name="third_price" class="form-control validate[required]"  data-errormessage-value-missing="3rd Price is required" data-prompt-position="bottomLeft"><?=$price_data->third_price?></textarea>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label>4th Price</label>
                                    <textarea rows="3" autocomplete="off" placeholder="Enter 4th Price" id="for_price" name="for_price" class="form-control validate[required]" data-errormessage-value-missing="4th Price is required" data-prompt-position="bottomLeft"><?=$price_data->for_price?></textarea>
                                </div>
                             </div>
                             <div class="col-lg-12">
                                <div class="form-group">
                                    <label>5th Price</label>
                                    <textarea rows="3" autocomplete="off" placeholder="Enter 5th Price" id="five_price" name="five_price" class="form-control validate[required]"  data-errormessage-value-missing="5th Price is required" data-prompt-position="bottomLeft"><?=$price_data->five_price?></textarea>
                                </div>
                             </div> <br><br>
                            <div class="col-sm-12">                    
                                <button class="btn btn-warning btn-primary pull-right m-t-n-xs grediant-btn" type="reset"><strong>Cancel</strong></button>                                                            
                                <button class="btn btn-primary pull-right m-t-n-xs grediant-btn"  type="submit" style="margin-right: 6px;" id="change_password"><strong>Save</strong></button>
                            </div>
                            </form>
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>                    
    </div>
</div>

<style type="text/css">        
.formErrorContent1 {
    position: absolute;
    top: 140px !important;
    width: auto !important;
    left: 52px !important;
    z-index: 11 !important;
    text-transform: none !important;
    background-color: #f2dede !important;
    color: #a94442!important;
    padding: 3px 10px !important;
    font-size: 13px !important;
    font-weight: 500 !important;
    border-radius: 3px !important;
    border-color: #ebccd1;
}

.formErrorArrowBottom1:after {
    content: '';
    position: absolute;
    bottom: 35px !important;
    left: 10px;
    width: 0;
    height: 0;
    border: 10px solid transparent;
    border-top-color: #f2dede!important;
    border-bottom: 0;
    margin-bottom: -11px;
    transform: rotate(180deg);
}

</style>
