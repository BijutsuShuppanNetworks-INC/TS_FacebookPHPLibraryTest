<?php
//ログアウト

//共通処理読み込み
require_once ('./include.php');


//Twitter認証ステータス確認
if (!$facebook->getUser()) {

    $result = 'ログインしていません';

} else {

  
  
    $logoutUrl = $facebook->getLogoutUrl();

    //ログアウト
    $facebook->destroySession();

    header("Location: ".$logoutUrl);
        
    $result = 'ログアウトしました';
    
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