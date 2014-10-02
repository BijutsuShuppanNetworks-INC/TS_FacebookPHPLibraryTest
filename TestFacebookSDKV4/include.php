<?php

session_start();

require_once("./facebook-php-sdk-v4/vendor/autoload.php");

use Facebook\FacebookSession;


//SNS APP KEY
$appKey = '626502487418443';
//SNS APP SECRET
$appSecret = 'aeca2557fd1eabb2a1f336a1aee7213b';

FacebookSession::setDefaultApplication($appKey, $appSecret);
