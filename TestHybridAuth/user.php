<?php
//ユーザ情報取得

//共通処理読み込み
require_once ('./include.php');

// 認証の実行（未認証の場合はここでリダイレクトされ、認証済みの場合はスルーされます）
$facebook = $auth->authenticate("facebook"); 


try {
  //ユーザ情報取得
  //$userResponse = $facebook->getUserProfile();
  $userResponse = $facebook->api()->api('/me');
  
} catch (Exception $e) {
  var_dump('error catch');
  $userResponse = $e;
//  var_dump($e);
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>FacebookPHPLibraryTest TestHybridAuth</title>
</head>
<body>
<h1>ユーザ情報取得</h1>
<a href="./index.php">TOP</a><br />
<br />
<textarea rows="40" cols="100">
<?php var_dump($userResponse); ?>
</textarea>

</body>
</html>