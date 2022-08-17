<?php

$to_email = "shahinislam.sm@gmail.com";
$subject = "";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: mdshrabon.dev@gmail.com";

// if () {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }

mail($to_email, $subject, $body, $headers);