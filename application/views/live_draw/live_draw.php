
	<?php
		$first_price1=$first_price->first_price;
		$slug1=trim($first_price1);
      	$slug1=str_replace(" ",'',$slug1);
      	$slug1=preg_replace('/[^A-Za-z0-9\-]/', '', $slug1);
      	
		
		$first_price_big_spin=(int)substr($slug1,0, 2);
		$first_price_small_spin=substr($slug1,2, 1);

	?> 

	<section id="section_1">
	    <div id="altaf">
    		   <div class="sakir">
    		        <p>Manipur Singham Lottery</p>
    		        <p><?=$date_time->date_1?> <?=$date_time->time_t?></p>
    		  </div>
    		</div>
		<div class="container" id="kus">

		<!------- Row 1 ------->

		<script type="text/javascript">
			var time = 10000;
		  
		  document.getElementById('section_1').value='<?php

	      echo $slug1;
	      ?>';
	      
		</script>


		<?php

			for($k=1;$k<=5;$k++){
			?>
			<div class="row" id="meater_box_row">
				<?php
					for($j=1;$j<=2;$j++)
					{ if($j!=1){?>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<?php
						}
						for($i=0;$i<10;$i++) {
				?> 
				<div>
					<main>
						<p class="odometer" id="odometer<?=$i.$j.$k?>"><?php 

							$first_price2=(int)substr($slug1, -5);
							$mn=1;
							
							if($k==5 && $j==2 && $i==9){
								$first_price3=(int)$first_price2;
								$mn=fmod((int)$first_price3,10);
								
							}

							else if($k==5 && $j==2 && $i==8){
								$first_price3=(int)$first_price2/10;
								$mn=fmod((int)$first_price3,10);
								
							}

							else if($k==5 && $j==2 && $i==7){
								$first_price3=(int)$first_price2/100;
								$mn=fmod((int)$first_price3,10);
								
							}

							else if($k==5 && $j==2 && $i==6){
								
								$first_price3=(int)$first_price2/1000;
								$mn=fmod((int)$first_price3,10);

							}

							else if($k==5 && $j==2 && $i==5){
								$first_price3=(int)$first_price2/10000;
								$mn=fmod((int)$first_price3,10);							
							}
							$start = $mn;
							$a = rand(50, 99);
							for($od=$mn;$od<$a+$mn;$od++){

								if($start==9){
									$start=0;
								}
								$start++;
							}
							echo $start?>
						</p>

						<script type="text/javascript">
							
						  var id='odometer'+<?=$i.$j.$k?>;
				          document.getElementById(id).value=<?php

				          echo $mn;
							
				          ?>;

							setTimeout(() => {
								var id='odometer'+<?=$i.$j.$k?>;
								document.getElementById(id).innerText=<?php

								echo $mn;

								?>;
							}, 35000 + time);

						</script>

						<div class="odometer1" id="odometer1<?=$i.$j.$k?>">
	    
							<div class="digit">
								<div class="digit-container digit-one"><?php 
									$nm=$mn;
									echo $nm." ";
									for($od=0;$od<100;$od++){
										echo rand(0,9)." ";
										
									}
									?>
										
								</div>
							</div>

						</div>
					</main>
				</div>
				<?php
					}
				?>
				
				<?php	
					}
				?>
			</div>
			<?php	
				}
			?>

			<div id="head_div">
				<div id="head_clock">
					<div class="clock-card">
					<div class="clock">
						<span id="time">00:00:00</span>
						<span class="ampm" id="ampm">AM</span>
					</div>
					</div>
				</div>
				<div id="head_title">
					<span id="heading_text">Manipur Singham Lottery</span>
				</div>

				<div id="head_live">
					<i class="fas fa-dot-circle"></i>
					<b>Live from Kolkata</b>
				</div>
			</div>
			
			<div id="side1">
				<div id="sub_side1">
					<img src="<?=base_url()?>webroot/live_draw/assets/images/logo.png" id="side_logo">
					<p id="shimla1">Manipur Singham Lottery</p>
				</div>
				<div id="sub_side2">
					<p id="shimla_price_1">1st Prize</p>
					<p id="shimla_price_6">PRICE</p>
					<p id="shimla_price_2">₹</p>
					<p class="shimla_price_3" id="shimla_price_31"><?=$price->f_p; ?></p>
					<script type="text/javascript">
						
						document.getElementById('shimla_price_31').value='<?=$price->f_p;?>';



					</script>

					<p id="shimla_price_4">ON 5 DIGITS</p>
					<p id="shimla_price_5">ON 1 TIMES</p>
				</div>
			</div>

		</div>

			<div id="porda_div1">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img1">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img2">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img3">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img4">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img5">
			</div>

		    <div id="spin_div">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/chakamain.png" class="img-responsive" id="chaka">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/chaka_circle.png" class="img-responsive" id="circle">
				<script type="text/javascript">
					
					var id="chaka";
			        document.getElementById(id).value=<?php

			        	echo $first_price_big_spin;
			        ?>;

				</script>

				<!-- <button type="button" class="btn btn-info" id="spin_btn">Spin Circle 1</button> -->
			</div>
			<div id="sm_spin_div">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/chakamain1.png" id="chaka1">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/chaka_circle1.png" id="circle1">

				<script type="text/javascript">
					
					var id="chaka1";
			        document.getElementById(id).value='<?=

			        	 $first_price_small_spin;
			        ?>';

				</script>

				<!-- <button type="button" class="btn btn-success" id="spin_btn2">Spin Circle 2</button> -->
			</div>

			<div id="result_div_3">
				<span id="draw_1">Draw Date : <?=$date_time->date_1?></span>
				<span id="draw_2">Draw Time : <?=$date_time->time_t?> ONWARDS</span>
			</div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/chaka_angtha.PNG" id="chaka_angtha">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/chaka_angtha_2.png" id="chaka_angtha2">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod1.jpg" id="rod1" class="rod">

			<div id="dot_first_price">
				
				<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_1" class="dots">
        		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_2" class="dots">
        		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_3" class="dots">


			</div>
			
	</section>
	
	<?php
		$second_price2=$second_price->sce_price;
		$slug1=trim($second_price2);
      	$slug1=str_replace(" ",'',$slug1);
      	$slug1=preg_replace('/[^A-Za-z0-9\-]/', '', $slug1);
      	$second_price2_2=str_split($slug1);
		$second_price2_3="";
      	for($i=0;$i<count($second_price2_2);$i++){

			$second_price2_3=$second_price2_3.$second_price2_2[$i];
			if($i==9 || $i==19|| $i==29 || $i==39 || $i==49){

				for($j=0;$j<10;$j++){
					$second_price2_3=$second_price2_3."0";
				}
			}
		}
		$i=0;
		$j=0;

		$second_price2_4=str_split($second_price2_3);
		
	?>
	<section id="section_2">
	    
	    <div id="altaf">
    		   <div class="sakir">
    		        <p>Manipur Singham Lottery</p>
    		        <p><?=$date_time->date_1?> <?=$date_time->time_t?></p>
    		  </div>
    		</div>

		<script type="text/javascript">
		  
		  document.getElementById('section_2').value='<?php

	      echo $slug1;

	      ?>';

		</script>

		<div class="container" id="kus">
		
			<?php
				
				$second_array=0;

				for($k=1;$k<=5;$k++){
			?>
			<div class="row" id="meater_box_row">
				<?php
					for($j=1;$j<=2;$j++)
					{ if($j!=1){?>
						
						<?php
						}
						for($i=1;$i<=10;$i++) {
				?> 
				<div>
					<main>
						<p class="odometer" id="odometer2<?=$i.$j.$k?>"><?php 
							
							$mn=$second_price2_4[$second_array];

							$second_array++;

							$start=$mn;
							
							for($od=$mn;$od<50+$mn;$od++){

								if($start==9){
									$start=0;
								}
								$start++;
							}
							echo $start?>
								
						</p>

						<script type="text/javascript">
							
						  id='odometer2'+<?=$i.$j.$k?>;
						  console.log("tag",id);
						  document.getElementById(id).value=<?=$mn?>;
						  setTimeout(() => {
							var id='odometer2'+<?=$i.$j.$k?>;
							document.getElementById(id).innerText=<?php

							echo $mn;

							?>;
						}, 66000 + time);
						</script>

						<div class="odometer1" id="odometer1a<?=$i.$j.$k?>">
	    
							<div class="digit">
								<div class="digit-container digit-one"><?php 
									$nm=$mn;
									echo $nm." ";
									for($od=0;$od<100;$od++){
										echo rand(0,9)." ";
										
									}
									?>
										
								</div>
							</div>

						</div>
					</main>
				</div>
				<?php
					}
				?>
				
				<?php	
					}
				?>
			</div>
			<?php	
				}
			?>

			<div id="head_div">
				<div id="head_clock">
					<div class="clock-card">
					<div class="clock">
						<span id="time">00:00:00</span>
						<span class="ampm" id="ampm">AM</span>
					</div>
					</div>
				</div>
				<div id="head_title">
					<span id="heading_text">Manipur Singham Lottery</span>
				</div>

				<div id="head_live">
					<i class="fas fa-dot-circle"></i>
					<b>Live from Kolkata</b>
				</div>
			</div>
			<div id="side1">
				<div id="sub_side1">
					<img src="<?=base_url()?>webroot/live_draw/assets/images/logo.png" id="side_logo">
					<p id="shimla1">Manipur Singham Lottery</p>
				</div>
				<div id="sub_side2">
					<p id="shimla_price_1">2nd Prize</p>
					<p id="shimla_price_6">PRICE</p>
					<p id="shimla_price_2">₹</p>
					<p class="shimla_price_3" id="shimla_price_32"><?=$price->s_p; ?></p>
					<script type="text/javascript">
						
						document.getElementById('shimla_price_32').value=<?=$price->s_p;?>;

					</script>
					<p id="shimla_price_4">ON 5 DIGITS</p>
					<p id="shimla_price_5">ON 10 TIMES</p>
				</div>
			</div>

		</div>

		<div id="gov">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/gov.jpg" class="img-responsive">
		</div>

		<div id="result_div_2">
			<span id="draw_1">Draw Date : <?=$date_time->date_1?></span>
			<span id="draw_2">Draw Time : <?=$date_time->time_t?> ONWARDS</span>
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/2nd_price_porda.PNG" id="porda_img6">
		</div>

		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod2" class="rod">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod3" class="rod">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod4" class="rod">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod5" class="rod">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod6" class="rod">

		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_4" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_5" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_6" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_7" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_8" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_9" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_10" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_11" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_12" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_13" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_14" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_15" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_16" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_17" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_18" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_19" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_20" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_21" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_22" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_23" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_24" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_25" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_26" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_27" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_28" class="dots">

	</section>

	<?php
		$third_price2=$third_price->third_price;
		$slug1=trim($third_price2);
      	$slug1=str_replace(" ",'',$slug1);
      	$slug1=preg_replace('/[^A-Za-z0-9\-]/', '', $slug1);
      	$third_price21=str_split($slug1);
      	$third_price2_3='';
      	$k=0;
		for($i=0;$i<10;$i++){

			if($i%2==0){
				for($j=0;$j<4;$j++){
					$third_price2_3=$third_price2_3.$third_price21[$k];
					$k++;
				}
				$third_price2_3=$third_price2_3."00";
			}
			else{
				for($j=0;$j<4;$j++){
					$third_price2_3=$third_price2_3.$third_price21[$k];
					$k++;
				}
				$third_price2_3=$third_price2_3."0000000000";
			}
		}
		$i=0;
		$j=0;

		$third_price2_4=str_split($third_price2_3);

	?>
	
	<section id="section_3">
	    <div id="altaf">
    		   <div class="sakir">
    		        <p>Manipur Singham Lottery</p>
    		        <p><?=$date_time->date_1?> <?=$date_time->time_t?></p>
    		  </div>
    		</div>

		<script type="text/javascript">

		  document.getElementById('section_3').value='<?php

	      echo $slug1;

	      ?>';


		</script>

		<div class="container" id="kus">
			<?php
			$third_array=0;
			for($k=1;$k<=5;$k++){
			?>
			<div class="row" id="meater_box_row">
				<?php
					for($j=1;$j<=2;$j++)
					{ if($j!=1){?>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<?php
						}
						for($i=1;$i<=10;$i++) {
				?> 
				<div>
					<main>
						<p class="odometer" id="odometer3<?=$i.$j.$k?>"><?php 

							$mn=$third_price2_4[$third_array];
							$third_array++;

							$start=$mn;
							
							for($od=$mn;$od<50+$mn;$od++){

								if($start==9){
									$start=0;
								}
								$start++;
							}
							echo $start?>
								
						</p>

						<script type="text/javascript">
							
						  id='odometer3'+<?=$i.$j.$k?>;
				          document.getElementById(id).value=<?=$mn?>;
				          console.log(id+":- "+document.getElementById(id).value) ;
							setTimeout(() => {
								var id='odometer3'+<?=$i.$j.$k?>;
								document.getElementById(id).innerText=<?php

								echo $mn;

								?>;
							}, 117000 + time); //117000

						</script>

						<div class="odometer1" id="odometer1b<?=$i.$j.$k?>">
	    
							<div class="digit">
								<div class="digit-container digit-one"><?php 
									$nm=$mn;
									echo $nm." ";
									for($od=0;$od<100;$od++){
										echo rand(0,9)." ";
										
									}
									?>
										
								</div>
							</div>

						</div>
					</main>
				</div>
				<?php
					}
				?>
				
				<?php	
					}
				?>
			</div>
			<?php	
				}
			?>

			<div id="head_div">
				<div id="head_clock">
					<div class="clock-card">
					<div class="clock">
						<span id="time">00:00:00</span>
						<span class="ampm" id="ampm">AM</span>
					</div>
					</div>
				</div>
				<div id="head_title">
					<span id="heading_text">Manipur Singham Lottery</span>
				</div>

				<div id="head_live">
					<i class="fas fa-dot-circle"></i>
					<b>Live from Kolkata</b>
				</div>
			</div>
			<div id="side1">
				<div id="sub_side1">
					<img src="<?=base_url()?>webroot/live_draw/assets/images/logo.png" id="side_logo">
					<p id="shimla1">Manipur Singham Lottery</p>
				</div>
				<div id="sub_side2">
					<p id="shimla_price_1">3rd Prize</p>
					<p id="shimla_price_6">PRICE</p>
					<p id="shimla_price_2">₹</p>
					<p class="shimla_price_3" id="shimla_price_33"><?=$price->t_p; ?></p>
					<script type="text/javascript">
						
						document.getElementById('shimla_price_33').value=<?=$price->t_p;?>;

					</script>
					<p id="shimla_price_4">ON 4 DIGITS</p>
					<p id="shimla_price_5">ON 10 TIMES</p>
				</div>
			</div>

		</div>

		<div id="gov">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/gov.jpg" class="img-responsive">
		</div>

		<div id="result_div_2">
			<span id="draw_1">Draw Date : <?=$date_time->date_1?></span>
			<span id="draw_2">Draw Time : <?=$date_time->time_t?> ONWARDS</span>
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/2nd_price_porda.PNG" id="porda_img6">
		</div>

		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod2" class="rod">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod3" class="rod">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod4" class="rod">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod5" class="rod">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod6" class="rod">

		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_4" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_5" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_6" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_7" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_8" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_9" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_10" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_11" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_12" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_13" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_14" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_15" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_16" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_17" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_18" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_19" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_20" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_21" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_22" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_23" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_24" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_25" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_26" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_27" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_28" class="dots">

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img7">
		</div>

	</section>

	<?php
		$fourth_price2=$fourth_price->for_price;
		$slug1=trim($fourth_price2);
      	$slug1=str_replace(" ",'',$slug1);
      	$slug1=preg_replace('/[^A-Za-z0-9\-]/', '', $slug1);
      	$fourth_price21=str_split($slug1);
      	$fourth_price2_3='';
      	$k=0;
		for($i=0;$i<10;$i++){

			if($i%2==0){
				for($j=0;$j<4;$j++){
					$fourth_price2_3=$fourth_price2_3.$fourth_price21[$k];
					$k++;
				}
				$fourth_price2_3=$fourth_price2_3."00";
			}
			else{
				for($j=0;$j<4;$j++){
					$fourth_price2_3=$fourth_price2_3.$fourth_price21[$k];
					$k++;
				}
				$fourth_price2_3=$fourth_price2_3."0000000000";
			}
		}
		$i=0;
		$j=0;

		$fourth_price2_4=str_split($fourth_price2_3);	
	?>

	<section id="section_9">
	    <div id="altaf">
    		   <div class="sakir">
    		        <p>Manipur Singham Lottery</p>
    		        <p><?=$date_time->date_1?> <?=$date_time->time_t?></p>
    		  </div>
    		</div>

		<script type="text/javascript">

		  document.getElementById('section_9').value='<?php

	      echo $slug1;

	      ?>';
		</script>

		<div class="container" id="kus">
			<?php
			$fourth_array=0;
			for($k=1;$k<=5;$k++){
			?>
			<div class="row" id="meater_box_row">
				<?php
					for($j=1;$j<=2;$j++)
					{ if($j!=1){?>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<?php
						}
						for($i=1;$i<=10;$i++) {
				?> 
				<div>
					<main>
						<p class="odometer" id="odometer5<?=$i.$j.$k?>"><?php 

							$mn=$fourth_price2_4[$fourth_array];
							
							$fourth_array++;

							$start=$mn;
							
							for($od=$mn;$od<50+$mn;$od++){

								if($start==9){
									$start=0;
								}
								$start++;
							}
							echo $start?>
								
						</p>

						<script type="text/javascript">
							
							id='odometer5'+<?=$i.$j.$k?>;
							document.getElementById(id).value=<?=$mn?>;
							console.log(id+":- "+document.getElementById(id).value);
							setTimeout(() => {
								var id='odometer5'+<?=$i.$j.$k?>;
								document.getElementById(id).innerText=<?php

								echo $mn;

								?>;
							}, 168000 + time);//168000
						</script>

						<div class="odometer1" id="odometer1c<?=$i.$j.$k?>">
	    
							<div class="digit">
								<div class="digit-container digit-one"><?php 
									$nm=$mn;
									echo $nm." ";
									for($od=0;$od<100;$od++){
										echo rand(0,9)." ";
										
									}
									?>
										
								</div>
							</div>

						</div>
					</main>
				</div>
				<?php
					}
				?>
				
				<?php	
					}
				?>
			</div>
			<?php	
				}
			?>

			<div id="head_div">
				<div id="head_clock">
					<div class="clock-card">
					<div class="clock">
						<span id="time">00:00:00</span>
						<span class="ampm" id="ampm">AM</span>
					</div>
					</div>
				</div>
				<div id="head_title">
					<span id="heading_text">Manipur Singham Lottery</span>
				</div>

				<div id="head_live">
					<i class="fas fa-dot-circle"></i>
					<b>Live from Kolkata</b>
				</div>
			</div>
			<div id="side1">
				<div id="sub_side1">
					<img src="<?=base_url()?>webroot/live_draw/assets/images/logo.png" id="side_logo">
					<p id="shimla1">Manipur Singham Lottery</p>
				</div>
				<div id="sub_side2">
					<p id="shimla_price_1">4th Prize</p>
					<p id="shimla_price_6">PRICE</p>
					<p id="shimla_price_2">₹</p>
					<p class="shimla_price_3" id="shimla_price_34"><?=$price->fo_p; ?></p>
					<script type="text/javascript">
						
						document.getElementById('shimla_price_34').value=<?=$price->fo_p;?>;

					</script>
					<p id="shimla_price_4">ON 4 DIGITS</p>
					<p id="shimla_price_5">ON 10 TIMES</p>
				</div>
			</div>

		</div>

		<div id="gov">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/gov.jpg" class="img-responsive">
		</div>

		<div id="result_div_2">
			<span id="draw_1">Draw Date : <?=$date_time->date_1?></span>
			<span id="draw_2">Draw Time : <?=$date_time->time_t?> ONWARDS</span>
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/2nd_price_porda.PNG" id="porda_img6">
		</div>

		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod2" class="rod">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod3" class="rod">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod4" class="rod">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod5" class="rod">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod6" class="rod">

		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_4" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_5" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_6" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_7" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_8" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_9" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_10" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_11" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_12" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_13" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_14" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_15" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_16" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_17" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_18" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_19" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_20" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_21" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_22" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_23" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_24" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_25" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_26" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_27" class="dots">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_28" class="dots">

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img7">
		</div>

	</section>

	<?php
		$fifth_price2=$fifth_price->five_price;
		$slug1=trim($fifth_price2);
       	$slug1=str_replace(" ",'',$slug1);
       	$slug1=preg_replace('/[^A-Za-z0-9\-]/', '', $slug1);
      	$fifth_price21=str_split($slug1);
      	// Ensure we have enough elements to safely index up to 399 in later logic
      	$len_fifth = count($fifth_price21);
      	for ($pad_i = $len_fifth; $pad_i < 400; $pad_i++) {
      	    $fifth_price21[$pad_i] = '0';
      	}
      	$fifth_price2_31='';
      	$fifth_price2_31js='';
      	for($i=0;$i<80;$i++){
      		$fifth_price2_31js=$fifth_price2_31js.$fifth_price21[$i];
      	}
      	$k=0;
		for($i=0;$i<20;$i++){

			if($i%2==0){
				for($j=0;$j<4;$j++){
					$fifth_price2_31=$fifth_price2_31.$fifth_price21[$k];
					$k++;
				}
				$fifth_price2_31=$fifth_price2_31."00";
			}
			else{
				for($j=0;$j<4;$j++){
					$fifth_price2_31=$fifth_price2_31.$fifth_price21[$k];
					$k++;
				}
			}
		}
		$i=0;
		$j=0;

		$fifth_price211=str_split($fifth_price2_31);

		$fifth_price2_32='';
      	$fifth_price2_32js='';
      	for($i=80;$i<160;$i++){
      		$fifth_price2_32js=$fifth_price2_32js.$fifth_price21[$i];
      	}
      	$k=80;
		for($i=0;$i<20;$i++){

			if($i%2==0){
				for($j=0;$j<4;$j++){
					$fifth_price2_32=$fifth_price2_32.$fifth_price21[$k];
					$k++;
				}
				$fifth_price2_32=$fifth_price2_32."00";
			}
			else{
				for($j=0;$j<4;$j++){
					$fifth_price2_32=$fifth_price2_32.$fifth_price21[$k];
					$k++;
				}
			}
		}
		$i=0;
		$j=0;

		$fifth_price212=str_split($fifth_price2_32);
		
		$fifth_price2_33='';
      	$fifth_price2_33js='';
      	for($i=160;$i<240;$i++){
      		$fifth_price2_33js=$fifth_price2_33js.$fifth_price21[$i];
      	}
      	$k=160;
		for($i=0;$i<20;$i++){

			if($i%2==0){
				for($j=0;$j<4;$j++){
					$fifth_price2_33=$fifth_price2_33.$fifth_price21[$k];
					$k++;
				}
				$fifth_price2_33=$fifth_price2_33."00";
			}
			else{
				for($j=0;$j<4;$j++){
					$fifth_price2_33=$fifth_price2_33.$fifth_price21[$k];
					$k++;
				}
			}
		}
		$i=0;
		$j=0;

		$fifth_price213=str_split($fifth_price2_33);

		$fifth_price2_34='';
      	$fifth_price2_34js='';
      	for($i=240;$i<320;$i++){
      		$fifth_price2_34js=$fifth_price2_34js.$fifth_price21[$i];
      	}
      	$k=240;
		for($i=0;$i<20;$i++){

			if($i%2==0){
				for($j=0;$j<4;$j++){
					$fifth_price2_34=$fifth_price2_34.$fifth_price21[$k];
					$k++;
				}
				$fifth_price2_34=$fifth_price2_34."00";
			}
			else{
				for($j=0;$j<4;$j++){
					$fifth_price2_34=$fifth_price2_34.$fifth_price21[$k];
					$k++;
				}
			}
		}
		$i=0;
		$j=0;

		$fifth_price214=str_split($fifth_price2_34);

		$fifth_price2_35='';
      	$fifth_price2_35js='';
      	for($i=320;$i<400;$i++){
      		$fifth_price2_35js=$fifth_price2_35js.$fifth_price21[$i];
      	}
      	$k=320;
		for($i=0;$i<20;$i++){

			if($i%2==0){
				for($j=0;$j<4;$j++){
					$fifth_price2_35=$fifth_price2_35.$fifth_price21[$k];
					$k++;
				}
				$fifth_price2_35=$fifth_price2_35."00";
			}
			else{
				for($j=0;$j<4;$j++){
					$fifth_price2_35=$fifth_price2_35.$fifth_price21[$k];
					$k++;
				}
			}
		}
		$i=0;
		$j=0;

		$fifth_price215=str_split($fifth_price2_35);

	?>
	<section id="section_4">
	    <div id="altaf">
    		   <div class="sakir">
    		        <p>Manipur Singham Lottery</p>
    		        <p><?=$date_time->date_1?> <?=$date_time->time_t?></p>
    		  </div>
    		</div>

		<script type="text/javascript">

		  document.getElementById('section_4').value='<?php

	      echo $fifth_price2_31js;

	      ?>';
		</script>

		<div class="container" id="kus">
		

			<?php
			$fifth_array=0;
			for($k=1;$k<=5;$k++){
			?>
			<div class="row" id="meater_box_row">
				<?php
					for($j=1;$j<=2;$j++)
					{ if($j!=1){?>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<?php
						}
						for($i=1;$i<=10;$i++) {


				?> 

				<div>
					<main>
						<p class="odometer" id="odometer4<?=$i.$j.$k?>"><?php 

							$mn=$fifth_price211[$fifth_array];;
							$fifth_array++;

							$start=$mn;
							
							for($od=$mn;$od<50+$mn;$od++){

								if($start==9){
									$start=0;
								}
								$start++;
							}
							echo $start?>
								
						</p>

						<script type="text/javascript">
							
							id='odometer4'+<?=$i.$j.$k?>;
							document.getElementById(id).value=<?=$mn?>;
							console.log(id+":- "+document.getElementById(id).value) ;
							setTimeout(() => {
								var id='odometer4'+<?=$i.$j.$k?>;
								document.getElementById(id).innerText=<?php

								echo $mn;

								?>;
							}, 219000 + time);//219000
						</script>

						<div class="odometer1" id="odometer1d<?=$i.$j.$k?>">
	    
							<div class="digit">
								<div class="digit-container digit-one"><?php 
									$nm=$mn;
									echo $nm." ";
									for($od=0;$od<100;$od++){
										echo rand(0,9)." ";
										
									}
									?>
										
								</div>
							</div>

						</div>
					</main>
				</div>
				<?php
					}
				?>
				
				<?php	
					}
				?>
			</div>
			<?php	
				}
			?>

			<div id="head_div">
				<div id="head_clock">
					<div class="clock-card">
					<div class="clock">
						<span id="time">00:00:00</span>
						<span class="ampm" id="ampm">AM</span>
					</div>
					</div>
				</div>
				<div id="head_title">
					<span id="heading_text">Manipur Singham Lottery</span>
				</div>

				<div id="head_live">
					<i class="fas fa-dot-circle"></i>
					<b>Live from Kolkata</b>
				</div>
			</div>
			<div id="side1">
				<div id="sub_side1">
					<img src="<?=base_url()?>webroot/live_draw/assets/images/logo.png" id="side_logo">
					<p id="shimla1">Manipur Singham Lottery</p>
				</div>
				<div id="sub_side2">
					<p id="shimla_price_1">5th Prize</p>
					<p id="shimla_price_6">PRICE</p>
					<p id="shimla_price_2">₹</p>
					<p class="shimla_price_3" id="shimla_price_35"><?=$price->fi_p; ?></p>
					<script type="text/javascript">
						
						document.getElementById('shimla_price_35').value=<?=$price->fi_p;?>;

					</script>
					<p id="shimla_price_4">ON 4 DIGITS</p>
					<p id="shimla_price_5">ON 100 TIMES</p>
					<p id="shimla_price_7">Winning Numbers</p>
					<p id="shimla_price_8">(1-20)</p>
				</div>
			</div>

		</div>

		<div id="gov">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/gov.jpg" class="img-responsive">
		</div>

		<div id="result_div_2">
			<span id="draw_1">Draw Date : <?=$date_time->date_1?></span>
			<span id="draw_2">Draw Time : <?=$date_time->time_t?> ONWARDS</span>
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img8">
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img9">
		</div>

		<div id="side_porda_main">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img10" class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img11"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img12"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img13"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img14"class="side_porda">
		</div>

		<div id="rod_5thPrice">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod2" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod3" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod4" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod5" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod6" class="rod">

			
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_4" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_5" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_6" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_7" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_8" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_9" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_10" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_11" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_12" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_13" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_14" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_15" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_16" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_17" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_18" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_19" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_20" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_21" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_22" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_23" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_24" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_25" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_26" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_27" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_28" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_29" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_30" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_31" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_32" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_33" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_34" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_35" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_36" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_37" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_38" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_39" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_40" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_41" class="dots">




			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_42" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_43" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_44" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_45" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_46" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_47" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_48" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_49" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_50" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_51" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_52" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_53" class="dots">
		</div>

	</section>

	<section id="section_10">
	    <div id="altaf">
    		   <div class="sakir">
    		        <p>Manipur Singham Lottery</p>
    		        <p><?=$date_time->date_1?> <?=$date_time->time_t?></p>
    		  </div>
    		</div>

		<script type="text/javascript">

		  document.getElementById('section_10').value='<?php

	      echo $fifth_price2_32js;

	      ?>';
		</script>

		<div class="container" id="kus">
		

			<?php
			$fifth_array=0;
			for($k=1;$k<=5;$k++){
			?>
			<div class="row" id="meater_box_row">
				<?php
					for($j=1;$j<=2;$j++)
					{ if($j!=1){?>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<?php
						}
						for($i=1;$i<=10;$i++) {
				?> 
				<div>
					<main>
						<p class="odometer" id="odometer6<?=$i.$j.$k?>"><?php 

							$mn=$fifth_price212[$fifth_array];;
							$fifth_array++;

							$start=$mn;
							
							for($od=$mn;$od<50+$mn;$od++){

								if($start==9){
									$start=0;
								}
								$start++;
							}
							echo $start?>
								
						</p>

						<script type="text/javascript">
							
						  id='odometer6'+<?=$i.$j.$k?>;
				          document.getElementById(id).value=<?=$mn?>;
				          console.log(id+":- "+document.getElementById(id).value) ;
						  setTimeout(() => {
								var id='odometer6'+<?=$i.$j.$k?>;
								document.getElementById(id).innerText=<?php
									echo $mn;
								?>;	
						  }, 300000 + time);//300000
						</script>

						<div class="odometer1" id="odometer1e<?=$i.$j.$k?>">
	    
							<div class="digit">
								<div class="digit-container digit-one"><?php 
									$nm=$mn;
									echo $nm." ";
									for($od=0;$od<100;$od++){
										echo rand(0,9)." ";
										
									}
									?>
										
								</div>
							</div>

						</div>
					</main>
				</div>
				<?php
					}
				?>
				
				<?php	
					}
				?>
			</div>
			<?php	
				}
			?>

			<div id="head_div">
				<div id="head_clock">
					<div class="clock-card">
					<div class="clock">
						<span id="time">00:00:00</span>
						<span class="ampm" id="ampm">AM</span>
					</div>
					</div>
				</div>
				<div id="head_title">
					<span id="heading_text">Manipur Singham Lottery</span>
				</div>

				<div id="head_live">
					<i class="fas fa-dot-circle"></i>
					<b>Live from Kolkata</b>
				</div>
			</div>
			<div id="side1">
				<div id="sub_side1">
					<img src="<?=base_url()?>webroot/live_draw/assets/images/logo.png" id="side_logo">
					<p id="shimla1">Manipur Singham Lottery</p>
				</div>
				<div id="sub_side2">
					<p id="shimla_price_1">5th Prize</p>
					<p id="shimla_price_6">PRICE</p>
					<p id="shimla_price_2">₹</p>
					<p class="shimla_price_3" id="shimla_price_35"><?=$price->fi_p; ?></p>
					<script type="text/javascript">
						
						document.getElementById('shimla_price_35').value=<?=$price->fi_p;?>;

					</script>
					<p id="shimla_price_4">ON 4 DIGITS</p>
					<p id="shimla_price_5">ON 100 TIMES</p>
					<p id="shimla_price_7">Winning Numbers</p>
					<p id="shimla_price_8">(21-40)</p>
				</div>
			</div>

		</div>

		<div id="gov">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/gov.jpg" class="img-responsive">
		</div>

		<div id="result_div_2">
			<span id="draw_1">Draw Date : <?=$date_time->date_1?></span>
			<span id="draw_2">Draw Time : <?=$date_time->time_t?> ONWARDS</span>
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img8">
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img9">
		</div>

		<div id="side_porda_main">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img10" class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img11"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img12"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img13"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img14"class="side_porda">
		</div>

		<div id="rod_5thPrice">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod2" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod3" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod4" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod5" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod6" class="rod">

			
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_4" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_5" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_6" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_7" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_8" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_9" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_10" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_11" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_12" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_13" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_14" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_15" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_16" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_17" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_18" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_19" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_20" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_21" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_22" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_23" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_24" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_25" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_26" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_27" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_28" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_29" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_30" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_31" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_32" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_33" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_34" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_35" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_36" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_37" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_38" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_39" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_40" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_41" class="dots">




			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_42" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_43" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_44" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_45" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_46" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_47" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_48" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_49" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_50" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_51" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_52" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_53" class="dots">
		</div>

	</section>

	<section id="section_11">
	    <div id="altaf">
    		   <div class="sakir">
    		        <p>Manipur Singham Lottery</p>
    		        <p><?=$date_time->date_1?> <?=$date_time->time_t?></p>
    		  </div>
    		</div>

		<script type="text/javascript">

		  document.getElementById('section_11').value='<?php

	      echo $fifth_price2_33js;

	      ?>';
		</script>

		<div class="container" id="kus">
		

			<?php
			$fifth_array=0;
			for($k=1;$k<=5;$k++){
			?>
			<div class="row" id="meater_box_row">
				<?php
					for($j=1;$j<=2;$j++)
					{ if($j!=1){?>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<?php
						}
						for($i=1;$i<=10;$i++) {
				?> 
				<div>
					<main>
						<p class="odometer" id="odometer7<?=$i.$j.$k?>"><?php 

							$mn=$fifth_price213[$fifth_array];;
							$fifth_array++;

							$start=$mn;
							
							for($od=$mn;$od<50+$mn;$od++){

								if($start==9){
									$start=0;
								}
								$start++;
							}
							echo $start?>
								
						</p>

						<script type="text/javascript">
							
							id='odometer7'+<?=$i.$j.$k?>;
							document.getElementById(id).value=<?=$mn?>;
							console.log(id+":- "+document.getElementById(id).value) ;
							setTimeout(() => {
								var id='odometer7'+<?=$i.$j.$k?>;
								document.getElementById(id).innerText=<?php
									echo $mn;
								?>;	
							}, 376000 +time);//376000
							
						</script>

						<div class="odometer1" id="odometer1f<?=$i.$j.$k?>">
	    
							<div class="digit">
								<div class="digit-container digit-one"><?php 
									$nm=$mn;
									echo $nm." ";
									for($od=0;$od<100;$od++){
										echo rand(0,9)." ";
										
									}
									?>
										
								</div>
							</div>

						</div>
					</main>
				</div>
				<?php
					}
				?>
				
				<?php	
					}
				?>
			</div>
			<?php	
				}
			?>

			<div id="head_div">
				<div id="head_clock">
					<div class="clock-card">
					<div class="clock">
						<span id="time">00:00:00</span>
						<span class="ampm" id="ampm">AM</span>
					</div>
					</div>
				</div>
				<div id="head_title">
					<span id="heading_text">Manipur Singham Lottery</span>
				</div>

				<div id="head_live">
					<i class="fas fa-dot-circle"></i>
					<b>Live from Kolkata</b>
				</div>
			</div>
			<div id="side1">
				<div id="sub_side1">
					<img src="<?=base_url()?>webroot/live_draw/assets/images/logo.png" id="side_logo">
					<p id="shimla1">Manipur Singham Lottery</p>
				</div>
				<div id="sub_side2">
					<p id="shimla_price_1">5th Prize</p>
					<p id="shimla_price_6">PRICE</p>
					<p id="shimla_price_2">₹</p>
					<p class="shimla_price_3" id="shimla_price_35"><?=$price->fi_p; ?></p>
					<script type="text/javascript">
						
						document.getElementById('shimla_price_35').value=<?=$price->fi_p;?>;

					</script>
					<p id="shimla_price_4">ON 4 DIGITS</p>
					<p id="shimla_price_5">ON 100 TIMES</p>
					<p id="shimla_price_7">Winning Numbers</p>
					<p id="shimla_price_8">(41-60)</p>
				</div>
			</div>

		</div>

		<div id="gov">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/gov.jpg" class="img-responsive">
		</div>

		<div id="result_div_2">
			<span id="draw_1">Draw Date : <?=$date_time->date_1?></span>
			<span id="draw_2">Draw Time : <?=$date_time->time_t?> ONWARDS</span>
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img8">
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img9">
		</div>

		<div id="side_porda_main">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img10" class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img11"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img12"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img13"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img14"class="side_porda">
		</div>

		<div id="rod_5thPrice">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod2" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod3" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod4" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod5" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod6" class="rod">

			
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_4" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_5" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_6" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_7" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_8" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_9" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_10" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_11" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_12" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_13" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_14" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_15" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_16" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_17" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_18" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_19" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_20" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_21" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_22" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_23" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_24" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_25" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_26" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_27" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_28" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_29" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_30" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_31" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_32" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_33" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_34" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_35" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_36" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_37" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_38" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_39" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_40" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_41" class="dots">




			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_42" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_43" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_44" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_45" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_46" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_47" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_48" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_49" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_50" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_51" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_52" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_53" class="dots">
		</div>

	</section>

	<section id="section_12">
	    <div id="altaf">
    		   <div class="sakir">
    		        <p>Manipur Singham Lottery</p>
    		        <p><?=$date_time->date_1?> <?=$date_time->time_t?></p>
    		  </div>
    		</div>

		<script type="text/javascript">

		  document.getElementById('section_12').value='<?php

	      echo $fifth_price2_34js;

	      ?>';
		</script>

		<div class="container" id="kus">
		

			<?php
			$fifth_array=0;
			for($k=1;$k<=5;$k++){
			?>
			<div class="row" id="meater_box_row">
				<?php
					for($j=1;$j<=2;$j++)
					{ if($j!=1){?>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<?php
						}
						for($i=1;$i<=10;$i++) {
				?> 
				<div>
					<main>
						<p class="odometer" id="odometer8<?=$i.$j.$k?>"><?php 

							$mn=$fifth_price214[$fifth_array];;
							$fifth_array++;

							$start=$mn;
							
							for($od=$mn;$od<50+$mn;$od++){

								if($start==9){
									$start=0;
								}
								$start++;
							}
							echo $start?>
								
						</p>

						<script type="text/javascript">
							
							id='odometer8'+<?=$i.$j.$k?>;
							document.getElementById(id).value=<?=$mn?>;
							console.log(id+":- "+document.getElementById(id).value) ;
							setTimeout(() => {
								var id='odometer8'+<?=$i.$j.$k?>;
								document.getElementById(id).innerText=<?php
									echo $mn;
								?>;	
							}, 452000 + time);//452000
						</script>

						<div class="odometer1" id="odometer1g<?=$i.$j.$k?>">
	    
							<div class="digit">
								<div class="digit-container digit-one"><?php 
									$nm=$mn;
									echo $nm." ";
									for($od=0;$od<100;$od++){
										echo rand(0,9)." ";
										
									}
									?>
										
								</div>
							</div>

						</div>
					</main>
				</div>
				<?php
					}
				?>
				
				<?php	
					}
				?>
			</div>
			<?php	
				}
			?>

			<div id="head_div">
				<div id="head_clock">
					<div class="clock-card">
					<div class="clock">
						<span id="time">00:00:00</span>
						<span class="ampm" id="ampm">AM</span>
					</div>
					</div>
				</div>
				<div id="head_title">
					<span id="heading_text">Manipur Singham Lottery</span>
				</div>

				<div id="head_live">
					<i class="fas fa-dot-circle"></i>
					<b>Live from Kolkata</b>
				</div>
			</div>
			<div id="side1">
				<div id="sub_side1">
					<img src="<?=base_url()?>webroot/live_draw/assets/images/logo.png" id="side_logo">
					<p id="shimla1">Manipur Singham Lottery</p>
				</div>
				<div id="sub_side2">
					<p id="shimla_price_1">5th Prize</p>
					<p id="shimla_price_6">PRICE</p>
					<p id="shimla_price_2">₹</p>
					<p class="shimla_price_3" id="shimla_price_35"><?=$price->fi_p; ?></p>
					<script type="text/javascript">
						
						document.getElementById('shimla_price_35').value=<?=$price->fi_p;?>;

					</script>
					<p id="shimla_price_4">ON 4 DIGITS</p>
					<p id="shimla_price_5">ON 100 TIMES</p>
					<p id="shimla_price_7">Winning Numbers</p>
					<p id="shimla_price_8">(61-80)</p>
				</div>
			</div>

		</div>

		<div id="gov">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/gov.jpg" class="img-responsive">
		</div>

		<div id="result_div_2">
			<span id="draw_1">Draw Date : <?=$date_time->date_1?></span>
			<span id="draw_2">Draw Time : <?=$date_time->time_t?> ONWARDS</span>
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img8">
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img9">
		</div>

		<div id="side_porda_main">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img10" class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img11"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img12"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img13"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img14"class="side_porda">
		</div>

		<div id="rod_5thPrice">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod2" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod3" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod4" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod5" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod6" class="rod">

			
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_4" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_5" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_6" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_7" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_8" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_9" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_10" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_11" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_12" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_13" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_14" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_15" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_16" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_17" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_18" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_19" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_20" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_21" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_22" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_23" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_24" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_25" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_26" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_27" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_28" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_29" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_30" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_31" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_32" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_33" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_34" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_35" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_36" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_37" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_38" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_39" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_40" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_41" class="dots">




			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_42" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_43" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_44" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_45" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_46" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_47" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_48" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_49" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_50" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_51" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_52" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_53" class="dots">
		</div>

	</section>

	<section id="section_13">

            <div id="altaf">
    		   <div class="sakir">
    		        <p>Manipur Singham Lottery</p>
    		        <p><?=$date_time->date_1?> <?=$date_time->time_t?></p>
    		  </div>
    		</div>
		<script type="text/javascript">

		  document.getElementById('section_13').value='<?php

	      echo $fifth_price2_35js;

	      ?>';
		</script>

		<div class="container" id="kus">
		

			<?php
			$fifth_array=0;
			for($k=1;$k<=5;$k++){
			?>
			<div class="row" id="meater_box_row">
				<?php
					for($j=1;$j<=2;$j++)
					{ if($j!=1){?>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<?php
						}
						for($i=1;$i<=10;$i++) {
				?> 
				<div>
					<main>
						<p class="odometer" id="odometer9<?=$i.$j.$k?>"><?php 

							$mn=$fifth_price215[$fifth_array];;
							$fifth_array++;

							$start=$mn;
							
							for($od=$mn;$od<50+$mn;$od++){

								if($start==9){
									$start=0;
								}
								$start++;
							}
							echo $start?>
								
						</p>

						<script type="text/javascript">
							
							id='odometer9'+<?=$i.$j.$k?>;
							document.getElementById(id).value=<?=$mn?>;
							console.log(id+":- "+document.getElementById(id).value) ;
							setTimeout(() => {
								var id='odometer9'+<?=$i.$j.$k?>;
								document.getElementById(id).innerText=<?php
									echo $mn;
								?>;	
							}, 528000 + time);//528000
				          
						</script>

						<div class="odometer1" id="odometer1h<?=$i.$j.$k?>">
	    
							<div class="digit">
								<div class="digit-container digit-one"><?php 
									$nm=$mn;
									echo $nm." ";
									for($od=0;$od<100;$od++){
										echo rand(0,9)." ";
										
									}
									?>
										
								</div>
							</div>

						</div>
					</main>
				</div>
				<?php
					}
				?>
				
				<?php	
					}
				?>
			</div>
			<?php	
				}
			?>

			<div id="head_div">
				<div id="head_clock">
					<div class="clock-card">
					<div class="clock">
						<span id="time">00:00:00</span>
						<span class="ampm" id="ampm">AM</span>
					</div>
					</div>
				</div>
				<div id="head_title">
					<span id="heading_text">Manipur Singham Lottery</span>
				</div>

				<div id="head_live">
					<i class="fas fa-dot-circle"></i>
					<b>Live from Kolkata</b>
				</div>
			</div>
			<div id="side1">
				<div id="sub_side1">
					<img src="<?=base_url()?>webroot/live_draw/assets/images/logo.png" id="side_logo">
					<p id="shimla1">Manipur Singham Lottery</p>
				</div>
				<div id="sub_side2">
					<p id="shimla_price_1">5th Prize</p>
					<p id="shimla_price_6">PRICE</p>
					<p id="shimla_price_2">₹</p>
					<p class="shimla_price_3" id="shimla_price_35"><?=$price->fi_p; ?></p>
					<script type="text/javascript">
						
						document.getElementById('shimla_price_35').value=<?=$price->fi_p;?>;

					</script>
					<p id="shimla_price_4">ON 4 DIGITS</p>
					<p id="shimla_price_5">ON 100 TIMES</p>
					<p id="shimla_price_7">Winning Numbers</p>
					<p id="shimla_price_8">(81-100)</p>
				</div>
			</div>

		</div>

		<div id="gov">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/gov.jpg" class="img-responsive">
		</div>

		<div id="result_div_2">
			<span id="draw_1">Draw Date : <?=$date_time->date_1?></span>
			<span id="draw_2">Draw Time : <?=$date_time->time_t?> ONWARDS</span>
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img8">
		</div>

		<div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img9">
		</div>

		<div id="side_porda_main">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img10" class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img11"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img12"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img13"class="side_porda">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/main_porda.PNG" id="porda_img14"class="side_porda">
		</div>

		<div id="rod_5thPrice">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod2" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod3" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod4" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod5" class="rod">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod.jpg" id="rod6" class="rod">

			
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_4" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_5" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_6" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_7" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_8" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_9" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_10" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_11" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_12" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_13" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_14" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_15" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_16" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_17" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_18" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_19" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_20" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_21" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_22" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_23" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_24" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_25" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_26" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_27" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_28" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_29" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_30" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_31" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_32" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_33" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_34" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_35" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_36" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_37" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_38" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_39" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_40" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_41" class="dots">




			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_42" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_43" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_44" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_45" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_46" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_47" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_48" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_49" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_50" class="dots">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_51" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_52" class="dots">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="copy_dots_53" class="dots">
		</div>

	</section>

	<section id="section_5">
		<center>
			<textarea rows="4" cols="40" id="txt"></textarea> <br>
			<button type="submit" class="btn btn-secondary btn-sm" onclick="textspeech()" id="voice_btn">Test voice</button>
		</center>
	</section>

    <style>
        
    </style>
	<section id="section_6">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/slider1.jpg" id="screenshot">
	</section>

	<section id="section_7">
		<?php 
			$arr = array( 
				"a"=>"1", "b"=>"2", "c"=>"3", "d"=>"4", "e"=>"5", "f"=>"6",
				"g"=>"7", "h"=>"8", "i"=>"9", "j"=>"10", "k"=>"11", "l"=>"12",
			);

			$key = array_rand($arr);
		?>
		
		<!-- <video id="myVideo"
			style="
				width: 110vw;
				height: 100vh;
				object-fit: cover;
				background: black;
			">
			<source src="<?= base_url() ?>webroot/live_draw/assets/video/<?=$arr[$key]?>.mp4" type="video/mp4">
		</video> -->
		<img src="<?=base_url()?>webroot/live_draw/assets/images/<?=$arr[$key]?>.jpg" id="screenshot">
		<!--<video src="<?=base_url()?>webroot/live_draw/assets/video/<?=$arr[$key]?>.mp4" id="screenshot">-->
	</section>

	<section id="section_8">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/slider3.jpg" id="screenshot">
	</section>

	<section id="section_14">
		<img src="<?=base_url()?>webroot/live_draw/assets/images/slider2.jpg" id="screenshot">

	</section>

	<section id="section_15">
		<div class="container" id="kus15">

		<!------- Row 1 ------->


		<?php

			for($k=1;$k<=5;$k++){
			?>
			<div class="row" id="meater_box_row">
				<?php
					for($j=1;$j<=2;$j++)
					{ if($j!=1){?>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<?php
						}
						for($i=0;$i<10;$i++) {
				?> 
				<div>
					<main>
						<p class="odometer" id="odometer125<?=$i.$j.$k?>"><?php 

							$first_price2=(int)substr($slug1, -5);
							$mn=1;
							
							if($k==5 && $j==2 && $i==9){
								$first_price3=(int)$first_price2;
								$mn=fmod((int)$first_price3,10);
								
							}

							else if($k==5 && $j==2 && $i==8){
								$first_price3=(int)$first_price2/10;
								$mn=fmod((int)$first_price3,10);
								
							}

							else if($k==5 && $j==2 && $i==7){
								$first_price3=(int)$first_price2/100;
								$mn=fmod((int)$first_price3,10);
								
							}

							else if($k==5 && $j==2 && $i==6){
								
								$first_price3=(int)$first_price2/1000;
								$mn=fmod((int)$first_price3,10);

							}

							else if($k==5 && $j==2 && $i==5){
								$first_price3=(int)$first_price2/10000;
								$mn=fmod((int)$first_price3,10);							
							}
							
							$start=$mn;
							
							for($od=$mn;$od<50+$mn;$od++){

								if($start==9){
									$start=0;
								}
								$start++;
							}
							echo $start?>
								
						</p>

						<script type="text/javascript">
							
						  var id='odometer125'+<?=$i.$j.$k?>;
				          document.getElementById(id).value=<?php

				          echo $mn;

				          ?>;

						  setTimeout(() => {
								var id='odometer125'+<?=$i.$j.$k?>;
								document.getElementById(id).innerText=<?php

								echo $mn;

								?>;
							}, 32000);

						</script>

						<div class="odometer1" id="odometer1">
	    
							<div class="digit">
								<div class="digit-container digit-one"><?php 
									$nm=$mn;
									echo $nm." ";
									for($od=0;$od<100;$od++){
										echo rand(0,9)." ";
										
									}
									?>
										
								</div>
							</div>

						</div>
					</main>
				</div>
				<?php
					}
				?>
				
				<?php	
					}
				?>
			</div>
			<?php	
				}
			?>

			<div id="head_div_15">
				<div id="head_clock">
					<div class="clock-card">
					<div class="clock">
						<span id="time">00:00:00</span>
						<span class="ampm" id="ampm">AM</span>
					</div>
					</div>
				</div>
				<div id="head_title">
					<span id="heading_text">Manipur Singham Lottery</span>
				</div>

				<div id="head_live">
					<i class="fas fa-dot-circle"></i>
					<b>Live from Kolkata</b>
				</div>
			</div>
			<div id="side1">
				<div id="sub_side1">
					<img src="<?=base_url()?>webroot/live_draw/assets/images/logo.png" id="side_logo">
					<p id="shimla1">Manipur Singham Lottery</p>
				</div>
				<div id="sub_side2">
					<p id="shimla_price_1">1st Prize</p>
					<p id="shimla_price_6">PRICE</p>
					<p id="shimla_price_2">₹</p>
					<p class="shimla_price_3" id="shimla_price_31"><?=$price->f_p; ?></p>
					<script type="text/javascript">
						
						document.getElementById('shimla_price_31').value='<?=$price->f_p;?>';



					</script>

					<p id="shimla_price_4">ON 5 DIGITS</p>
					<p id="shimla_price_5">ON 1 TIMES</p>
				</div>
			</div>

		</div>

			<div id="porda_div15">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img1_15">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img2_15">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img3_15">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img4_15">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img5_15">
			</div>

		    <div id="spin_div">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/chakamain.png" class="img-responsive" id="chaka_15">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/chaka_circle.png" class="img-responsive" id="circle_15">
				<script type="text/javascript">
					
					var id="chaka";
			        document.getElementById(id).value=<?php

			        	echo $first_price_big_spin;
			        ?>;

				</script>

				<!-- <button type="button" class="btn btn-info" id="spin_btn">Spin Circle 1</button> -->
			</div>
			<div id="sm_spin_div_15">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/chakamain1.png" id="chaka1">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/chaka_circle1.png" id="circle1">

				<script type="text/javascript">
					
					var id="chaka1";
			        document.getElementById(id).value='<?=

			        	 $first_price_small_spin;
			        ?>';

				</script>

				<!-- <button type="button" class="btn btn-success" id="spin_btn2">Spin Circle 2</button> -->
			</div>

			<div id="result_div_3_15">
				<span id="draw_1">Draw Date : <?=$date_time->date_1?></span>
				<span id="draw_2">Draw Time : <?=$date_time->time_t?> ONWARDS</span>
			</div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/chakka_angtha_15.PNG" id="chaka_angtha_15">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/chaka_angtha_2.png" id="chaka_angtha2_15">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod1.jpg" id="rod15" class="rod">

			<div id="dot_first_price">
				
				<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_1" class="dots">
        		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_2" class="dots">
        		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_3" class="dots">


			</div>
	</section>

	<section id="section_16">
		<div class="container" id="kus16">

		<!------- Row 1 ------->


		<?php

			for($k=1;$k<=5;$k++){
			?>
			<div class="row" id="meater_box_row">
				<?php
					for($j=1;$j<=2;$j++)
					{ if($j!=1){?>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<?php
						}
						for($i=0;$i<10;$i++) {
				?> 
				<div>
					<main>
						<p class="odometer" id="odometer126<?=$i.$j.$k?>"><?php 

							$first_price2=(int)substr($slug1, -5);
							$mn=1;
							
							if($k==5 && $j==2 && $i==9){
								$first_price3=(int)$first_price2;
								$mn=fmod((int)$first_price3,10);
								
							}

							else if($k==5 && $j==2 && $i==8){
								$first_price3=(int)$first_price2/10;
								$mn=fmod((int)$first_price3,10);
								
							}

							else if($k==5 && $j==2 && $i==7){
								$first_price3=(int)$first_price2/100;
								$mn=fmod((int)$first_price3,10);
								
							}

							else if($k==5 && $j==2 && $i==6){
								
								$first_price3=(int)$first_price2/1000;
								$mn=fmod((int)$first_price3,10);

							}

							else if($k==5 && $j==2 && $i==5){
								$first_price3=(int)$first_price2/10000;
								$mn=fmod((int)$first_price3,10);							
							}
							
							$start=$mn;
							
							for($od=$mn;$od<50+$mn;$od++){

								if($start==9){
									$start=0;
								}
								$start++;
							}
							echo $start?>
								
						</p>

						<script type="text/javascript">
							
						  var id='odometer126'+<?=$i.$j.$k?>;
				          document.getElementById(id).value=<?php

				          echo $mn;

				          ?>;
							setTimeout(() => {
								var id='odometer126'+<?=$i.$j.$k?>;
								document.getElementById(id).innerText=<?php

								echo $mn;

								?>;
							}, 32000);
						</script>

						<div class="odometer1" id="odometer1">
	    
							<div class="digit">
								<div class="digit-container digit-one"><?php 
									$nm=$mn;
									echo $nm." ";
									for($od=0;$od<100;$od++){
										echo rand(0,9)." ";
										
									}
									?>
										
								</div>
							</div>

						</div>
					</main>
				</div>
				<?php
					}
				?>
				
				<?php	
					}
				?>
			</div>
			<?php	
				}
			?>

			<div id="head_div_16">
				<div id="head_clock">
					<div class="clock-card">
					<div class="clock">
						<span id="time">00:00:00</span>
						<span class="ampm" id="ampm">AM</span>
					</div>
					</div>
				</div>
				<div id="head_title">
					<span id="heading_text">Manipur Singham Lottery</span>
				</div>

				<div id="head_live">
					<i class="fas fa-dot-circle"></i>
					<b>Live from Kolkata</b>
				</div>
			</div>
			<div id="side1">
				<div id="sub_side1">
					<img src="<?=base_url()?>webroot/live_draw/assets/images/logo.png" id="side_logo">
					<p id="shimla1">Manipur Singham Lottery</p>
				</div>
				<div id="sub_side2">
					<p id="shimla_price_1">1st Prize</p>
					<p id="shimla_price_6">PRICE</p>
					<p id="shimla_price_2">₹</p>
					<p class="shimla_price_3" id="shimla_price_31"><?=$price->f_p; ?></p>
					<script type="text/javascript">
						
						document.getElementById('shimla_price_31').value='<?=$price->f_p;?>';



					</script>

					<p id="shimla_price_4">ON 5 DIGITS</p>
					<p id="shimla_price_5">ON 1 TIMES</p>
				</div>
			</div>

		</div>

			<div id="porda_div16">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img1_15">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img2_15">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img3_15">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img4_15">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img5_15">
			</div>

		    <div id="spin_div_16">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/chakamain.png" class="img-responsive" id="chaka_15">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/chaka_circle.png" class="img-responsive" id="circle_15">
				<script type="text/javascript">
					
					var id="chaka";
			        document.getElementById(id).value=<?php

			        	echo $first_price_big_spin;
			        ?>;

				</script>

				<!-- <button type="button" class="btn btn-info" id="spin_btn">Spin Circle 1</button> -->
			</div>
			<div id="sm_spin_div">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/chakamain1.png" id="chaka16">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/chaka_circle1.png" id="circle16">

				<script type="text/javascript">
					
					var id="chaka1";
			        document.getElementById(id).value='<?=

			        	 $first_price_small_spin;
			        ?>';

				</script>

				<!-- <button type="button" class="btn btn-success" id="spin_btn2">Spin Circle 2</button> -->
			</div>

			<div id="result_div_3_16">
				<span id="draw_1">Draw Date : <?=$date_time->date_1?></span>
				<span id="draw_2">Draw Time : <?=$date_time->time_t?> ONWARDS</span>
			</div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/chakka_angtha_15.PNG" id="chaka_angtha_15">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/chaka_angtha_16.PNG" id="chaka_angtha2_16">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod1.jpg" id="rod15" class="rod">

			<div id="dot_first_price">
				
				<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_1" class="dots">
        		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_2" class="dots">
        		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_3" class="dots">


			</div>
	</section>

	<?php
		$first_price1=$first_price->first_price;
		$slug1=trim($first_price1);
      	$slug1=str_replace(" ",'',$slug1);
      	$slug1=preg_replace('/[^A-Za-z0-9\-]/', '', $slug1);
      	
		
		$first_price_big_spin=(int)substr($slug1,0, 2);
		$first_price_small_spin=substr($slug1,2, 1);
	?> 
	<section id="section_17">
		<div class="container" id="kus17">

		<!------- Row 1 ------->

		<?php

			for($k=1;$k<=5;$k++){
			?>
			<div class="row" id="meater_box_row_15">
				<?php
					for($j=1;$j<=2;$j++)
					{ if($j!=1){?>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						<?php
						}
						for($i=0;$i<10;$i++) {
				?> 
				<div>
					<main id="main_1">
						<p class="odometer_zoom" id="odometer_17<?=$i.$j.$k?>"><?php 

							$first_price2=(int)substr($slug1, -5);
							$mn=1;
							
							if($k==5 && $j==2 && $i==9){
								$first_price3=(int)$first_price2;
								$mn=fmod((int)$first_price3,10);
								
							}

							else if($k==5 && $j==2 && $i==8){
								$first_price3=(int)$first_price2/10;
								$mn=fmod((int)$first_price3,10);
								
							}

							else if($k==5 && $j==2 && $i==7){
								$first_price3=(int)$first_price2/100;
								$mn=fmod((int)$first_price3,10);
								
							}

							else if($k==5 && $j==2 && $i==6){
								
								$first_price3=(int)$first_price2/1000;
								$mn=fmod((int)$first_price3,10);

							}

							else if($k==5 && $j==2 && $i==5){
								$first_price3=(int)$first_price2/10000;
								$mn=fmod((int)$first_price3,10);							
							}
							
							$start=$mn;
							
							for($od=$mn;$od<50+$mn;$od++){

								if($start==9){
									$start=0;
								}
								$start++;
							}
							echo $start

							?>
								
						</p>

						<script type="text/javascript">
							
						  var id1='odometer_17'+<?=$i.$j.$k?>;
				          document.getElementById(id1).value=<?php

				          echo $mn;

				          ?>;

							setTimeout(() => {
								var id='odometer_17'+<?=$i.$j.$k?>;
								document.getElementById(id).innerText=<?php

								echo $mn;

								?>;
							}, 32000);

						</script>

						<div class="odometer1" id="odometer1">
	    
							<div class="digit_17">
								<div class="digit-container_17 digit-one-17"><?php 
									$nm=$mn;
									echo $nm." ";
									for($od=0;$od<100;$od++){
										echo rand(0,9)." ";
										
									}
									?>
										
								</div>
							</div>

						</div>
					</main>
				</div>
				<?php
					}
				?>
				
				<?php	
					}
				?>
			</div>
			<?php	
				}
			?>
		</div>

			<div id="result_div_17">
				<span id="draw_1">Draw Date : <?=$date_time->date_1?></span>
				<span id="draw_17">Draw Time : <?=$date_time->time_t?> ONWARDS</span>
			</div>
			<img src="<?=base_url()?>webroot/live_draw/assets/images/chaka_angtha.PNG" id="chaka_angtha">
			<img src="<?=base_url()?>webroot/live_draw/assets/images/chaka_angtha_2.png" id="chaka_angtha2">

			<img src="<?=base_url()?>webroot/live_draw/assets/images/rod1.jpg" id="rod1" class="rod">

			<div id="dot_first_price">
				
				<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_1" class="dots">
        		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_2" class="dots">
        		<img src="<?=base_url()?>webroot/live_draw/assets/images/dot.png" id="dots_3" class="dots">


			</div>

			<div id="side17">
			</div>

			<div id="porda_div17">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img1_17">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img2_17">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img3_17">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img4_17">
				<img src="<?=base_url()?>webroot/live_draw/assets/images/1st_price_porda_1.png" id="porda_img5_17">
			</div>
	</section>
	
