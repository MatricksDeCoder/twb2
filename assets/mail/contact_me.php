<?php
// check if fields passed are empty
if(empty($_POST['name'])        ||
empty($_POST['email'])      ||
empty($_POST['message'])    || 
!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
  echo "No arguments Provided!";
  return false;
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone   = $_POST['phone'];

// Create the email and send the message
$to = "projectsagaia@gmail.com"; // Add your email address in between the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "TWB Tree Felling Contact Form:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: projectsagaia@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email";


$mail_succeeded = mail($to, $subject, $body, $headers);
return $mail_succeeded; 
     
?>