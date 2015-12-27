<?php

$pageTitle = 'NewPage';

## Add items to the header if needed
#initialize the vars
$extraCSS = '';
$extraHeaders = '';
$extraJS = '';

## now add content if needed
#$extraCSS = '<script type="text/javascript" src="page-specific.js" ></script>';
#$extraJS = '<link rel="stylesheet" href="page-specific.css" type="text/css" media="all" >';
#$extraHeaders = '<meta http-equiv="refresh" content="0; url=http://example.com/" />';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/base.php'); 


?>