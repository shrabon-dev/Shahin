<?php  
session_start();
if(!isset($_SESSION['access'])){
   header('location: ../../login.php');
}


$current_page = explode('/',$_SERVER['PHP_SELF']);
$current_page = end($current_page);

require_once "../includes/db.php";

$owner_image_query = "SELECT settings_value FROM settings WHERE settings_name='owner_photo'";
$owner_image=  mysqli_fetch_assoc(mysqli_query($db_connect,$owner_image_query));

$owner_name_query = "SELECT settings_value FROM settings WHERE settings_name='owner_name'";
$owner_name =  mysqli_fetch_assoc(mysqli_query($db_connect,$owner_name_query));


// list query start

$services_list_query = "SELECT * FROM services WHERE service_delete='no'";
$service_lists = mysqli_query($db_connect,$services_list_query);

$skill_list_query = "SELECT * FROM skills WHERE skill_delete='no'";
$skill_lists = mysqli_query($db_connect,$skill_list_query);

$blog_list_query = "SELECT * FROM blogs WHERE blog_delete='no'";
$blog_lists = mysqli_query($db_connect,$blog_list_query);



















?>
<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>Dashboard - <?=(isset($current_page))? $title_current_page:'';?></title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css" integrity="sha512-p++g4gkFY8DBqLItjIfuKJPFvTPqcg2FzOns2BNaltwoCOrXMqRIOqgWqWEvuqsj/3aVdgoEo2Y7X6SomTfUPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../../assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="../../assets/css/morris.min.css">
    <link rel="stylesheet" href="../../assets/css/select2.min.css">
    <link rel="stylesheet" href="../../assets/css/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="../../assets/css/horizontal-timeline.min.css">
    <link rel="stylesheet" href="../../assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="../../assets/css/dropzone.min.css">
    <link rel="stylesheet" href="../../assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="../../assets/css/ion.rangeSlider.skinFlat.min.css">
    <link rel="stylesheet" href="../../assets/css/datatables.min.css">
    <link rel="stylesheet" href="../../assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/custome.css">

    <!-- Page Level Stylesheets -->
    
</head>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navbar Start -->
        <header class="navbar navbar-fixed">
            <!-- Navbar Header Start -->
            <div class="navbar--header">
                <!-- Logo Start -->
                <a href="../pages/admin.php" class="logo">
                    <img src="../../assets/img/logo.png" alt="">
                </a>
                <!-- Logo End -->

                <!-- Sidebar Toggle Button Start -->
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Sidebar Toggle Button End -->
            </div>
            <!-- Navbar Header End -->

            <!-- Sidebar Toggle Button Start -->
            <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                <i class="fa fa-bars"></i>
            </a>
            <!-- Sidebar Toggle Button End -->

        </header>
        <!-- Navbar End -->

        <!-- Sidebar Start -->
        <aside class="sidebar" data-trigger="scrollbar">
            <!-- Sidebar Profile Start -->
            <div class="sidebar--profile">
                <div  style="width: 120px !important; margin: 0 auto;">
                
                        <img style="width: 100px !important;height:100px !important;border-radius:50%;display:block" src="../uploads/banner_img/<?=$owner_image['settings_value']?>" alt="<?=$owner_image['settings_value']?>">
            
                </div>

                <div class="profile--name">
                    <a href="profile.html" class="btn-link"><?=$owner_name['settings_value']?></a>
                </div>

                <div class="profile--nav">
                    <ul class="nav">
 
                        <li class="nav-item">
                            <a href="../../index.php" target="_blank" class="nav-link" title="View site">
                                <i class="fas fa-eye"></i>
                            </a>
                        </li>
                   
                        <li class="nav-item">
                            <a href="../php_function/logout.php" class="nav-link" title="Logout">
                                <i class="fa fa-sign-out-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Profile End -->

            <!-- Sidebar Navigation Start -->
            <div class="sidebar--nav">
                <ul>
                    <li>
                        <ul>
                            <li class="active">
                                <a href="../pages/admin.php">
                                    <i class="fa fa-home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class=" is-dropdown">
                                <a href="#">
                                <i class="fas fa-list-ul"></i>
                                    <span>All List & Update</span>
                                </a>

                                <ul>
                                <li><a href="../pages/services_list.php">Services List</a></li>
                                <li><a href="../pages/resume_list.php">Resume List</a></li>
                                <li><a href="../pages/blog_list.php">Blog List</a></li>
                                <li><a href="../pages/testimonial_list.php">Testimonial List</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Edit Sections</a>

                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-th"></i>
                                    <span>customize Section</span>
                                </a>

                                <ul>
                                    <li><a href="../pages/service_section.php">Services</a></li>
                                    <li><a href="../pages/skill_section.php">Skill</a></li>
                                    <li><a href="../pages/about_section.php">About</a></li>
                                    <li><a href="../pages/testimonial_section.php">Testimonial</a></li>
                                    <li><a href="../pages/blog_section.php">Blog's</a></li>
                                    <li><a href="../pages/settings.php">Settings</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../pages/gallery.php">
                                <i class="fas fa-images"></i>
                                    <span>Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href="../pages/inbox.php">
                                <i class="fas fa-comment"></i>
                                    <span>Message</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Sidebar Navigation End -->

            <!-- Sidebar Widgets Start -->
            <div class="sidebar--widgets">
                <div class="widget">
                    <h3 class="h6 widget--title">Information Summary</h3>

                    <!-- Summary Widget Start -->
                    <div class="summary--widget">
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#2bb3c0">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                            <p class="summary--title">Daily Traffic</p>
                            <p class="summary--stats">307.512</p>
                        </div>

                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                            <p class="summary--title">Average Usage</p>
                            <p class="summary--stats">2,371,527</p>
                        </div>

                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#cccccc">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                            <p class="summary--title">Disk Usage</p>
                            <p class="summary--stats">37.5%</p>
                        </div>

                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                            <p class="summary--title">CPU Usage</p>
                            <p class="summary--stats">37.05-32</p>
                        </div>
                        
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#ff4040">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                            <p class="summary--title">Memory Usage</p>
                            <p class="summary--stats">37.05%</p>
                        </div>
                    </div>
                    <!-- Summary Widget End -->
                </div>
            </div>
            <!-- Sidebar Widgets End -->
        </aside>
        <!-- Sidebar End -->

        <!-- Main Container Start -->
        <main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Dashboard</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" style="text-transform: uppercase !important; font-size:24px; color:#246B72;"><span><?=(isset($current_page))? $title_current_page:'';?></span></li>
                            </ul>
                        </div>

                      
                    </div>
                </div>
            </section>
            <!-- Page Header End -->