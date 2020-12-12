<?php 
		$name = $_POST['name'];
		$visitor_email = $_POST['email'];
		$message = $_POST['message'];

		$email_from = 'msqvidad@gmail.com';

		$email_subject = 'New Form Query!';

		$email_body = "Visitor Name : $name.\n".
						"Visitor Email : $visitor_email.\n".
							"Visitor Message : $message.\n";


	 $to ="qvidad@gmail.com";

	 $headers = "Form : $email_from \r\n";
	 $headers .= "Reply-To : $visitor_email \r\n";

	$run = mail($to,$email_subject,$email_body,$headers);

    if($run)
	 	echo "<script>alert('Form Submitted!');location.href='Contact.html';</script>";

 ?>
