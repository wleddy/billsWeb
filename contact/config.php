
<?php 
// Set the path to global settings 
$site['config_library'] = $_SERVER['DOCUMENT_ROOT'].'../lib'; // always one dir down from Document Root
$site['config_global_settings'] = $site['config_library'].'/config.php'; // Inside the config_library dir

// get system wide settings 
if((file_exists($site['config_global_settings'])) && (file_exists($site['config_library'])) && (file_exists($site['config_library'].'/MailClass.inc'))) {
    require_once($site['config_global_settings']);
    // Grab the FreakMailer class 
    require_once($site['config_library'].'/MailClass.inc'); 
} else {
    throw(new Exception("Global Mail Configuration Files do not exist"));
}

// Configuration settings for My Site 

// set the default time zone
date_default_timezone_set('America/Los_Angeles');

// override or extend as needed
//$site['from_name'] = 'Bike and Walk'; // from email name 
//$site['from_email'] = 'info@bikeandwalk.org'; // from email address 
//$site['to_email'] = $site['from_email'];

//echo "site config";

?> 