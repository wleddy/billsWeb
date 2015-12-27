
<?php 
// Configuration settings for All Sites 
//$site['config_root'] = '/Users/bleddy/Sites'; // location of config.php for all sites
//$site['config_library'] = $site['config_root'].'/lib'; // location of shared libraries

//echo "root config";

// set the default time zone
date_default_timezone_set('America/Los_Angeles');

// Email Settings 
$site['from_name'] = 'your name'; // from email name 
$site['from_email'] = 'you@email.net'; // from email address 

$site['smtp_mode'] = 'enabled'; // enabled or disabled 
$site['smtp_host'] = 'smtpout.secureserver.net'; 
$site['smtp_port'] = '80'; 
$site['smtp_username'] = 'you@email.net';
$site['smtp_password'] = 'yourpassword';

?> 
