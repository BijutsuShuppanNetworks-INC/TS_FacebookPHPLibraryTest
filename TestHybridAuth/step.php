<?php
//共通処理読み込み
require_once ('./include.php');



if( !isset($_SESSION) ) {
  session_start();
}
if (!empty($_SERVER["HTTP_REFERER"])) {

	$_SESSION['facebook_url'] = $_SERVER["HTTP_REFERER"];

}

var_dump($_SESSION['facebook_url']);


// 認証の実行（未認証の場合はここでリダイレクト、認証済みの場合はスルー）
$facebook = $auth->authenticate("facebook"); 

if (!empty($_SESSION['facebook_url'])) {
    $facebook->logout();
	header('Location: ' . $_SESSION['facebook_url']);

}

?>