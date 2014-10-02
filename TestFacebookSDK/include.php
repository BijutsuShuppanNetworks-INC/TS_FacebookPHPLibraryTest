<?php
require_once("./facebook-php-sdk/src/facebook.php");


$config = array(
    'appId' => '1466044846952003',
    'secret' => '83984e85d5b52df49647a3d6c2cfe5c3',
    'fileUpload' => true, // optional
    'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
);

$config = array(
    'appId' => '767742546603593',
    'secret' => '111212e9784c3e7019ccf1e1ebf61667',
    'fileUpload' => true, // optional
    'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
);


$facebook = new Facebook($config);