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