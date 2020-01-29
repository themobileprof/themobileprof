<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function sendMail (){
    $to = 'themobileprof.com@gmail.com';
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone= test_input($_POST["phone"]);
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$phone.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        return 'Thank you for submitting your details. We will keep you updated about our Training videos.';
    }else{
        return 'Sending failed';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Send Mailer</title>
	<style>
	.main {
	  	margin: auto;
  		width: 90%;
		padding: 10px;
		font-size: 30px;
		font-family:Verdana, Tahoma;
	}
	</style>
</head>
<body>
	<div class="main">
<?php
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])){
	echo sendMail();
} else {
	echo "Kindly fill all fields";
}
?>
	</div>
</body>
</html>
