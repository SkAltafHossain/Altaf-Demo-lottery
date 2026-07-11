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
            <div class="col-md-4 mb-3">
                <div class="time-box text-center p-4 bg-primary text-white rounded cursor-pointer" onclick="selectTime('11:30')" style="cursor: pointer;">
                    <h3>11:30 AM</h3>
                    <p>Morning Result</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="time-box text-center p-4 bg-success text-white rounded cursor-pointer" onclick="selectTime('15:30')" style="cursor: pointer;">
                    <h3>03:30 PM</h3>
                    <p>Day Result</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="time-box text-center p-4 bg-info text-white rounded cursor-pointer" onclick="selectTime('17:00')" style="cursor: pointer;">
                    <h3>05:00 PM</h3>
                    <p>Evening Result</p>
                </div>
            </div>
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

function selectTime(time) {
    selectedTime = time;
    var date = document.getElementById('pdate').value;
    if(date) {
        loadPDF(date, time);
    } else {
        alert('Please select a date first');
    }
}

function loadPDF(date, time) {
    var pdfFrame = document.getElementById('pdfFrame');
    var pdfMessage = document.getElementById('pdfMessage');
    
    // Map time to corresponding action
    var actions = {
        '11:30': 'oldday_result_date11',
        '15:30': 'oldday_result_date3',
        '17:00': 'oldday_result_date7'
    };
    
    var action = actions[time] || 'oldday_result_date11';
    pdfFrame.src = '<?=base_url()?>' + action + '?pdate=' + date;
    pdfMessage.style.display = 'none';
}
</script>