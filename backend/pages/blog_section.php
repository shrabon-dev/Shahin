<?php
session_start();
$title_current_page = "Blog's Add";
require_once "../includes/hedear.php";
?>

<div class="row pl-4">
<div class="col-md-6">

                        <!-- Panel Start -->
                        <div class="panel">
                            <?php if(isset( $_SESSION['testi_status'])): ?>
                            <div class="bg-success p-2 rounded-2">
                              <p class="text-white"><?=$_SESSION['testi_status']?></p>
                            </div>
                            <?php endif; unset( $_SESSION['testi_status']); ?>

                            <div class="panel-content">
                            <form action="../php_function/blog_f.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Blog's Title</span>
                                        <input type="text" name="blog_title"  class="form-control <?=(isset($_SESSION['name']))? 'is-invalid':''?>">
                                    </label>
                         
                                </div>

                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Blog's Paragraph</span>
                                        <input type="text" name="blog_paragrph" class="form-control <?=(isset($_SESSION['occupation']))? 'is-invalid':''?>">
                                    </label>
                                </div>
                           
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Entry Date</span>
                                        <input type="date" name="entry_date"  class="form-control <?=(isset( $_SESSION['entry_date']))? 'is-invalid':''?>">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Blog's Image</span>
                                        <input type="file" name="blog_image"  class="<?=(isset( $_SESSION['image_name']))? 'is-invalid':''?> form-control">
                                    </label>
                                </div>


                                

                                <button type="submit" class="btn btn-sm btn-rounded btn-success">Add</button>
                                </form>
                            </div>
                        </div>
                        <!-- Panel End -->
                    </div>
</div>


<?php

unset($_SESSION['name']);
unset($_SESSION['occupation']);
unset($_SESSION['cleint_say']);
unset($_SESSION['entry_date']);
unset($_SESSION['image_name']);

require_once "../includes/footer.php";
?>