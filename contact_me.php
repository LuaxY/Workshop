<?php

if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = 'hello@skillsconnect.fr';
$email_subject = "Skills.Connect message:  $name";
$email_body = "Nom: $name\n\nEmail: $email_address\n\nTel: $phone\n\nMessage:\n$message";
$headers = "From: hello@skillsconnect.fr\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
