<div class="middle-section">
    <div class="container">
        <div class="project-details text-center mb-5">
            <h2>Old Results</h2>
            <p class="lead">Select a date to view historical lottery results. Access PDF reports for detailed information from past draws.</p>
        </div>

        <div class="date-selector text-center mb-4">
            <h3 class="mb-3">Select Date</h3>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <input type="date" name="pdate" id="pdate" max="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -1 day'));?>" min="<?php echo $carent_date=date('Y-m-d', strtotime(date('Y-m-d').' -31 day')); ?>" class="form-control validate[required]" data-errormessage-value-missing="Date is required" data-prompt-position="bottomLeft">
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <?php if(isset($time) && !empty($time)): ?>
                <?php foreach($time as $index => $t): ?>
                    <div class="col-md-4 mb-3">
                        <?php 
                            $bgColors = ['bg-primary', 'bg-success', 'bg-info'];
                            $bgColor = isset($bgColors[$index]) ? $bgColors[$index] : 'bg-secondary';
                        ?>
                        <div class="time-box text-center p-4 <?php echo $bgColor; ?> text-white rounded cursor-pointer" onclick="selectTime(<?php echo $t->id; ?>, '<?php echo $t->time; ?>')" style="cursor: pointer;">
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
            <p id="pdfMessage" class="mt-3 text-muted">Select a date and time to view the PDF result</p>
        </div>
    </div>
</div>

<style>
.time-box {
    transition: all 0.3s ease;
}
.time-box:hover {
    opacity: 0.9;
    transform: scale(1.02);
    transition: all 0.3s ease;
}
</style>

<script>
var selectedTime = '';

function selectTime(timeId, timeLabel) {
    selectedTime = timeId;
    var date = document.getElementById('pdate').value;
    if(date) {
        loadPDF(date, timeId);
    } else {
        alert('Please select a date first');
    }
}

function loadPDF(date, timeId) {
    var pdfFrame = document.getElementById('pdfFrame');
    var pdfMessage = document.getElementById('pdfMessage');
    
    // Use single endpoint with time ID parameter
    var pdfUrl = '<?=base_url('old-result')?>?pdate=' + date + '&time=' + timeId;
    pdfFrame.src = pdfUrl;
    pdfMessage.style.display = 'none';
}
</script>
