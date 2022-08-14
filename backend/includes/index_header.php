

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sultan</title>

    <!-- ================ Google font link start ================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet"> 
    <!-- ================ Google font link end ================== -->

    <!-- ================ css all link start ================== -->
    <link rel="stylesheet" href="./frontend/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css" integrity="sha512-p++g4gkFY8DBqLItjIfuKJPFvTPqcg2FzOns2BNaltwoCOrXMqRIOqgWqWEvuqsj/3aVdgoEo2Y7X6SomTfUPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./frontend/css/aos.css">
    <link rel="stylesheet" href="./frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="./frontend/css/common.css">
    <link rel="stylesheet" href="./frontend/css/slick.css">
    <link rel="stylesheet" href="./frontend/css/venobox.min.css">
    <link rel="stylesheet" href="./frontend/css/style.css">
    <link rel="stylesheet" href="./frontend/css/responsive.css">
    <!-- ================ css all link end ================== -->
</head>
<body>
<!-- ------------------------======== php query start ===============------------------- -->

<?php

require_once "db.php";
mysqli_query($db_connect,"SET CHARACTER SET 'utf8'");
mysqli_query($db_connect,"SET SESSION collation_connection ='utf8_unicode_ci'");

$banner_select_img_query ="SELECT * From banner_imgs";
$banner_images_query =  mysqli_query($db_connect,$banner_select_img_query);

$select_service_query = "SELECT * FROM services WHERE service_status='active' and service_delete='no'";
$mysqli_services_query = mysqli_query($db_connect,$select_service_query);

$select_education_skill_query = "SELECT * FROM skills where category='education' and skill_status='active' ";
$mysqli_education_skill_query = mysqli_query($db_connect,$select_education_skill_query);

$select_experience_skill_query = "SELECT * FROM skills where category='experience' and skill_status='active' ";
$mysqli_experience_skill_query = mysqli_query($db_connect,$select_experience_skill_query);

$select_experience_testimonial_query = "SELECT * FROM testimonial_infos where testmonial_status='active' ";
$mysqli_experience_testimonial_query = mysqli_query($db_connect,$select_experience_testimonial_query);

$select_blogs_query = "SELECT * FROM blogs where blogs_status='active' limit 1";
$mysqli_blogs_query = mysqli_query($db_connect,$select_blogs_query);
$select_recent_blogs_query = "SELECT * FROM blogs where blogs_status='active'";
$mysqli_recent_blogs_query = mysqli_query($db_connect,$select_recent_blogs_query);
?>

<!-- GENAREL SETTINGS ABOUT OWNER START -->

<?php

$owner_name_query = "SELECT settings_value FROM settings WHERE settings_name='owner_name'";
$owner_name =  mysqli_fetch_assoc(mysqli_query($db_connect,$owner_name_query));

// ==============

$owner_profession_query = "SELECT settings_value FROM settings WHERE settings_name='owner_profession'";
$owner_profession =  mysqli_fetch_assoc(mysqli_query($db_connect,$owner_profession_query));

// ==============

$owner_image_query = "SELECT settings_value FROM settings WHERE settings_name='owner_photo'";
$owner_image=  mysqli_fetch_assoc(mysqli_query($db_connect,$owner_image_query));

// ==============

$owner_bio_query = "SELECT settings_value FROM settings WHERE settings_name='owner_bio'";
$owner_bio =  mysqli_fetch_assoc(mysqli_query($db_connect,$owner_bio_query));

// ==============

$owner_experience_query = "SELECT settings_value FROM settings WHERE settings_name='experience'";
$owner_experience =  mysqli_fetch_assoc(mysqli_query($db_connect,$owner_experience_query));

// ==============

$owner_project_done_query = "SELECT settings_value FROM settings WHERE settings_name='project_done'";
$owner_project_done =  mysqli_fetch_assoc(mysqli_query($db_connect,$owner_project_done_query));

// ==============

$owner_location_query = "SELECT settings_value FROM settings WHERE settings_name='location'";
$owner_location =  mysqli_fetch_assoc(mysqli_query($db_connect,$owner_location_query));

// ==============

$owner_location_more_query = "SELECT settings_value FROM settings WHERE settings_name='location_more'";
$owner_location_more =  mysqli_fetch_assoc(mysqli_query($db_connect,$owner_location_more_query));

// ==============

$owner_email_query = "SELECT settings_value FROM settings WHERE settings_name='owner_email'";
$owner_email =  mysqli_fetch_assoc(mysqli_query($db_connect,$owner_email_query));

// ==============

$owner_contact_number_query = "SELECT settings_value FROM settings WHERE settings_name='contact_number'";
$owner_contact_number =  mysqli_fetch_assoc(mysqli_query($db_connect,$owner_contact_number_query));


?>


<!-- GENAREL SETTINGS ABOUT OWNER END -->



<!-- ------------------------======== php query end ===============------------------- -->

    <!-- message option start-->
     <div class="message">
         <a href="#"><img src="./frontend/images/font/001-speech-bubble.png" alt="font/001-speech-bubble.png"></a>
     </div>
    <!-- message option end -->
    
   <!-- ================  navbar section start  ==================== -->
   <nav class="navbar navbar-expand-lg menu" data-aos="fade-down" data-aos-duration="1500">
    <div class="container">
      <a class="navbar-brand" href="#">Sultan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><img src="images/font/001-menu.png" alt="font/001-menu.png"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">My works</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dowload Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact me</a>
          </li>
        </ul>
        <div class="hire__me ms-auto">
            <a href="#">Hire me</a>
        </div>
      </div>
    </div>
  </nav>
   <!-- ================  navbar section end  ==================== -->