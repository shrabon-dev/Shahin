<?php 
session_start();
require_once "../includes/db.php";

$degree =$_POST['degree'];
$university =$_POST['university'];
$year =$_POST['year'];
$category =$_POST['category'];
$skill_status =$_POST['skill_status'];
$id = $_SESSION['skill_id'];

if(!empty($degree)){
   $_SESSION['degree'] = $degree;
}
if(!empty($university)){
    $_SESSION['university'] = $university;
 
 }
 if(!empty($year)){
     $_SESSION['year'] = $year;
  
  }
  if(!empty($category)){
     $_SESSION['category'] = $category;
  
  }
  
  
  
  
  if(empty($degree) || empty($university) || empty($year) || empty($category) ){
     header('location: ../pages/skill_section.php');

  }else{
    $valid_degree = htmlspecialchars($degree);
    $valid_university= htmlspecialchars($university);
    $valid_year = htmlspecialchars($year);
    $valid_category = htmlspecialchars($category);

$update_query = "UPDATE skills SET degree='$degree',university='$university',year='$year',category='$category',skill_status='$skill_status' WHERE id=$id";
mysqli_query($db_connect,$update_query);

$_SESSION['skill_message'] = "Updated your skill information";

    header('location: ../pages/resume_list.php');


  }


?>