<?php
//トップ

//共通処理読み込み
require_once ('./include.php');


  
  
//   $token = 'CAAU1XCpTzkMBAC67KSygQeqiuymK2KYJZBLpQyFrsOEkY3QOdZAMM5phYkiQxvBdezsVZCUvcoTrVqvl3yFBZB8cHwgYnZA89vGR5matVkN0oOzuTQPHtV0mvVX9maLqMn3SsxtSVh8N4uiINPvONB3BqZAAT138cApAll8wUoiN1kXPn9buEn';
//   $facebook->setAccessToken($token);
  
  $loginUrl = $facebook->getLoginUrl();
  $logoutUrl = $facebook->getLogoutUrl();

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>FacebookPHPLibraryTest 「FacebookSDK」</title>
</head>
<body>
<h1>FacebookPHPLibraryTest 「FacebookSDK」</h1>

<h2>sample</h2>

<a href="login.php">ログイン</a><br />
<a href="logout.php">ログアウト</a><br />
<a href="./postImageWithToken.php">トークン入力画像付き投稿</a><br />
<a href="./postToFriend.php">友達のフィードに投稿</a><br />

<h2>doc</h2>
<li><a href="https://developers.facebook.com/docs/php/gettingstarted" target="_blank">FacebookSDK</a></li>

</body>
</html>