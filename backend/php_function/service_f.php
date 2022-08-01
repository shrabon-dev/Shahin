<?php
session_start();
require_once "../includes/db.php";

print_r($_POST);

$service = $_POST['service'];
$short_paragraph = $_POST['short_paragraph'];
$service_icon = $_POST['service_icon'];

echo empty($service_icon);

if(empty($service) || empty($short_paragraph) || empty($service_icon)){
  header('location: ../pages/service_section.php');
  $_SESSION['error_message'] = "Please, fill the all box";
}else{
      
  $insert_value = "INSERT INTO  services (service,short_paragraph,service_icon) VALUES('$service','$short_paragraph','$service_icon')";
   mysqli_query($db_connect,$insert_value);
  $_SESSION['add_message'] = "Added this service";
  header('location: ../pages/service_section.php');



}









?>