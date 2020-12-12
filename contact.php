<?php
	$name = $_Post['name'];
	$visitorEmail = $_Post['email'];
	$message = $_Post['message'];
	
	$email_from = 'qvidad@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "User Name: $name.\n".
			"User Email: $visitorEmail.\n".
			"User Message: $message.\n";

	$to = "qvidad@gmail.com";

	$headers = "From: $email_from \r\n";
	$headers .= "Reply to: $visitorEmail \r\n";

	mail($to,$email_subject,$email_body,$headers);
	header("Location: Contact.html");
?>