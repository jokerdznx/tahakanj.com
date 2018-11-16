<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

if (isset($_POST['endMessageButton'])) {
$name = strip_tags(htmlspecialchars($_POST['name'];
$email = strip_tags(htmlspecialchars($_POST['email'];
$phone = strip_tags(htmlspecialchars($_POST['phone'];
$message = strip_tags(htmlspecialchars($_POST['message'];
}

// Create the email and send the message
$to = "contact@tahakanj.com"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "Website Contact:  $name";
$body = "You have received a new message.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: $name\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email";

if(!mail($to, $subject, $body, $headers))
  http_response_code(500);
?>
