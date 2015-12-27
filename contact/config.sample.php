
<?php 
// Configuration settings
// Location for system wide settings
$site['config_root'] = '/Users/bleddy/Sites'; // location of config.php for all sites

$site['config_global_settings'] = $site['config_root'].'/config.php'; // Global config file
$site['config_library'] = $site['config_root'].'/lib'; // location of shared libraries

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
$site['from_name'] = 'Your Name'; // from email name 
$site['from_email'] = 'you@example.com'; // from email address 

?> 