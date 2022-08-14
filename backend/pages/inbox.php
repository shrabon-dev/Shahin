<?php
$title_current_page = " ";

require_once "../includes/db.php";

?>
<?php require_once "../includes/hedear.php" ?>

       <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Inbox</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../pages/admin.php">Dashboard</a></li>
                                <li class="breadcrumb-item active"><span>Inbox</span></li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <!-- Summary Widget Start -->
                            <div class="summary--widget">
                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378"><canvas width="71" height="38" style="display: inline-block; width: 71px; height: 38px; vertical-align: top;"></canvas></p>

                                    <p class="summary--title">This Month</p>
                                    <p class="summary--stats text-green">2,371,527</p>
                                </div>

                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123"><canvas width="71" height="38" style="display: inline-block; width: 71px; height: 38px; vertical-align: top;"></canvas></p>

                                    <p class="summary--title">Last Month</p>
                                    <p class="summary--stats text-orange">2,527,371</p>
                                </div>
                            </div>
                            <!-- Summary Widget End -->
                        </div>
                    </div>
                </div>
        </section>




        <section class="main--content">
                <div class="panel">
                    <!-- App Start -->
                    <div class="app_wrapper row">
                   

                        <!-- App Sidebar Start -->
                        <div class="app_sidebar col-lg-4 col-md-6">
                            <!-- Toolbar Start -->
                            <div class="toolbar">
                                <!-- App Search Bar Start -->
                                <form action="#" method="get" class="app_searchBar w-100">
                                    <input type="search" name="emails" placeholder="Search Email..." class="form-control" required="">

                                    <button type="submit" class="btn btn-rounded">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                                <!-- App Search Bar End -->
                            </div>
                            <!-- Toolbar End -->

                            <!-- User List Start -->
                            <div class="user--list-w ps ps--active-y" data-trigger="scrollbar">
                                <ul class="user--list">
                                    <li>
                                        <a href="#" class="star-icon"></a>

                                        <a href="#" class="list-link">
                                            <div class="avatar">
                                                <img src="assets/img/avatars/01_80x80.png" alt="">
                                            </div>

                                            <div class="info">
                                                <h4 class="title">
                                                    <span class="title-text">John Doe</span>
                                                    <span class="time">3:15 PM</span>
                                                </h4>

                                                <p class="subtitle">13 Email Marketing Trends You Must Know</p>

                                                <p class="desc">
                                                    <span class="desc-text">Lorem Company Inc.</span>
                                                    <span class="label label-blue">Work</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="star-icon"></a>

                                        <a href="#" class="list-link has-attachment is-unread">
                                            <div class="avatar">
                                                <img src="assets/img/avatars/02_80x80.png" alt="">
                                            </div>

                                            <div class="info">
                                                <h4 class="title">
                                                    <span class="title-text">Wales Hue</span>
                                                    <span class="time">1:15 PM</span>
                                                </h4>

                                                <p class="subtitle">Missed You, How’s Thursday?</p>

                                                <p class="desc">
                                                    <span class="desc-text">Lorem Company Inc.</span>
                                                    <span class="label label-green">Family</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="#" class="star-icon is-stared"></a>

                                        <a href="#" class="list-link">
                                            <div class="avatar">
                                                <img src="assets/img/avatars/03_80x80.png" alt="">
                                            </div>

                                            <div class="info">
                                                <h4 class="title">
                                                    <span class="title-text">Jane Doe</span>
                                                    <span class="time">Yesterday</span>
                                                </h4>

                                                <p class="subtitle">It’s Time To Rethink Black Friday</p>

                                                <p class="desc">
                                                    <span class="desc-text">Lorem Company Inc.</span>
                                                    <span class="label label-orange">Friends</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="star-icon"></a>

                                        <a href="#" class="list-link has-attachment">
                                            <div class="avatar">
                                                <img src="assets/img/avatars/04_80x80.png" alt="">
                                            </div>

                                            <div class="info">
                                                <h4 class="title">
                                                    <span class="title-text">Dr. Bravestone</span>
                                                    <span class="time">14 July</span>
                                                </h4>

                                                <p class="subtitle">Before You Write Another Blog Post</p>

                                                <p class="desc">
                                                    <span class="desc-text">Lorem Company Inc.</span>
                                                    <span class="label label-red">Others</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="star-icon"></a>

                                        <a href="#" class="list-link">
                                            <div class="avatar">
                                                <span class="avatar-text bg-blue">J</span>
                                            </div>

                                            <div class="info">
                                                <h4 class="title">
                                                    <span class="title-text">John V. Victor</span>
                                                    <span class="time">13 July</span>
                                                </h4>

                                                <p class="subtitle">Are We Still on For 12?</p>

                                                <p class="desc">
                                                    <span class="desc-text">Lorem Company Inc.</span>
                                                    <span class="label label-blue">Work</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="star-icon"></a>

                                        <a href="#" class="list-link has-attachment">
                                            <div class="avatar">
                                                <img src="assets/img/avatars/02_80x80.png" alt="">
                                            </div>

                                            <div class="info">
                                                <h4 class="title">
                                                    <span class="title-text">Wales Hue</span>
                                                    <span class="time">12 July</span>
                                                </h4>

                                                <p class="subtitle">We’re Starting In 5 Hours</p>

                                                <p class="desc">
                                                    <span class="desc-text">Lorem Company Inc.</span>
                                                    <span class="label label-green">Family</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="star-icon"></a>

                                        <a href="#" class="list-link">
                                            <div class="avatar">
                                                <span class="avatar-text bg-orange">G</span>
                                            </div>

                                            <div class="info">
                                                <h4 class="title">
                                                    <span class="title-text">Gina E. Stenberg</span>
                                                    <span class="time">11 July</span>
                                                </h4>

                                                <p class="subtitle">How To Google-Proof Your Mobile Site in 2017</p>

                                                <p class="desc">
                                                    <span class="desc-text">Lorem Company Inc.</span>
                                                    <span class="label label-orange">Friends</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="star-icon"></a>

                                        <a href="#" class="list-link has-attachment">
                                            <div class="avatar">
                                                <img src="assets/img/avatars/04_80x80.png" alt="">
                                            </div>

                                            <div class="info">
                                                <h4 class="title">
                                                    <span class="title-text">Dr. Bravestone</span>
                                                    <span class="time">10 July</span>
                                                </h4>

                                                <p class="subtitle">I Was Right and That’s Not Good For You</p>

                                                <p class="desc">
                                                    <span class="desc-text">Lorem Company Inc.</span>
                                                    <span class="label label-red">Others</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="star-icon"></a>

                                        <a href="#" class="list-link has-attachment">
                                            <div class="avatar">
                                                <img src="assets/img/avatars/04_80x80.png" alt="">
                                            </div>

                                            <div class="info">
                                                <h4 class="title">
                                                    <span class="title-text">Dr. Bravestone</span>
                                                    <span class="time">14 July</span>
                                                </h4>

                                                <p class="subtitle">Before You Write Another Blog Post</p>

                                                <p class="desc">
                                                    <span class="desc-text">Lorem Company Inc.</span>
                                                    <span class="label label-red">Others</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="star-icon"></a>

                                        <a href="#" class="list-link">
                                            <div class="avatar">
                                                <span class="avatar-text bg-blue">J</span>
                                            </div>

                                            <div class="info">
                                                <h4 class="title">
                                                    <span class="title-text">John V. Victor</span>
                                                    <span class="time">13 July</span>
                                                </h4>

                                                <p class="subtitle">Are We Still on For 12?</p>

                                                <p class="desc">
                                                    <span class="desc-text">Lorem Company Inc.</span>
                                                    <span class="label label-blue">Work</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="star-icon"></a>

                                        <a href="#" class="list-link has-attachment">
                                            <div class="avatar">
                                                <img src="assets/img/avatars/02_80x80.png" alt="">
                                            </div>

                                            <div class="info">
                                                <h4 class="title">
                                                    <span class="title-text">Wales Hue</span>
                                                    <span class="time">12 July</span>
                                                </h4>

                                                <p class="subtitle">We’re Starting In 5 Hours</p>

                                                <p class="desc">
                                                    <span class="desc-text">Lorem Company Inc.</span>
                                                    <span class="label label-green">Family</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            <div class="ps__rail-x" style="left: 0px; bottom: -354px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 354px; height: 778px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 244px; height: 534px;"></div></div></div>
                            <!-- User List End -->
                        </div>
                        <!-- App Sidebar End -->
                        
                        <!-- App Content Start -->
                        <div class="app_content col-lg-8">
                            <!-- Toolbar Start -->
                            <div class="toolbar">
                                <ul class="toolbar__nav nav">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-reply"></i>
                                            <span>Reply</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-reply-all"></i>
                                            <span>Reply All</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-share"></i>
                                            <span>Forward</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="toolbar__pager btn-group ml-auto">
                                    <a href="#" class="btn btn-sm btn-rounded btn-outline-secondary">
                                        <i class="fa fa-angle-left"></i>
                                    </a>

                                    <a href="#" class="btn btn-sm btn-rounded btn-outline-secondary">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Toolbar End -->

                            <!-- Main Sendar Info Start -->

                            <?php
                            
                            $select_message_query = "SELECT * FROM user_messages";
                            $select_message_mysqli_query =  mysqli_query($db_connect,$select_message_query);
                    
                            
                            ?>

                             <?php foreach($select_message_mysqli_query as $value): ?>
                            <div id="msg_<?= $value['id']?>" class="btn_hiddien" style="display: none;">
                            <div class="main-sender-info">
                                <div class="main-sender-info__name">
                                    <img src="assets/img/avatars/03_80x80.png" alt="">
                                    <a href="#"><?=$value['user_name']?></a> to <span>me</span>
                                </div>

                                <div class="main-sender-info__detail">
                                    <a href="#" class="star-icon is-stared"></a>
                                    <span>13 July, 3:30 pm</span>
                                </div>
                            </div>
                            <!-- Main Sendar Info End -->

                            <!-- Mail Subject Line Start -->
                            <div class="mail-subject-line">
                                <h3 class="h3"><?=$value['message_subject']?></h3>
                            </div>
                            <!-- Mail Subject Line End -->

                            <!-- Mail View Start -->
                            <div class="mail-view">
                                <p><?=$value['message']?></p>
                                
                                <p>Regards,<br><?=$value['user_name']?></p>
                            </div>
                            <!-- Mail View End -->
                            </div>
                            <?php endforeach; ?>

                            <!-- Mail Attachments Start -->
                            <div class="mail-attachements">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Attachment (2 Files, 18.32 KB)</th>
                                            <th><a href="#">View All</a></th>
                                            <th><a href="#">Download All</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <i class="fa fa-paperclip"></i>
                                                <a href="#">Text Documents</a>
                                                <span>(9.32 KB)</span>
                                            </td>
                                            <td><a href="#">View</a></td>
                                            <td><a href="#">Download</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-paperclip"></i>
                                                <a href="#">Text Documents</a>
                                                <span>(8.32 KB)</span>
                                            </td>
                                            <td><a href="#">View</a></td>
                                            <td><a href="#">Download</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Mail Attachments End -->
                        </div>
                        <!-- App Content End -->
                    </div>
                    <!-- App Sidebar End -->
                </div>
            </section>






<?php require_once "../includes/footer.php" ?>

<script>
// $('.btn_hiddien').css('display','none');

$('.btn_hiddien').documents.getelementbyId ;


</script>
