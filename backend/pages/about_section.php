<?php
$title_current_page = "About Information";

?>
<?php require_once "../includes/hedear.php" ?>

            <!-- Main Content Start -->
             <div class="row">
                <div class="col-lg-8">
                <div class="panel">
                    <form action="../php_function/update_info_about.php" method="post" enctype="multipart/form-data">
                           

                            <div class="panel-content">
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">About Name</span>
                                        <input type="text" name="Name" class="form-control">
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Designation</span>
                                        <input type="text" name="designation"  class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Description</span>
                                        <input type="text" name="description"  class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Facebook Url</span>
                                        <input type="url" name="facebook_url"  class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Twitter Url</span>
                                        <input type="url" name="twitter_url"  class="form-control">
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Linkedin Url</span>
                                        <input type="url" name="linkedin_url"  class="form-control">
                                    </label>
                                </div>
                              
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">About Iamge</span>
                                        <input type="file" name="about_image" placeholder="Enter Your Password..." class="form-control">
                                    </label>
                                </div>

                        
                                <button type="submit" class="btn btn-sm btn-rounded btn-success">Save Info</button>
                                </form>
                            </div>
                        </div>
                </div>
             </div>
            <!-- Main Content End -->

<?php require_once "../includes/footer.php" ?>
