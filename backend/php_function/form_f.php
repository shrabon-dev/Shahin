<?php
session_start();
require_once "../includes/db.php";

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$message_subject = $_POST['message_subject'];
$message = $_POST['message'];

$error = false;

if(empty($user_name)){
   $_SESSION['user_name'] = 'error';
   $error = true;
}
if(empty($user_email)){
    $_SESSION['user_email'] = 'error';
   $error = true;

 }else{
   if(!filter_var($user_email,FILTER_VALIDATE_EMAIL)){
      $_SESSION['user_email'] = 'error';
      $error = true;

   }
 }

 if(empty($message_subject)){
    $_SESSION['message_subject'] = 'error';
   $error = true;

 }else{
  
 }
 if(empty($message)){
    $_SESSION['message'] = 'error';
    $error = true;

 }else{

 }


 if($error == true){
    header('location: ../../index.php');
 }else{
    
   $user_name = htmlspecialchars($user_name);
   $message_subject = htmlspecialchars($message_subject);
   $message = htmlspecialchars($message);


  $insert_query = "INSERT INTO user_messages (user_name,user_email,message_subject,message) VALUES('$user_name','$user_email','$message_subject','$message')";
  mysqli_query($db_connect,$insert_query);
  mysqli_query($db_connect,"SET CHARACTER SET 'utf8'");
  mysqli_query($db_connect,"SET SESSION collation_connection ='utf8_unicode_ci'");

 

$messageBody = "  ";



$to_email = "shahinurislam.sm@gmail.com";
$subject =  $message_subject;
$body =  $message;
$headers = "From:".$user_email;

// if () {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }

mail($to_email, $subject, $body, $headers);


  $_SESSION['user_message'] = 'Your message is received and very soon we will reply to you';
 
  header('location: ../../index.php');



 }

?>

