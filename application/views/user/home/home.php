
  
	<!-- Today Result Start -->
	<div class="middle-section">
	    <div class="container">
	    <form class="from-group">  
	        <center>
	            <h2>TODAYS RESULT</h2>
	            <span id="filenotfound" style="color: #cfaaaaff; display: none; ">File Not Updated Please Try Again Later!</span>
	            <h4> <?=date("d/m/Y");?></h4>
	        </center>
	         

	        <div class="row equal">
	            <div class="col-md-8" id="left_box">       
	                <div class="boxthing colour-1">
	                <h5>ROYAL TIGER MORNING</h5>
	              	<font id="time">11:30 AM</font> 
	                     <!-- <input type="text" name="time" id="time" value="11:00 AM" style="border: none; background: transparent;"> -->
	                </div>
	            </div>
	            <?php 
	            if($time1){
	            ?>
	            <div class="col-md-2" id="right_box">
	                <div class="boxthing colour-2">
	                   <button class="btn btn-primary btn-lg green-button" type="button">DBF</button>
	                  <!--  <button class="btn btn-warning btn-lg" type="button" onclick="result()">PDF</button> -->	
	                  <a href="<?=base_url('today_result/1')?>" onclick="file_not_found('1')" class="btn btn-warning btn-lg red-button" target= "_blank">PDF</a>
	                </div>
	            </div>
	            
	            <?php
	            }else{ 
	            
	            ?>
	            
	             <div class="col-md-2" id="right_box">
	                <div class="boxthing colour-2">
	                   <button class="btn btn-primary btn-lg green-button" type="button">DBF</button>
	                  <!--  <button class="btn btn-warning btn-lg" type="button" onclick="result()">PDF</button> -->	
	                  <a class="btn btn-primary btn-lg red-button" onclick="file_not_found('0')" target= "_blank">PDF</a>
	                </div>
	            </div>	
	          <?php
	            }?>
	            
	        </div>
	        <div class="row equal">
	            <div class="col-md-8" id="left_box">       
	                <div class="boxthing colour-1">
	                <h5>ROYAL TIGER DAY</h5>
	              	<font id="time">03:00 PM</font> 
	                     <!-- <input type="text" name="time" id="time" value="11:00 AM" style="border: none; background: transparent;"> -->
	                </div>
	            </div>
	            <?php 
	            if($time2){
	            ?>
	            <div class="col-md-2" id="right_box">
	                <div class="boxthing colour-2">
	                   <button class="btn btn-primary btn-lg green-button" type="button">DBF</button>
	                  <!--  <button class="btn btn-warning btn-lg" type="button" onclick="result()">PDF</button> -->	
	                  <a href="<?=base_url('today_result/2')?>" onclick="file_not_found('1')" class="btn btn-primary btn-lg red-button" target= "_blank">PDF</a>
	                </div>
	            </div>
	            <?php
	            }else{ 
	            
	            ?>
	             <div class="col-md-2" id="right_box">
	                <div class="boxthing colour-2">
	                   <button class="btn btn-primary btn-lg green-button" type="button" >DBF</button>
	                  <!--  <button class="btn btn-warning btn-lg" type="button" onclick="result()">PDF</button> -->	
	                  <a class="btn btn-primary btn-lg red-button" onclick="file_not_found('0')" target= "_blank">PDF</a>
	                </div>
	            </div>	
	          
	            <?php
	            }?>
	        </div>
	        <div class="row equal">
	            <div class="col-md-8" id="left_box">       
	                <div class="boxthing colour-1">
	                <h5>ROYAL TIGER EVENING</h5>
	              	<font id="time">05:00 PM</font> 
	                     <!-- <input type="text" name="time" id="time" value="11:00 AM" style="border: none; background: transparent;"> -->
	                </div>
	            </div>
	            <?php 
	            if($time3){
	            ?>
	            <div class="col-md-2" id="right_box">
	                <div class="boxthing colour-2">
	                   <button class="btn btn-primary btn-lg green-button" type="button">DBF</button>
	                  <!--  <button class="btn btn-warning btn-lg" type="button" onclick="result()">PDF</button> -->	
	                  <a href="<?=base_url('today_result/3')?>" onclick="file_not_found('1')" class="btn btn-primary btn-lg red-button" target= "_blank">PDF</a>
	                </div>
	            </div>
	            <?php
	            }else{ 
	            
	            ?>
	             <div class="col-md-2" id="right_box">
	                <div class="boxthing colour-2">
	                   <button class="btn btn-primary btn-lg green-button" type="button">DBF</button>
	                  <!--  <button class="btn btn-warning btn-lg" type="button" onclick="result()">PDF</button> -->	
	                  <a class="btn btn-primary btn-lg red-button" onclick="file_not_found('0')" target= "_blank">PDF</a>
	                </div>
	            </div>	
	          <?php
	            }?>
	            
	        </div>

			<div class="row equal">
	            <div class="col-md-8" id="left_box">       
	                <div class="boxthing colour-1">
	                <h5>ROYAL TIGER NIGHT</h5>
	              	<font id="time">08:30 PM</font> 
	                     <!-- <input type="text" name="time" id="time" value="11:00 AM" style="border: none; background: transparent;"> -->
	                </div>
	            </div>
	            <?php 
	            if($time4){
	            ?>
	            <div class="col-md-2" id="right_box">
	                <div class="boxthing colour-2">
	                   <button class="btn btn-primary btn-lg green-button" type="button">DBF</button>
	                  <!--  <button class="btn btn-warning btn-lg" type="button" onclick="result()">PDF</button> -->	
	                  <a href="<?=base_url('today_result/4')?>" onclick="file_not_found('1')" class="btn btn-primary btn-lg red-button" target= "_blank">PDF</a>
	                </div>
	            </div>
	            <?php
	            }else{ 
	            
	            ?>
	             <div class="col-md-2" id="right_box">
	                <div class="boxthing colour-2">
	                   <button class="btn btn-primary btn-lg green-button" type="button">DBF</button>
	                  <!--  <button class="btn btn-warning btn-lg" type="button" onclick="result()">PDF</button> -->	
	                  <a class="btn btn-primary btn-lg red-button" onclick="file_not_found('0')" target= "_blank">PDF</a>
	                </div>
	            </div>	
	          <?php
	            }?>
	            
	        </div>
	     
	    </form>
	    
	</div>
	</div>
	
	
	<!-- Today Result End -->
<style>
.disabled{
    /*Disabled link style*/
    color:black;

    pointer-events: none;
   cursor: default;
}
</style>