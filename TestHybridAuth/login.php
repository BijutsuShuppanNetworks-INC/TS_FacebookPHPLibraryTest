<?php
//ログイン

//共通処理読み込み
require_once ('./include.php');

// 認証の実行（未認証の場合はここでリダイレクト、認証済みの場合はスルー）
$facebook = $auth->authenticate("facebook"); 

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
} catch (Exception $e) {
  var_dump($e);
}
?>
</textarea>

</body>
</html>