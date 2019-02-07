<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['surname'])     ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['cf'])     ||
   empty($_POST['indirizzo'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$surname = strip_tags(htmlspecialchars($_POST['surname']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$cf = strip_tags(htmlspecialchars($_POST['cf']));
$indirizzo = strip_tags(htmlspecialchars($_POST['indirizzo']));
   
// Create the email and send the message
$to = 'alessandro.soave@alpafin.it'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "inviata da  $email";
$email_body = "richiesta inviata da.\n\n"."dettagli:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\cf:\n$cf";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;      
?>