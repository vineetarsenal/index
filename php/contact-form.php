<?php
    $name=$_POST['name'];
	$visitor_email=$_POST['email']
	$message=$_POST['message'];
	
	$email_from='kratoschauhan@yahoo.com';
	
	$email_subject='New form submission';
	
	$_email_body="User name: $name.\n".
	             "User email: $visitor_email.\n".
				 "user message: $message.\n";
				 
				 
	$to="vineetchaudhary87@gmail.com";
    $headers="form: $email_from\r\n";	
	$headers.="Reply-To: $visitor_email\r\n";
	mail($to,$email_subject,$email_body,$headers);
	header("location: vineet.html");
	
?>