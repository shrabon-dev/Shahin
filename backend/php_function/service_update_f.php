<?php
session_start();
require_once "../includes/db.php";




$id = $_SESSION['id'];


$service = $_POST['service'];
$short_paragraph = $_POST['short_paragraph'];
$service_icon = $_POST['service_icon'];
$service_status = $_POST['service_status'];

echo empty($service_icon);

if(empty($service) || empty($short_paragraph) || empty($service_icon)){
  header('location: ../pages/service_section.php');
  $_SESSION['error_message'] = "Please, fill the all box";
}else{
      
  $Update_value = "UPDATE services SET service='$service',short_paragraph='$short_paragraph',service_icon='$service_icon', service_status='$service_status' WHERE id='$id'";
   mysqli_query($db_connect,$Update_value);
  $_SESSION['Update_message'] = "Update this service";
  header('location: ../pages/services_list.php');



}









?>