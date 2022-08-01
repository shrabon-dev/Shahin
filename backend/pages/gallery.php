<?php
$title_current_page = "Gallery";

require_once "../includes/db.php";

?>
<?php require_once "../includes/hedear.php" ?>

            <!-- Main Content Start -->
            <section class="main--content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_imgs">
                            <h2 class="text-primary" style="text-decoration: underline;">BANNER IMAGES</h2>
                            <div class="row">

                            <!-- ---------------------------------------------------------------- -->
                            <!-- PHP FUNCTION START & BANNER IMAGES SELECT FROM DATABASE -->
                            <?php
                              $select_query = "SELECT * FROM banner_imgs";            
                            ?>
                            <!-- PHP FUNCTION END & BANNER IMAGES SELECT FROM DATABASE -->
                            <?php foreach(mysqli_query($db_connect,$select_query) as $banner):?>
                                <div class="col-lg-4 mb-4">
                                    <div class="banner_box">
                                    <div class="banner" style="width: 100%; height:280px;">
                                       <img src="../uploads/banner_img/<?=$banner['banner'];?>" alt="<?=$banner['banner'];?>" style="width: 100%;height:100%;display:block;">
                                     </div>
                                     <div class="edit_option">
                                        <a href="#" class="edit">Edit</a>
                                        <a href="#" class="delete">Delete</a>
                                     </div>
                                     </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- ---------------------------------------------------------------- -->

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->

<?php require_once "../includes/footer.php" ?>
