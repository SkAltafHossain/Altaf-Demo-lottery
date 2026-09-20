# Live Server Deployment Guide for Cron Job

## Step 1: Upload Files to Live Server

### Upload the cron script
Upload `cron_price_activation.php` to your live server in the same directory as your website.

**Typical live server path:**
```
/public_html/manipur-singham/cron_price_activation.php
```

**Upload methods:**
- **FTP/File Manager**: Use your hosting control panel file manager or FTP client
- **Git**: If using Git, the file is already tracked and will be pushed with your next commit
- **SSH**: Use SCP command:
  ```bash
  scp cron_price_activation.php user@yourserver.com:/path/to/manipur-singham/
  ```

## Step 2: Verify Live Server Configuration

The script is already configured for live server with these credentials:
- **Database**: `u710604058_singham`
- **Username**: `u710604058_singham`
- **Password**: `~X3dE$LOc`
- **Hostname**: `localhost`

The `$is_live` variable is set to `true` in the current version.

## Step 3: Create Logs Directory

SSH into your server and create the logs directory:
```bash
mkdir -p /path/to/manipur-singham/logs
chmod 755 /path/to/manipur-singham/logs
```

## Step 4: Find PHP Path on Live Server

Different hosting providers have PHP in different locations. Find your PHP path:

```bash
which php
```

Common PHP paths:
- `/usr/bin/php`
- `/usr/local/bin/php`
- `/opt/cpanel/ea-php74/bin/php` (cPanel)
- `/usr/bin/php7.4` (some servers)

## Step 5: Set Up Cron Job

### Option A: Using cPanel (Recommended for most hosting)

1. Log in to your cPanel
2. Go to **Cron Jobs** under **Advanced** section
3. Add a new cron job with these settings:
   - **Minute**: `*`
   - **Hour**: `*`
   - **Day**: `*`
   - **Month**: `*`
   - **Weekday**: `*`
   - **Command**: 
     ```
     /usr/bin/php /home/yourusername/public_html/manipur-singham/cron_price_activation.php >> /home/yourusername/public_html/manipur-singham/logs/cron.log 2>&1
     ```

### Option B: Using SSH Command Line

1. SSH into your server
2. Edit crontab:
   ```bash
   crontab -e
   ```
3. Add this line (update paths as needed):
   ```bash
   * * * * * /usr/bin/php /home/yourusername/public_html/manipur-singham/cron_price_activation.php >> /home/yourusername/public_html/manipur-singham/logs/cron.log 2>&1
   ```
4. Save and exit (Ctrl+O, Enter, Ctrl+X for nano; or :wq for vim)

## Step 6: Test the Cron Job

### Manual Test
Run the script manually to test:
```bash
/usr/bin/php /home/yourusername/public_html/manipur-singham/cron_price_activation.php
```

### Check Logs
Monitor the log file:
```bash
tail -f /home/yourusername/public_html/manipur-singham/logs/cron.log
```

Expected output:
```
[2026-09-20 12:00:00] Activated 1 price entries for time slot: 11:00 AM (Time ID: 1)
[2026-09-20 12:00:00] Cron job completed successfully
```

## Step 7: Verify Database Connection

If you encounter database connection issues, test the connection:

```bash
mysql -u u710604058_singham -p'~X3dE$LOc' u710604058_singham -e "SELECT COUNT(*) FROM tbl_price_manegment;"
```

## Step 8: Monitor and Troubleshoot

### Check if cron is running
```bash
# Check cron service status
sudo service cron status

# View cron logs
sudo tail -f /var/log/syslog | grep CRON
```

### Common Issues and Solutions

**Issue**: PHP not found
- **Solution**: Use `which php` to find correct path and update cron command

**Issue**: Permission denied
- **Solution**: 
  ```bash
  chmod 755 /home/yourusername/public_html/manipur-singham/cron_price_activation.php
  chmod 755 /home/yourusername/public_html/manipur-singham/logs
  ```

**Issue**: Database connection failed
- **Solution**: Verify credentials and that MySQL is running
- **Solution**: Check if host needs to be `127.0.0.1` instead of `localhost`

**Issue**: No output in logs
- **Solution**: Check cron job syntax and file paths
- **Solution**: Ensure user has write permissions to log file

## Step 9: Set Up Monitoring (Optional)

For production monitoring, consider:

### Email Notifications
Add email notification to cron job:
```bash
* * * * * /usr/bin/php /path/to/script.php >> /path/to/logs/cron.log 2>&1 | mail -s "Cron Job Output" your@email.com
```

### Error Logging Only
Modify script to log only errors:
```bash
* * * * * /usr/bin/php /path/to/script.php 2>> /path/to/logs/error.log
```

## Step 10: Security Best Practices

1. **Move script outside web root** (if possible):
   ```
   /home/yourusername/cron_scripts/cron_price_activation.php
   ```

2. **Restrict file permissions**:
   ```bash
   chmod 600 /home/yourusername/public_html/manipur-singham/cron_price_activation.php
   ```

3. **Use environment variables** for credentials (advanced):
   ```php
   $db_config = [
       'hostname' => getenv('DB_HOST'),
       'username' => getenv('DB_USER'),
       'password' => getenv('DB_PASS'),
       'database' => getenv('DB_NAME')
   ];
   ```

## Step 11: Schedule Optimization

If running every minute is too frequent, consider:

**Every 5 minutes:**
```bash
*/5 * * * * /usr/bin/php /path/to/script.php >> /path/to/logs/cron.log 2>&1
```

**Every 10 minutes:**
```bash
*/10 * * * * /usr/bin/php /path/to/script.php >> /path/to/logs/cron.log 2>&1
```

**At specific times (e.g., every hour):**
```bash
0 * * * * /usr/bin/php /path/to/script.php >> /path/to/logs/cron.log 2>&1
```

## Verification Checklist

- [ ] File uploaded to correct location on live server
- [ ] `$is_live = true` in the script
- [ ] Logs directory created with proper permissions
- [ ] PHP path verified and correct in cron command
- [ ] Cron job added and active
- [ ] Manual test completed successfully
- [ ] Log file being written to
- [ ] Database connection working
- [ ] Price entries being activated correctly

## Time Zone Considerations

Ensure your live server is in the correct time zone. Check current time zone:
```bash
date
```

If needed, set time zone in the script by adding this line near the top:
```php
date_default_timezone_set('Asia/Kolkata');
```

## Hosting-Specific Notes

### cPanel/WHM
- Use **Cron Jobs** feature in cPanel
- PHP typically at `/usr/bin/php` or `/usr/local/bin/php`
- Document root usually `/home/username/public_html`

### Shared Hosting
- May need to contact support for cron access
- Some hosts limit cron frequency
- May need to use control panel cron interface

### VPS/Dedicated Server
- Full SSH access
- Can use `crontab -e` directly
- More control over PHP version and path

## Support

If you encounter issues:
1. Check the log file first
2. Test the script manually
3. Verify database credentials
4. Check PHP path and version
5. Contact your hosting provider if needed

The cron job is now configured to work on your live server and will automatically activate price management entries based on the time + 25 minutes rule.