
<?php 
/*
    When creating a new site from the framework 
    modify the value for 'config_library' and rename this file as 'config.php'
*/


// Configuration settings
// Location for system wide settings
//$site['config_library'] = $_SERVER['DOCUMENT_ROOT'].'../lib'; // this fails on some versions of php?
$site['config_library'] = '/Users/bleddy/Sites/lib'; // use absolute path to be sure...
$site['config_global_settings'] = $site['config_library'].'/config.php'; // Inside the config_library dir
$site['mailer_class'] = $site['config_library'].'/MailClass.inc'; // Inside the config_library dir

// get system wide settings 
if(file_exists($site['config_library'])) {
    // path is bad
} else {
    throw(new Exception("Global Mail Library directory do not exist"));
}
if(file_exists($site['config_global_settings'])) {
    require_once($site['config_global_settings']);
} else {
    throw(new Exception("Global Mail Configuration Files do not exist"));
}
if(file_exists($site['mailer_class'])) {
    // Grab the FreakMailer class 
    require_once($site['mailer_class']); 
} else {
    throw(new Exception("Mailer Class Files do not exist"));
}


// Email Settings 
$site['from_name'] = 'Your Name'; // from email name 
$site['from_email'] = 'you@example.com'; // from email address 

// Grab the FreakMailer class 
require_once($site['config_library'].'/MailClass.inc'); 

?> 