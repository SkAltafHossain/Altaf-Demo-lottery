<?php
/**
 * Cron Job Script for Automatic Price Management Status Activation
 * 
 * This script automatically activates price management entries based on time + 25 minutes
 * It runs independently of the website and can be executed via cron job
 */

// Set timezone to match your server timezone
date_default_timezone_set('Asia/Kolkata');

$db_config = [
    'hostname' => 'localhost',
    'username' => 'u710604058_singham',
    'password' => '~X3dE$LOc',
    'database' => 'u710604058_singham',
    'socket' => '' // Live server typically uses default socket
];

// Create database connection
if (!empty($db_config['socket'])) {
    $conn = new mysqli($db_config['hostname'], $db_config['username'], $db_config['password'], $db_config['database'], null, $db_config['socket']);
} else {
    $conn = new mysqli($db_config['hostname'], $db_config['username'], $db_config['password'], $db_config['database']);
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset
$conn->set_charset("utf8");

try {
    // Get current date and time
    $current_date = date('Y-m-d');
    $current_time = date('H:i:s');
    
    // Debug output to see current time
    echo "[" . date('Y-m-d H:i:s') . "] Current system time: $current_time\n";
    
    // Get all active time slots from tbl_time
    $time_query = "SELECT id, time FROM tbl_time WHERE status = 'Active' ORDER BY id ASC";
    $time_result = $conn->query($time_query);
    
    if ($time_result->num_rows > 0) {
        while ($time_row = $time_result->fetch_assoc()) {
            $time_id = $time_row['id'];
            $time_slot = $time_row['time'];
            
            // Convert time slot to 24-hour format for comparison
            $time_24h = date('H:i:s', strtotime($time_slot));
            
            // Calculate activation time (time slot + 25 minutes)
            // You can change '25 minutes' to your preferred delay
            $minutes_delay = 25; // Change this value as needed (30 minutes = 04:45 PM + 30 = 05:15 PM)
            $activation_time = date('H:i:s', strtotime($time_slot . ' +' . $minutes_delay . ' minutes'));
            
            // Check if current time is past activation time
            // Debug: Show timing details
            echo "Time Slot: $time_slot, Activation Time: $activation_time, Current Time: $current_time\n";
            
            if ($current_time >= $activation_time) {
                // Update tbl_price_manegment status to Active for this time and current date
                $update_query = "UPDATE tbl_price_manegment 
                                SET status = 'Active' 
                                WHERE time = '$time_id' 
                                AND date = '$current_date' 
                                AND status != 'Delete'";
                
                if ($conn->query($update_query)) {
                    $affected_rows = $conn->affected_rows;
                    echo "[" . date('Y-m-d H:i:s') . "] Query executed. Affected rows: $affected_rows for time slot: $time_slot (Time ID: $time_id)\n";
                    if ($affected_rows > 0) {
                        echo "[" . date('Y-m-d H:i:s') . "] Activated $affected_rows price entries for time slot: $time_slot (Time ID: $time_id)\n";
                    } else {
                        echo "[" . date('Y-m-d H:i:s') . "] No rows needed activation (already active or no matching records)\n";
                    }
                } else {
                    echo "[" . date('Y-m-d H:i:s') . "] Error updating status for time slot $time_slot: " . $conn->error . "\n";
                }
            }
        }
    } else {
        echo "[" . date('Y-m-d H:i:s') . "] No active time slots found in tbl_time\n";
    }
    
    echo "[" . date('Y-m-d H:i:s') . "] Cron job completed successfully\n";
    
} catch (Exception $e) {
    echo "[" . date('Y-m-d H:i:s') . "] Error: " . $e->getMessage() . "\n";
}

// Close connection
$conn->close();
?>