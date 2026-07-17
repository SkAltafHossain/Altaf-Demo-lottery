  
	<!-- Today Result Start -->
	<div class="middle-section">
	    <div class="container">
	        <div class="project-details text-center mb-5">
	            <h2>Welcome to Our Project</h2>
	            <p class="lead">Your trusted platform for lottery results and updates. Stay informed with our daily result announcements and access PDF reports for detailed information.</p>
	        </div>

	        <div class="row mb-4">
	            <?php if(isset($time) && !empty($time)): ?>
	                <?php foreach($time as $index => $t): ?>
	                    <div class="col-md-4 mb-3">
	                        <?php 
	                            $bgColors = ['bg-primary', 'bg-success', 'bg-info'];
	                            $bgColor = isset($bgColors[$index]) ? $bgColors[$index] : 'bg-secondary';
	                            $pdfUrl = base_url('today_result/' . $t->id);
	                        ?>
	                        <div class="time-box text-center p-4 <?php echo $bgColor; ?> text-white rounded cursor-pointer" onclick="changePDF('<?php echo $pdfUrl; ?>')" style="cursor: pointer;">
	                            <h3><?php echo $t->time; ?></h3>
	                            <p><?php echo $t->title; ?> Result</p>
	                        </div>
	                    </div>
	                <?php endforeach; ?>
	            <?php endif; ?>
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
function changePDF(url) {
    var pdfFrame = document.getElementById('pdfFrame');
    var pdfMessage = document.getElementById('pdfMessage');
    
    // Update the iframe with the selected PDF URL
    pdfFrame.src = url;
    pdfMessage.style.display = 'none';
}
</script>
