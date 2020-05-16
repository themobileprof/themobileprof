<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";



$mail->SMTPDebug  = 0;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.zoho.com";
$mail->Username   = "info@themobileprof.com";
$mail->Password   = "T@mmy654";


// Check for empty fields
if (
	empty($_POST['name'])      ||
	empty($_POST['email'])     ||
	empty($_POST['phone'])     ||
	empty($_POST['message'])   ||
	!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
) {
	echo "Kindly Fill all the form fields!";
	return false;
	exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));


$mail->IsHTML(true);
$mail->AddAddress("themobileprof.com@gmail.com", "TheMobileProf");
$mail->SetFrom("themobileprof.com@gmail.com", "TheMobileProf Website");
$mail->AddReplyTo("$email_address", "$name");
$mail->Subject = "Website Contact Form:  $name";
$content = "You have received a new message from your website contact form.\n\n" . "Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";


$mail->MsgHTML($content);
if (!$mail->Send()) {
	echo "Error while sending Email.";
	var_dump($mail);
} else {
	//echo "Email sent successfully";
}



//echo "Thank you for submitting our contact form. We will reach out to you soon";

header("Location: ../thank.html");
return true;
