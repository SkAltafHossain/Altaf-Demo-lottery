	<div class="container">
		<div class="row" style="display: -webkit-inline-box;">

			<img src="<?=base_url()?>webroot/user/images/chakamain.png" class="img-responsive" id="chaka">
			<img src="<?=base_url()?>webroot/user/images/chaka_circle.png" class="img-responsive" id="circle">
			<button type="button" class="btn btn-info" id="spin_btn">Spin</button>
		

			<div class="col-sm-6">
				<main style="width:90%;">
					<p class="odometer" id="odometer">0</p>
				</main>
			</div>

			<div class="col-sm-6">
			<center>
				<h4> Text to speech </h4>
				<textarea rows="7" cols="60" id="txt"></textarea> <br>
				<button type="submit" class="btn btn-secondary btn-lg" onclick="textspeech()" id="voice_btn">Test the voice</button>
				</center>
			</div>
		
		</div>

	</div>
