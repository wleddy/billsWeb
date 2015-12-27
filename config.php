
<?php 
// Configuration settings for All Sites 
//echo "root config";
// set the default time zone
date_default_timezone_set('America/Los_Angeles');

// Email Settings 
$site['from_name'] = 'Bill Leddy'; // from email name 
$site['from_email'] = 'bill@williesworkshop.net'; // from email address 

// Just in case we need to relay to a different server,  
// provide an option to use external mail server. 
$site['smtp_mode'] = 'enabled'; // enabled or disabled 
$site['smtp_host'] = 'smtpout.secureserver.net'; 
$site['smtp_port'] = '80'; 
$site['smtp_username'] = 'info@leddyconsulting.com';
$site['smtp_password'] = 'infopass';

$site['config_root'] = '/Users/bleddy/Sites'; // location of config.php for all sites
$site['config_library'] = $site['config_root'].'/lib'; // location of shared libraries


?> 