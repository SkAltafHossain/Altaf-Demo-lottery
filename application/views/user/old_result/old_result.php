<div class="middle-section">
    <div class="container">
    <center> <h2 class="oldhnew">Old Result</h2> </center>  
          <form class="from-group" action="oldday_result_date11" method="POST" id="form">
        <div class="row equal">
        <div class="col-md-8" id="leftone">
            <div class="boxthing colour-1">  
                <h5>DIAMOND MORNING</h5>
                <!-- <p>11:00 AM</p> -->
                <input type="text" name="time" id="time" value="11:30 AM" style="border: none; background: transparent;">
            </div>
        </div> 
        <div class="col-md-3" id="rightone">
            <div class="boxthing colour-2">
            	<input type="date"max="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -1 day')); ?>" min="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -31 day')); ?>">
                <button class="btn btn-outline-primary" type="submit" style="background: #c002ff;color: white;">DBF</button>
                <input type="date" name="pdate" id="pdate"max="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -1 day'));?>" min="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -31 day')); ?>" class="validate[required]" data-errormessage-value-missing="Date is required" data-prompt-position="bottomLeft">
                <button class="btn btn-outline-warning" type="submit" >PDF</button>
               <!--  <a href="<?=base_url('today_result/'.$value->id)?>"class="btn btn-warning btn-lg" target= "_blank">PDF</a> -->
            </div>  
        </div>
        </div>
    </form>
     <form class="from-group" action="oldday_result_date3" method="POST"id="form2">
      <div class="row equal">
        <div class="col-md-8" id="leftone">
            <div class="boxthing colour-1">
                <h5>DIAMOND DAY</h5>
                <!-- <p>03:00 PM</p> -->
              <input type="text" name="time" id="time" value="03:30 PM" style="border: none; background: transparent;"> 
            </div>
        </div> 
        <div class="col-md-3" id="rightone">
            <div class="boxthing colour-2">
                <input type="date"max="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -1 day')); ?>"  min="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -31 day')); ?>">
                <button class="btn btn-outline-primary" type="submit" style="background: #c002ff;color: white;">DBF</button>
                <input type="date"  name="pdate" id="pdate"max="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -1 day'));?>"min="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -31 day')); ?>" class="validate[required]" data-errormessage-value-missing="Date is required" data-prompt-position="bottomLeft">
                <button class="btn btn-outline-warning" type="submit" style="background: #48aec0;color: white;">PDF</button>
               <!--  <a href="<?=base_url('today_result/'.$value->id)?>"class="btn btn-warning btn-lg" target= "_blank">PDF</a> -->
            </div>
        </div>
        </div>
    </form>
         <form class="from-group" action="oldday_result_date7" method="POST" id="form3">
               <div class="row equal">
        <div class="col-md-8" id="leftone">
            <div class="boxthing colour-1">
                <h5>DIAMOND EVENING</h5>
                <!-- <p>07:00 PM</p> -->
                <input type="text" name="time" id="time" value="07:30 PM" style="border: none; background: transparent;">
            </div>
        </div> 
        <div class="col-md-3" id="rightone">
            <div class="boxthing colour-2">
                <input type="date"max="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -1 day')); ?>"  min="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -31 day')); ?>">
                <button class="btn btn-outline-primary" type="submit" style="background: #c002ff;color: white;">DBF</button>
                <input type="date"  name="pdate" id="pdate"max="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -1 day'));?>" min="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -31 day')); ?>" class="validate[required]" data-errormessage-value-missing="Date is required" data-prompt-position="bottomLeft">
                <button class="btn btn-outline-warning" type="submit" style="background: #48aec0;color: white;">PDF</button>
               <!--  <a href="<?=base_url('today_result/'.$value->id)?>"class="btn btn-warning btn-lg" target= "_blank">PDF</a> -->
            </div>
        </div>
        </div>
    </form>
</div>
</div>

	

<style type="text/css">
.formErrorContent 
    {
        position: absolute;
        top: 17px !important;
        width: auto !important;
        left: 0px !important;
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
    .formErrorArrowBottom:after {
        content: '';
        position: absolute;
        bottom: 6px !important;
        left: -16px;
        width: 0;
        height: 0;
        border: 10px solid transparent;
        border-top-color: #f2dede!important;
        border-bottom: 0;
        margin-bottom: -11px;
        transform: rotate(180deg);
    }
</style>