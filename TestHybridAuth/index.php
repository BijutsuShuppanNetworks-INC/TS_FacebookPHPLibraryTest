<?php
//トップ

//共通処理読み込み
require_once ('./include.php');

//Twitter認証ステータス
if ($auth->isConnectedWith("facebook")) {
    $status = '認証済み';
} else {
    $status = '未認証';
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>FacebookPHPLibraryTest 「HybridAuth」</title>
</head>
<body>
<h1>FacebookPHPLibraryTest 「HybridAuth」</h1>
<h3>Facebook<?php echo $status ?></h3>

<h2>sample</h2>

<a href="./login.php">ログイン</a><br />
<a href="./logout.php">ログアウト</a><br />
<a href="./user.php">ユーザ情報取得</a><br />
<a href="./post.php">投稿</a><br />
<a href="./postImage.php">画像付き投稿</a><br />
<a href="./step.php">認証中継</a><br />

<h2>doc</h2>
<li><a href="http://hybridauth.sourceforge.net/" target="_blank">HybridAuth</a></li>

</body>
</html>