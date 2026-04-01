<!-- First Prize Last Number Section -->
<div class="middle-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-4">First Prize Last Number</h2>
                
                <?php if(!empty($results)): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">11:30 AM</th>
                                    <th class="text-center">03:00 PM</th>
                                    <th class="text-center">05:00 PM</th>
                                    <th class="text-center">08:30 PM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($results as $row): ?>
                                    <tr>
                                        <td class="text-center">
                                            <?php 
                                            // Format date
                                            $date = isset($row['date']) ? $row['date'] : (isset($row['result_date']) ? $row['result_date'] : '');
                                            if(!empty($date)) {
                                                echo $date;
                                            } else {
                                                echo date('d-m-Y');
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <?php 
                                            // Display last digit for 11:30 AM
                                            $morning = isset($row['11:30 AM']) ? $row['11:30 AM'] : '-';
                                            if($morning != '-') {
                                                echo '<span class="badge badge-primary">' . $morning . '</span>';
                                            } else {
                                                echo '<span class="text-muted">' . $morning . '</span>';
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <?php 
                                            // Display last digit for 03:00 PM
                                            $day = isset($row['03:00 PM']) ? $row['03:00 PM'] : '-';
                                            if($day != '-') {
                                                echo '<span class="badge badge-success">' . $day . '</span>';
                                            } else {
                                                echo '<span class="text-muted">' . $day . '</span>';
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <?php 
                                            // Display last digit for 05:00 PM
                                            $evening = isset($row['05:00 PM']) ? $row['05:00 PM'] : '-';
                                            if($evening != '-') {
                                                echo '<span class="badge badge-info">' . $evening . '</span>';
                                            } else {
                                                echo '<span class="text-muted">' . $evening . '</span>';
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <?php 
                                            // Display last digit for 08:30 PM
                                            $night = isset($row['08:30 PM']) ? $row['08:30 PM'] : '-';
                                            if($night != '-') {
                                                echo '<span class="badge badge-warning">' . $night . '</span>';
                                            } else {
                                                echo '<span class="text-muted">' . $night . '</span>';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="alert alert-info text-center">
                        <h4>No Data Available</h4>
                        <p>First prize last digit data is not available at the moment.</p>
                    </div>
                <?php endif; ?>
                
                <div class="text-center mt-4">
                    <a href="<?=base_url('home')?>" class="btn btn-secondary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.table-responsive {
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.table {
    margin-bottom: 0;
}

.table th {
    background-color: #343a40;
    color: white;
    font-weight: bold;
    border: 1px solid #dee2e6;
}

.table td {
    vertical-align: middle;
    border: 1px solid #dee2e6;
}

.badge {
    font-size: 1.2em;
    padding: 8px 12px;
    min-width: 40px;
}

.alert {
    border-radius: 8px;
}

@media (max-width: 768px) {
    .table-responsive {
        font-size: 0.9em;
    }
    
    .badge {
        font-size: 1em;
        padding: 6px 10px;
        min-width: 35px;
    }
}
</style>
