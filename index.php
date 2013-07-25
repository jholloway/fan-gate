<!DOCTYPE html>
<html>
	<head>
	
	<?php
	require 'facebook.php';
	
	$app_id = "283307295140379";
	$app_secret = "07a80b0d29cb043f3169632e36c51d64";
	$facebook = new Facebook(arrray(
	'appId' => $app_id,
	'secret' => $app_secret,
	'cookie' => true
	));
	
	$signed_request = $facebook->getSignedRequest ();
	$like_status = $signed_request["page"]["liked"];
	
	?>
	
		<title>FAN GATE TEST</title>
	
	</head>
	
	<body>
		
		<?php if ($like_status) { ?>
			
			LIKED
			
		<?php } else { ?>
				
			UNLIKED
				
		<?php } ?>
				
	</body>
			
</html>