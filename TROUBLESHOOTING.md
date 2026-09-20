# Cron Job Troubleshooting Guide

## Quick Checklist for Server Issues

### 1. Is the Cron Job Scheduled?
- [ ] Log in to Hostinger hPanel
- [ ] Go to Advanced → Cron Jobs
- [ ] Verify cron job exists and is active
- [ ] Check the schedule (should be `* * * * *` for every minute)

### 2. Is the Script Accessible?
- [ ] Check file permissions: `chmod 755 cron_price_activation.php`
- [ ] Verify file path in cron job matches actual location
- [ ] Test script manually: `php /path/to/cron_price_activation.php`

### 3. Is PHP Working?
- [ ] Find PHP path: `which php` (usually `/usr/bin/php` or `/usr/local/bin/php`)
- [ ] Test PHP execution: `php -v`
- [ ] Verify PHP binary path in cron job

### 4. Is Database Connection Working?
- [ ] Verify `$is_live = true` is set in script
- [ ] Check database credentials match production
- [ ] Test database connection manually
- [ ] Ensure MySQL is accessible from server

### 5. Are Logs Being Created?
- [ ] Check if logs directory exists: `ls -la logs/`
- [ ] Verify write permissions: `chmod 755 logs/`
- [ ] Check log file: `cat logs/cron.log`
- [ ] If no logs, check cron job output path

### 6. Common Issues and Solutions

#### Issue: "PHP command not found"
**Solution:** Find correct PHP path and update cron job
```bash
which php
# Update cron job with full path, e.g., /usr/bin/php
```

#### Issue: "Permission denied"
**Solution:** Set proper permissions
```bash
chmod 755 cron_price_activation.php
chmod 755 logs/
```

#### Issue: "Database connection failed"
**Solution:** Verify credentials and set `$is_live = true`
```php
$is_live = true; // Enable production credentials
```

#### Issue: No log output
**Solution:** Check cron job output redirection
```bash
# Ensure this is in your cron job:
>> /path/to/logs/cron.log 2>&1
```

#### Issue: Script runs but doesn't activate entries
**Solution:** Check timing logic and database data
- Verify time slots exist in `tbl_time`
- Check current server timezone: `date`
- Ensure price entries exist for current date

### 7. Debug Steps

**Step 1: Run test script**
```bash
php test_cron.php
```

**Step 2: Check test log**
```bash
cat logs/test_cron.log
```

**Step 3: Run main script manually**
```bash
php cron_price_activation.php
```

**Step 4: Check main log**
```bash
tail -20 logs/cron.log
```

**Step 5: Monitor in real-time**
```bash
tail -f logs/cron.log
```

### 8. Hostinger-Specific Tips

- **File Path:** Usually `/home/u710604058/public_html/manipur-singham/`
- **PHP Path:** Usually `/usr/bin/php` or `/usr/local/bin/php`
- **Cron Interface:** Use hPanel cron job manager for easier management
- **Execution Logs:** Available in hPanel under cron job details

### 9. Quick Test Command

Run this to test everything at once:
```bash
php test_cron.php && echo "Test completed" && cat logs/test_cron.log
```

### 10. Emergency Fallback

If cron jobs don't work, consider:
- Using Hostinger's "Scheduled Tasks" feature
- Setting up a webhook trigger from external service
- Using a monitoring service to ping the script periodically

## Support

If issues persist:
1. Check Hostinger knowledge base for cron job specifics
2. Contact Hostinger support with cron job details
3. Verify server meets PHP and MySQL requirements
