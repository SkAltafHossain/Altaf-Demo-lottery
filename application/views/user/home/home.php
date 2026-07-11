
  
	<!-- Today Result Start -->
	<div class="middle-section">
	    <div class="container">
	        <div class="project-details text-center mb-5">
	            <h2>Welcome to Our Project</h2>
	            <p class="lead">Your trusted platform for lottery results and updates. Stay informed with our daily result announcements and access PDF reports for detailed information.</p>
	        </div>

	        <div class="row mb-4">
	            <div class="col-md-4 mb-3">
	                <div class="time-box text-center p-4 bg-primary text-white rounded cursor-pointer" onclick="changePDF('10am')" style="cursor: pointer;">
	                    <h3>10:00 AM</h3>
	                    <p>Morning Result</p>
	                </div>
	            </div>
	            <div class="col-md-4 mb-3">
	                <div class="time-box text-center p-4 bg-success text-white rounded cursor-pointer" onclick="changePDF('1pm')" style="cursor: pointer;">
	                    <h3>1:00 PM</h3>
	                    <p>Afternoon Result</p>
	                </div>
	            </div>
	            <div class="col-md-4 mb-3">
	                <div class="time-box text-center p-4 bg-info text-white rounded cursor-pointer" onclick="changePDF('4pm')" style="cursor: pointer;">
	                    <h3>4:00 PM</h3>
	                    <p>Evening Result</p>
	                </div>
	            </div>
	        </div>

	        <div class="pdf-display text-center">
	            <h3 class="mb-3">Result PDF</h3>
	            <iframe id="pdfFrame" src="" width="100%" height="600px" style="border: 1px solid #ccc; border-radius: 5px;"></iframe>
	            <p id="pdfMessage" class="mt-3 text-muted">Click on a time box above to view the PDF result</p>
	        </div>
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
.time-box:hover {
    opacity: 0.9;
    transform: scale(1.02);
    transition: all 0.3s ease;
}
.time-box {
    transition: all 0.3s ease;
}
</style>
<script>
function changePDF(time) {
    var pdfFrame = document.getElementById('pdfFrame');
    var pdfMessage = document.getElementById('pdfMessage');
    
    // Define PDF URLs for each time slot
    var pdfUrls = {
        '10am': '<?=base_url('today_result/1')?>',
        '1pm': '<?=base_url('today_result/2')?>',
        '4pm': '<?=base_url('today_result/3')?>'
    };
    
    // Update the iframe with the selected PDF
    pdfFrame.src = pdfUrls[time];
    pdfMessage.style.display = 'none';
}
</script>