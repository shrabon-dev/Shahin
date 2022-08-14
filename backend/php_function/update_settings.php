<?php

require_once "../includes/db.php";

session_start();


$owner_name = $_POST['owner_name'];
$owner_profession = $_POST['owner_profession'];
$owner_bio = $_POST['owner_bio'];
$experience = $_POST['experience'];
$project_done = $_POST['project_done'];
$location = $_POST['location'];
$location_more = $_POST['location_more'];
$contact_number = $_POST['contact_number'];
$owner_email = $_POST['owner_email'];


if($owner_name && $owner_profession && $owner_bio && $experience && $project_done
 && $location && $location_more && $contact_number && $owner_email){


    foreach($_POST as $settings_name => $settings_value){
        if($settings_value == 'owner_photo'){
           continue;
        }else{   
            $update = "UPDATE settings SET settings_value='$settings_value' WHERE settings_name='$settings_name'";
            mysqli_query($db_connect,$update);
            $_SESSION['update_settings'] = "Updated your general information";
            header('location: ../pages/settings.php');

        }
            
    }



}



if(isset($_FILES['owner_photo']['name'])){


$file_name = $_FILES['owner_photo']['name'];
$file_type = $_FILES['owner_photo']['type'];
$file_tmp_name = $_FILES['owner_photo']['tmp_name'];
$file_size = $_FILES['owner_photo']['size'];

$file_name_explode = explode('.',$file_name);
$id = time().'_'.rand(1,9999).'_'.date('d-m-Y');
$new_name_file ="Banner_".$id.'.'.end($file_name_explode);
$upload_location = "../uploads/banner_img/".$new_name_file;


if($file_name){
    move_uploaded_file($file_tmp_name,$upload_location);

    $update = "UPDATE settings SET settings_value='$new_name_file' WHERE settings_name='owner_photo'";
    mysqli_query($db_connect,$update);
    header('location: ../pages/settings.php');
    $_SESSION['update_settings'] = "Updated your general information";

}else{
    header('location: ../pages/settings.php');
}


}



?>