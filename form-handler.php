<?php
$name = $_POST['name'];
$visitor-email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'From: ' . $visitor-email;
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n" .
              "User Email: $visitor-email.\n" .
              "Subject: $subject.\n" .
              "User Message: $message.\n";
$to = 'zakariagarat7798@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor-email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html?mailsend");
?>