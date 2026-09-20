# Cron Job Setup for Automatic Price Management Status Activation

## Overview
This cron job automatically activates price management entries in `tbl_price_manegment` based on time + 25 minutes. It ensures that price entries become active even if the website is not open or being accessed.

## How It Works
1. The script checks all active time slots from the `tbl_time` table
2. For each time slot, it calculates the activation time (time slot + 25 minutes)
3. If the current time is past the activation time, it updates the status of corresponding price entries to 'Active'
4. The script runs independently of the website and can be scheduled via cron

## Script Location
- **File**: `cron_price_activation.php`
- **Location**: `/Applications/XAMPP/xamppfiles/htdocs/manipur-singham/cron_price_activation.php`

## Database Configuration
The script uses the same database configuration as your CodeIgniter application:

### Local Development (XAMPP)
```php
$db_config = [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'manipur_singham',
    'socket' => '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock'
];
```

### Live Server
For production, update the `$is_live` variable to `true` and use live credentials:
```php
$is_live = true; // Set to true for live server
if ($is_live) {
    $db_config = [
        'hostname' => 'localhost',
        'username' => 'u710604058_singham',
        'password' => '~X3dE$LOc',
        'database' => 'u710604058_singham',
        'socket' => '' // Live server typically uses default socket
    ];
}
```

## Testing the Script
You can test the script manually by running:
```bash
php /Applications/XAMPP/xamppfiles/htdocs/manipur-singham/cron_price_activation.php
```

The script will output log messages showing:
- Which price entries were activated
- Time slots processed
- Any errors encountered

## Setting Up Cron Job

### On macOS (Local Development)
1. Open Terminal
2. Edit crontab: `crontab -e`
3. Add the following line to run every minute:
   ```bash
   * * * * * /usr/bin/php /Applications/XAMPP/xamppfiles/htdocs/manipur-singham/cron_price_activation.php >> /Applications/XAMPP/xamppfiles/htdocs/manipur-singham/logs/cron.log 2>&1
   ```

### On Linux Server (Production)
1. SSH into your server
2. Edit crontab: `crontab -e`
3. Add the cron job:
   ```bash
   * * * * * /usr/bin/php /path/to/manipur-singham/cron_price_activation.php >> /path/to/manipur-singham/logs/cron.log 2>&1
   ```

### Cron Schedule Options
- **Every minute**: `* * * * *`
- **Every 5 minutes**: `*/5 * * * *`
- **Every 10 minutes**: `*/10 * * * *`
- **Every hour**: `0 * * * *`

For this use case, running every minute is recommended to ensure timely activation.

## Log File
The cron job outputs to a log file for debugging:
- **Location**: `logs/cron.log`
- **Contains**: Timestamped logs of activations and errors

## Troubleshooting

### PHP Not Found
If you get "php: command not found", find the PHP path:
```bash
which php
```
Use the full path in your cron job.

### Database Connection Issues
- Verify database credentials in the script
- Check MySQL socket path for local development
- Ensure MySQL service is running

### File Permissions
Ensure the script has execute permissions:
```bash
chmod +x /Applications/XAMPP/xamppfiles/htdocs/manipur-singham/cron_price_activation.php
```

### Log Directory
Create the logs directory if it doesn't exist:
```bash
mkdir -p /Applications/XAMPP/xamppfiles/htdocs/manipur-singham/logs
chmod 755 /Applications/XAMPP/xamppfiles/htdocs/manipur-singham/logs
```

## Server Troubleshooting (Hostinger/Production)

### Step 1: Verify Cron Job is Scheduled
1. Log in to Hostinger hPanel
2. Go to **Hosting → Manage → Advanced → Cron Jobs**
3. Check if your cron job is listed and active
4. Verify the schedule (e.g., `* * * * *` for every minute)

### Step 2: Test Script Manually via SSH
```bash
# Connect to your server via SSH
ssh username@your-server-ip

# Navigate to project directory
cd public_html/manipur-singham

# Run the script manually
php cron_price_activation.php
```

### Step 3: Check Cron Job Execution Logs
Hostinger provides cron execution logs in hPanel:
1. Go to **Advanced → Cron Jobs**
2. Click on your cron job
3. View "Last execution" and "Last output"

### Step 4: Use Test Script for Debugging
A test script (`test_cron.php`) is provided to verify basic functionality:
```bash
# Run test script
php test_cron.php

# Check test log
cat logs/test_cron.log
```

### Step 5: Verify File Paths on Server
On Hostinger, the absolute path might be different. Check via File Manager:
- Common paths: `/home/u710604058/public_html/manipur-singham/`
- Verify the exact path in File Manager and update cron job accordingly

### Step 6: Check PHP Binary Path on Server
```bash
# Find PHP path on server
which php
# Common paths: /usr/bin/php, /usr/local/bin/php
```

### Step 7: Enable Error Reporting in Script
For debugging, temporarily add error reporting to the script:
```php
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

### Step 8: Verify Database Connection on Server
Test database connection manually:
```bash
php -r "
\$conn = new mysqli('localhost', 'u710604058_singham', '~X3dE\$LOc', 'u710604058_singham');
if (\$conn->connect_error) {
    echo 'Connection failed: ' . \$conn->connect_error;
} else {
    echo 'Connection successful';
    \$conn->close();
}
"
```

## Security Considerations
- The script contains database credentials - ensure proper file permissions
- Consider moving the script outside the web root for production
- Use environment variables for sensitive credentials in production

## Time Zone
The script uses the server's system time. Ensure your server is set to the correct time zone:
```bash
date
```

To set time zone in PHP, you can add this at the top of the script:
```php
date_default_timezone_set('Asia/Kolkata');
```

## Maintenance
- Monitor the log file regularly: `tail -f logs/cron.log`
- Check for database connection errors
- Verify that price entries are being activated correctly
- Update credentials when moving between environments

## Example Output
```
[2026-09-20 11:30:00] Activated 2 price entries for time slot: 11:00 AM (Time ID: 1)
[2026-09-20 11:30:00] Activated 1 price entries for time slot: 12:00 PM (Time ID: 2)
[2026-09-20 11:30:00] Cron job completed successfully
```

## Integration with Existing System
This cron job complements the existing price management system:
- Manual status changes via admin panel still work
- The cron job only activates entries that are currently Inactive
- Deleted entries (status = 'Delete') are never affected
- The script checks the current date to avoid activating old entries