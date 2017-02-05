<?php
	require("postmark.php");
	
	$postmark = new Postmark("","","optional-reply-to-address");
	
	if($postmark->to("")->subject("Email Subject")->html_message("<p style='color: red'>Test mail</p>")->send()){
		echo "Message sent";
	}


?>
