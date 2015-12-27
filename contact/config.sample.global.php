
<?php 
// Configuration settings for All Sites 
//$site['config_root'] = '/Users/bleddy/Sites'; // location of config.php for all sites
//$site['config_library'] = $site['config_root'].'/lib'; // location of shared libraries
//echo "root config";

// set the default time zone
date_default_timezone_set('America/Los_Angeles');

<<<<<<< HEAD:contact/config.sample.global.php
=======
// Email Settings 
$site['from_name'] = 'your name'; // from email name 
$site['from_email'] = 'you@email.net'; // from email address 

>>>>>>> 76e16e16646cd4397d7a72da0e1720cdf07ea3f2:config.php
// Just in case we need to relay to a different server,  
// provide an option to use external mail server. 
$site['smtp_mode'] = 'enabled'; // enabled or disabled 
$site['smtp_host'] = 'smtpout.secureserver.net'; 
$site['smtp_port'] = '80'; 
<<<<<<< HEAD:contact/config.sample.global.php
$site['smtp_username'] = 'mailagent@example.com';
$site['smtp_password'] = 'mypassword';
=======
$site['smtp_username'] = 'you@email.net';
$site['smtp_password'] = 'yourpassword';

$site['config_root'] = '/Users/bleddy/Sites'; // location of config.php for all sites
$site['config_library'] = $site['config_root'].'/lib'; // location of shared libraries
>>>>>>> 76e16e16646cd4397d7a72da0e1720cdf07ea3f2:config.php

// Email Settings 
$site['from_name'] = 'Your Name'; // from email name 
$site['from_email'] = 'you@example.com'; // from email address 

?> 
