<?php
//投稿

//共通処理読み込み
require_once ('./include.php');


if (!empty($_FILES["file"]["tmp_name"]) &&  !empty($_POST["access_token"])) {

    $token = $_POST["access_token"];
    $facebook->setAccessToken($token);

    //ウォールに投稿するためにウォールのアルバムIDを取得
//     $albumResponse = $facebook->api()->api("/me/albums");
    $albumResponse = $facebook->api("/me/albums");
    
    
    var_dump($albumResponse);

	foreach ($albumResponse['data'] as $data) {
		if ($data['type'] == 'wall') {
			$wallAlbumId = $data['id'];
			break;
		}
	}

	//$image =   file_get_contents($_FILES["file"]["tmp_name"]);
	$image =   $_FILES["file"]["tmp_name"];
	
    $message = "";

	$attachment = array(
			'message' => $message,
	//		'source' => '@../img/test.jpg',
			'source' => '@' .$image,
	);
// 	$facebook->api()->setFileUploadSupport(true);

// 	$postResult = $facebook->api()->api('/' . $wallAlbumId . '/photos', 'POST', $attachment);  
	$postResult = $facebook->api('/' . $wallAlbumId . '/photos', 'POST', $attachment);  
	
  
	
	
	
  
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
<h1>トークン入力画像付き投稿</h1>
<a href="./index.php">TOP</a><br />
<br />
投稿フォーム<br />
<form action="./postImageWithToken.php" method="POST" enctype="multipart/form-data">
access_token:<input type="text" name="access_token"><br />
<textarea rows="10" cols="80" name="text"></textarea><br />
<input type="file" name="file"><br />
　※3MBまで<br />
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