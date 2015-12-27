<?php
// display the EXAMPLE.md file at web root
# Get Markdown class
use \Michelf\Markdown;

echo Markdown::defaultTransform(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/README.md'));


?>