<?php
require_once "../includes/db.php";
session_start();

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$user_select_query = "SELECT * FROM user";
$user_mysqli_query = mysqli_query($db_connect,$user_select_query);
$db_user_info = mysqli_fetch_assoc($user_mysqli_query);


$db_user_email = $db_user_info['user_email'];
$db_user_password = $db_user_info['user_password'];

// print_r($db_user_email);
// print_r($db_user_password);

if($user_email && $user_password){
    if($user_email==$db_user_email && $user_password==$db_user_password){
        header("location: ../pages/admin.php");
        $_SESSION['access'] = "true";

    }else{
        header("location: ../../login.php");
    }
}else{
    header("location: ../../login.php");
}








?>