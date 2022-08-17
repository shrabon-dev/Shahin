<?php
session_start();

require_once "../includes/db.php";

$id = $_SESSION['blog_id'];


$select= "SELECT * FROM blogs WHERE id=$id";
$old_img = mysqli_fetch_assoc(mysqli_query($db_connect,$select))['blog_image_name'];

$blog_title=$_POST['blog_title'];
$blog_paragraph=$_POST['blog_paragraph'];
$entry_date=$_POST['entry_date'];
$blogs_status=$_POST['blogs_status'];



$isTrue=false;

if(empty($blog_title)){
    $_SESSION['blog_title'] = "Please, give a blog_title of client";
    header("location: ../pages/blog_section_edit.php");

}else{

    $isTrue =true;
}

if(empty($blog_paragraph)){
    $_SESSION['blog_paragrph'] = "Please, give a blog_paragrph of client";
    header("location: ../pages/blog_section_edit.php");

}else{
    $isTrue=true;
}


if(empty($entry_date)){
    $_SESSION['entry_date'] = "Please, give a date of entry";
    header("location: ../pages/blog_section_edit.php");

}else{
    $isTrue=true;

}


if($isTrue == true){

    $blog_title = htmlspecialchars($blog_title);
    $blog_paragraph = htmlspecialchars($blog_paragraph);

    if($_FILES['blog_image_name']['name']){
            $image_blog_title=$_FILES['blog_image_name']['name'];
            $image_type=$_FILES['blog_image_name']['type'];
            $image_tmp_blog_title=$_FILES['blog_image_name']['tmp_name'];
            $image_size=$_FILES['blog_image_name']['size'];
        
            $image_blog_title_explode = explode('.',$image_blog_title);
            $time = time().'_'.rand(1,9999).'_'.date('d-m-Y');
            $blog_image_name ="blog_".$time.'.'.end($image_blog_title_explode);
            $upload_location = "../uploads/blogs_image/".$blog_image_name;
            unlink("../uploads/blogs_image/".$old_img);
            move_uploaded_file($image_tmp_blog_title,$upload_location);
        
            $insert_query = "UPDATE blogs SET blog_image_name='$blog_image_name' WHERE id=$id";
            mysqli_query($db_connect,$insert_query);

        
        }


    $insert_query = "UPDATE blogs SET blog_title='$blog_title',blog_paragraph='$blog_paragraph',entry_date='$entry_date', blogs_status='$blogs_status' WHERE id=$id";
    mysqli_query($db_connect,$insert_query);

    $_SESSION['update_blog_status']="Updated your blog's information";
    header("location: ../pages/blog_list.php");

}






?>