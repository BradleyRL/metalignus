<?php
	//declare our assets 
	
	$name = stripcslashes($_POST['name']);
	$emailAddr = stripcslashes($_POST['email']);
	$comment = stripcslashes($_POST['message']);
	$subject = stripcslashes($_POST['subject']);	
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
		mail('admin@metalignus.com', $subject, $contactMessage, "From: $emailAddr");
		echo('success'); //return success callback
	}
	
	else {
	echo ('Please fill all the information'); }
?>
