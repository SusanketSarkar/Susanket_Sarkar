<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'accfordrive01@gmail.com';
$email_subject = 'Email from your portfolio'
$email_body=  'User Name: $name.\n'.
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n".
$to = 'andydroy89@gmail.com';
$hearders = "From: $email_from \r\n";
$hearders .= "Reply-to: $visitor_email \r\n"

mail($to, $email_subject, $email_body, $hearders)
header("Location: contact.html");

?>