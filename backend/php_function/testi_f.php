<?php
session_start();

require_once "../includes/db.php";

$name=$_POST['name'];
$occupation=$_POST['occupation'];
$cleint_say=$_POST['cleint_say'];
$entry_date=$_POST['entry_date'];

$image_name=$_FILES['cleint_photo']['name'];
$image_type=$_FILES['cleint_photo']['type'];
$image_tmp_name=$_FILES['cleint_photo']['tmp_name'];
$image_size=$_FILES['cleint_photo']['size'];

$isTrue=false;

if(empty($name)){
    $_SESSION['name'] = "Please, give a name of client";
    header("location: ../pages/testimonial_section.php");

}else{
    $_SESSION['old_name'] =$name;
    $isTrue =false;

}

if(empty($occupation)){
    $_SESSION['occupation'] = "Please, give a occupation of client";
    header("location: ../pages/testimonial_section.php");

}else{
    $_SESSION['old_occupation'] = $occupation;
    $isTrue=true;
}
if(empty($cleint_say)){
    $_SESSION['cleint_say'] = "Please, give a feedback of client";
    header("location: ../pages/testimonial_section.php");

}else{
    $_SESSION['old_cleint_say'] = $cleint_say;
    $isTrue=true;

}

if(empty($entry_date)){
    $_SESSION['entry_date'] = "Please, give a date of entry";
    header("location: ../pages/testimonial_section.php");

}else{
    $_SESSION['old_entry_date'] = $entry_date;
    $isTrue=true;

}
if(empty($image_name)){
    $_SESSION['image_name'] = "Please, give a photo of client";
    header("location: ../pages/testimonial_section.php");

}else{
    $_SESSION['old_image_name'] = $image_name;
    $isTrue=true;

}
 

if($isTrue == true){

    $name = htmlspecialchars($name);
    $occupation = htmlspecialchars($occupation);
    $cleint_say = htmlspecialchars($cleint_say);

    $image_name_explode = explode('.',$image_name);
    $id = time().'_'.rand(1,9999).'_'.date('d-m-Y');
    $new_name_file ="testi_".$id.'.'.end($image_name_explode);
    $upload_location = "../uploads/testimonial_img/".$new_name_file;
    move_uploaded_file($image_tmp_name,$upload_location);




    $insert_query = "INSERT INTO  testimonial_infos (name,occupation,client_say,entry_date,image_name) VALUES('$name','$occupation','$cleint_say','$entry_date','$new_name_file')";
    mysqli_query($db_connect,$insert_query);
    header("location: ../pages/testimonial_section.php");
    $_SESSION['testi_status']="You success fully added client feedback";

}


?>