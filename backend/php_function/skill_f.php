<?php 
session_start();
require_once "../includes/db.php";

$degree =$_POST['degree'];
$university =$_POST['university'];
$year =$_POST['year'];
$category =$_POST['category'];

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

$insert_query = "INSERT INTO skills (degree,university,year,category) VALUES('$degree','$university','$year','$category')";
mysqli_query($db_connect,$insert_query);

$_SESSION['skill_message'] = "Added your skill";

    header('location: ../pages/skill_section.php');


  }


?>