<?php
session_start();
$title_current_page = "Blog's Edit";
require_once "../includes/hedear.php";
?>

<div class="row pl-4">
<div class="col-md-6">

          
                               <!-- query start -->
                     <?php 
                     $id = $_GET['id'];
                     $blog_edit_query = "SELECT * FROM blogs WHERE id=$id";
                     $blog =  mysqli_fetch_assoc(mysqli_query($db_connect,$blog_edit_query));
                      
                     $_SESSION['blog_id'] = $id;
                     ?>
                     <!-- query end -->

                            <div class="panel-content">
                            <form action="../php_function/blog_update_f.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Blog's Title</span>
                                        <input type="text" value="<?=$blog['blog_title']?>" name="blog_title"  class="form-control <?=(isset($_SESSION['name']))? 'is-invalid':''?>">
                                    </label>
                         
                                </div>

                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Blog's Paragraph</span>
                                        <input type="text" value="<?=$blog['blog_paragraph']?>" name="blog_paragraph" class="form-control <?=(isset($_SESSION['occupation']))? 'is-invalid':''?>">
                                    </label>
                                </div>
                           
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Entry Date</span>
                                        <input value="<?=$blog['entry_date']?>" type="date" name="entry_date"  class="form-control <?=(isset( $_SESSION['entry_date']))? 'is-invalid':''?>">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Status </span>
                                        <select name="blogs_status" id="">
                                            <option value="" disabled>Select Status</option>
                                            <option value="active" <?=($blog['blogs_status']=='active')? 'selected':''?> >Active</option>
                                            <option value="diactive" <?=($blog['blogs_status']=='diactive')? 'selected':''?>>Diactive</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Blog's Image</span>
                                        <div>
                                            <img src="../uploads/blogs_image/<?=$blog['blog_image_name']?>" alt="<?=$blog['blog_image_name']?>">
                                        </div>
                                        <input type="file" name="blog_image_name"  class="form-control">
                                    </label>
                                </div>


                                

                                <button type="submit" class="btn btn-sm btn-rounded btn-success">Save Change</button>
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