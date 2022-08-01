<?php

require_once "../includes/db.php";

print_r($_FILES);
if(isset($_FILES['banner_img']['name'])){
$file_name = $_FILES['banner_img']['name'];
$file_type = $_FILES['banner_img']['type'];
$file_tmp_name = $_FILES['banner_img']['tmp_name'];
$file_size = $_FILES['banner_img']['size'];

$file_name_explode = explode('.',$file_name);
$id = time().'_'.rand(1,9999).'_'.date('d-m-Y');
$new_name_file ="Banner_".$id.'.'.end($file_name_explode);
$upload_location = "../uploads/banner_img/".$new_name_file;


if($file_name){
    move_uploaded_file($file_tmp_name,$upload_location);

    $file_insert = "INSERT INTO  banner_imgs(banner) VALUES('$new_name_file')";
    mysqli_query($db_connect,$file_insert);
    header('location: ../pages/banner_section.php');

}else{
    header('location: ../pages/banner_section.php');
}


}



?>