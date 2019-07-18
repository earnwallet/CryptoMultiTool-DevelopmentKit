<?php
//Need to:
// - Be readable
// - Not obfuscated
// - Tested
header('Access-Control-Allow-Methods: GET, REQUEST, OPTIONS');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, text/javscript');
?>
alert("Your code is working!");