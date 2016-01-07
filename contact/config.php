
<?php 
// Configuration settings for My Site 
// Set the path to global settings 
$site['config_library'] = '/Users/bleddy/Sites/lib'; // location of config.php for all sites & phpMailer
$site['config_global_settings'] = $site['config_library'].'/config.php';

// get system wide settings 
if((file_exists($site['config_global_settings'])) && (file_exists($site['config_library']))) {
    require_once($site['config_global_settings']);
    
} else {
    throw(new Exception("Global Mail Configuration Files do not exist"));
}

// override or extend as needed
//$site['from_name'] = 'Bike and Walk'; // from email name 
//$site['from_email'] = 'info@bikeandwalk.org'; // from email address 

// Grab the FreakMailer class 
require_once($site['config_library'].'/MailClass.inc'); 

//echo "site config";

?> 