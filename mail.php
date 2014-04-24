<?php
	require_once 'google/appengine/api/mail/Message.php';
	use google\appengine\api\mail\Message;
	//declare our assets 
	/*
	$name = stripcslashes($_POST['name']);
	$emailAddr = stripcslashes($_POST['email']);
	$comment = stripcslashes($_POST['message']);
	$subject = stripcslashes($_POST['subject']);	
	*/
	$name = "Brad";
	$emailAddr = "jd6978@gmail.com";
	$comment = "test";
	$subject = "test";	
    if (($name !="") and ($emailAddr !="") and ($comment !=""))
	{
	$contactMessage =  
		"Message:
		$comment 

		Name: $name
		E-mail: $emailAddr

                Sending IP:$_SERVER[REMOTE_ADDR]
                Sending Script: $_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]";
		//send the email 
		//mail('admin@metalignus.com', $subject, $contactMessage, "From: $emailAddr");
		$mail_options = [
			"sender" => $emailAddr,
			"to" => "admin@metalignus.com",
			"subject" => $subject,
			"textBody" => $contactMessage
		];

	try {
		$message = new Message($mail_options);
		$message->send();
		echo('success'); //return success callback
	} catch (InvalidArgumentException $e) {
		echo('invalid argument '+$e);
	}
		
	}
	
	else {
	echo ('Please fill all the information'); }
?>
