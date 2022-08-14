<?php
session_start();

require_once "../includes/db.php";

// print_r($_POST);
// die();
$blog_title=$_POST['blog_title'];
$blog_paragraph=$_POST['blog_paragrph'];
$entry_date=$_POST['entry_date'];

$image_blog_title=$_FILES['blog_image']['name'];
$image_type=$_FILES['blog_image']['type'];
$image_tmp_blog_title=$_FILES['blog_image']['tmp_name'];
$image_size=$_FILES['blog_image']['size'];




$isTrue=false;

if(empty($blog_title)){
    $_SESSION['blog_title'] = "Please, give a blog_title of client";
    header("location: ../pages/blog_section.php");

}else{
    $_SESSION['old_blog_title'] =$blog_title;
    $isTrue =false;
}

if(empty($blog_paragrph)){
    $_SESSION['blog_paragrph'] = "Please, give a blog_paragrph of client";
    header("location: ../pages/blog_section.php");

}else{
    $_SESSION['old_blog_paragrph'] = $blog_paragrph;
    $isTrue=true;
}


if(empty($entry_date)){
    $_SESSION['entry_date'] = "Please, give a date of entry";
    header("location: ../pages/blog_section.php");

}else{
    $_SESSION['old_entry_date'] = $entry_date;
    $isTrue=true;

}
if(empty($image_blog_title)){
    $_SESSION['image_blog_title'] = "Please, give a photo of client";
    header("location: ../pages/blog_section.php");

}else{
    $_SESSION['old_image_blog_title'] = $image_blog_title;
    $isTrue=true;

}
 

if($isTrue == true){

    $blog_title = htmlspecialchars($blog_title);
    $blog_paragraph = htmlspecialchars($blog_paragraph);
   

    $image_blog_title_explode = explode('.',$image_blog_title);
    $id = time().'_'.rand(1,9999).'_'.date('d-m-Y');
    $blog_image_name ="blog_".$id.'.'.end($image_blog_title_explode);
    $upload_location = "../uploads/blogs_image/".$blog_image_name;
    move_uploaded_file($image_tmp_blog_title,$upload_location);




    $insert_query = "INSERT INTO  blogs(blog_title,blog_paragraph,entry_date,blog_image_name) VALUES('$blog_title','$blog_paragraph','$entry_date','$blog_image_name')";
    mysqli_query($db_connect,$insert_query);
    $_SESSION['testi_status']="You success fully added your new Blog's";
    header("location: ../pages/blog_section.php");

}


?>