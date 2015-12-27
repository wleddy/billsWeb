
<?php 
// Configuration settings for All Sites
// get system wide settings one level up from me
$site['config_root'] = '/Users/bleddy/Sites'; // location of config.php for all sites

$site['config_library'] = $site['config_root'].'/lib'; // location of shared libraries
$site['config_global_settings'] = $site['config_root'].'/config.php';

if((file_exists($site['config_global_settings'])) && (file_exists($site['config_library']))) {
    require_once($site['config_global_settings']);
    
} else {
    throw(new Exception("Global Mail Configuration Files do not exist"));
}

//// Un Comment any setting you want to override the global settings
//$site['smtp_mode'] = 'enabled'; // enabled or disabled 
//$site['smtp_host'] = 'smtpout.secureserver.net'; 
//$site['smtp_port'] = '80'; 
//$site['smtp_username'] = 'mailagent@example.com';
//$site['smtp_password'] = 'mypassword';

// Email Settings 
$site['from_name'] = 'Bill Leddy'; // from email name 
$site['from_email'] = 'bill@williesworkshop.net'; // from email address 

?> 