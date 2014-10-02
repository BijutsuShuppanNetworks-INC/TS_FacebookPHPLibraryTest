<?php
//ログアウト

//共通処理読み込み
require_once ('./include.php');


//Twitter認証ステータス確認
if ($auth->isConnectedWith("facebook")) {
    
    // 認証の実行（未認証の場合はここでリダイレクト、認証済みの場合はスルー）
    $facebook = $auth->authenticate("facebook"); 
    
    //ログアウト
    $facebook->logout();

    $result = 'ログアウトしました';

} else {
    $result = 'ログインしていません';
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>FacebookPHPLibraryTest TestHybridAuth</title>
</head>
<body>
<h1><?php echo $result ?></h1>

<a href="./index.php">TOP</a><br />

</body>
</html>