<?php
//投稿

//共通処理読み込み
require_once ('./include.php');


if (!empty($_POST["access_token"]) && !empty($_POST["text"])) {

    $token = $_POST["access_token"];
    $facebook->setAccessToken($token);
	
    $message = $_POST["text"];

	$attachment = array(
			'message' => $message,
	//		'source' => '@../img/test.jpg',
//			'source' => '@' .$image,
	);
// 	$facebook->api()->setFileUploadSupport(true);

// 	$postResult = $facebook->api()->api('/' . $wallAlbumId . '/photos', 'POST', $attachment);  
	$postResult = $facebook->api('/' . '100002571927571' . '/feed', 'POST', $attachment);  
	
    var_dump($postResult);
	
	
	
  
    //$image =   $_FILES["file"]["tmp_name"];

    //var_dump($image);

//     try {
//       //投稿
//       $url = $tmhOAuth->url("1.1/statuses/update_with_media");
      
//       $parameters = array(
//           'status' => $_POST["text"],
//           'media[]' => $image,
//       );
      
//       $postResponse  = $tmhOAuth->request("POST", $url , $parameters, true, true);
//       $response = $tmhOAuth->response;
      
//     } catch (Exception $e) {
//       $postResponse = $e;
//     }
    
  
}





?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>FacebookPHPLibraryTest 「FacebookSDK」</title>
</head>
<body>
<h1>友達のフィードに投稿</h1>
<a href="./index.php">TOP</a><br />
<br />
投稿フォーム<br />
<form action="./postToFriend.php" method="POST" enctype="multipart/form-data">
access_token:<input type="text" name="access_token"><br />
<textarea rows="10" cols="80" name="text"></textarea><br />
<br />
<input type="submit" value="投稿">
</form>
<br />
<br />

投稿結果<br />
<textarea rows="40" cols="100">
<?php
if (!empty($postResult)) {
  var_dump($postResult);

//   var_dump($response['response']);
  
}
?>
</textarea>

</body>
</html>