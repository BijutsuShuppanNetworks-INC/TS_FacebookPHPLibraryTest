<?php
//ログイン

//共通処理読み込み
require_once ('./include.php');

use Facebook\FacebookRedirectLoginHelper;


// $loginConfig = array(
// 	'scope' => 'user_photos, publish_actions',
// );

// $loginUrl = $facebook->getLoginUrl($loginConfig);

// if (!$facebook->getUser()) {
//   header('Location:' . $loginUrl);
//   exit;
// }

$helper = new FacebookRedirectLoginHelper('http://e.localhost/TS_FacebookPHPLibraryTest/TestFacebookSDKV4/login.php');

$loginConfig = array(
	'scope' => 'user_photos, publish_actions',
);

// $loginUrl = $helper->getLoginUrl($loginConfig);
$loginUrl = $helper->getLoginUrl($loginConfig, 'v1.0');

var_dump($loginUrl);


// $helper = new FacebookRedirectLoginHelper();
// try {
//   $session = $helper->getSessionFromRedirect();
// } catch(FacebookRequestException $ex) {
//   // When Facebook returns an error
// } catch(\Exception $ex) {
//   // When validation fails or other local issues
// }
// if ($session) {
//   // Logged in
// }


?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>FacebookPHPLibraryTest TestHybridAuth</title>
</head>
<body>
<h1>Facebook認証済みです</h1>

<a href="./index.php">TOP</a><br />

<br />
<br />

アクセストークン<br />
<textarea rows="40" cols="100">
<?php
try {
  var_dump($facebook->getAccessToken());

  var_dump($facebook->api('me'));

  var_dump($facebook->api('me/friends'));
  
  
} catch (Exception $e) {
  var_dump($e);
}
?>
</textarea>

</body>
</html>