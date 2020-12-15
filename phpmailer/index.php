<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "qvidad@gmail.com";
//Set gmail password
	$mail->Password = "12passWORD12";
//Email subject
	$mail->Subject = "New Submission from Hidden Wonders";
//Set sender email
	$mail->setFrom('no-reply@google.com');
//Enable HTML
	$mail->isHTML(true);
//Email body
    $mail->Body = "<h1>Visitor: $name</h1></br><h2>Email: $email</h2></br><h2>$name's Message: $message</h2>";
//Add recipient
	$mail->addAddress('qvidad@gmail.com');
//Finally send email
    $mail->send();
//Closing smtp connection
    $mail->smtpClose();
	$mail->smtpClose();
    
    header("Location: Contact.html");
    exit();
?>
