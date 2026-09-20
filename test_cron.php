<?php
/**
 * Simple test script to verify cron job execution
 */

// Set timezone
date_default_timezone_set('Asia/Kolkata');

// Test output
echo "Test script executed successfully at: " . date('Y-m-d H:i:s') . "\n";
echo "PHP Version: " . phpversion() . "\n";
echo "Current working directory: " . getcwd() . "\n";

// Test file write capability
$log_file = __DIR__ . '/logs/test_cron.log';
$log_dir = __DIR__ . '/logs';

if (!is_dir($log_dir)) {
    mkdir($log_dir, 0755, true);
    echo "Created logs directory\n";
}

file_put_contents($log_file, "Test at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
echo "Test log written to: $log_file\n";

// Test database connection
$db_config = [
    'hostname' => 'localhost',
    'username' => 'u710604058_singham',
    'password' => '~X3dE$LOc',
    'database' => 'u710604058_singham'
];

try {
    $conn = new mysqli($db_config['hostname'], $db_config['username'], $db_config['password'], $db_config['database']);
    if ($conn->connect_error) {
        echo "Database connection failed: " . $conn->connect_error . "\n";
    } else {
        echo "Database connection successful\n";
        $conn->close();
    }
} catch (Exception $e) {
    echo "Database error: " . $e->getMessage() . "\n";
}

echo "Test completed\n";
?>
