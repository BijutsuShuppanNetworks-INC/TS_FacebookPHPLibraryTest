<?php
//ログイン

//共通処理読み込み
require_once ('./include.php');

$loginConfig = array(
	'scope' => 'user_photos, publish_actions',
);

$loginUrl = $facebook->getLoginUrl($loginConfig);

if (!$facebook->getUser()) {
  header('Location:' . $loginUrl);
  exit;
}

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