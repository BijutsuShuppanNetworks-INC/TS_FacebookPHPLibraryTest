<?php
//トップ

//共通処理読み込み
require_once ('./include.php');

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>FacebookPHPLibraryTest 「FacebookSDK V4」</title>
</head>
<body>
<h1>FacebookPHPLibraryTest 「FacebookSDK V4」</h1>

<h2>sample</h2>

<a href="login.php">ログイン</a><br />
<a href="logout.php">ログアウト</a><br />
<a href="./postImageWithToken.php">トークン入力画像付き投稿</a><br />
<a href="./postToFriend.php">友達のフィードに投稿</a><br />

<h2>doc</h2>
<li><a href="https://developers.facebook.com/docs/php/gettingstarted/4.0.0" target="_blank">FacebookSDK V4</a></li>

</body>
</html>