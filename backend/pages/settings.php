<?php
$title_current_page = "General";

?>
<?php require_once "../includes/hedear.php" ?>

            <!-- Main Content Start -->
             <div class="row">
                <div class="col-lg-8">
                <div class="panel">
                    <form action="../php_function/update_settings.php" method="post" enctype="multipart/form-data">
                           

                            <div class="panel-content">

                             <?php
                             
                             $settings_query = "SELECT * FROM settings";
                             $settings=  mysqli_query($db_connect,$settings_query)
                             
                             ?>
                                  
                                <?php foreach( $settings as  $setting): ?>
 
                                    <?php if($setting['settings_name'] !== "owner_photo"): ?>
                                        <div class="form-group">
                                            <label>
                                                <span class="label-text"><?=ucwords(str_replace('_',' ',$setting['settings_name']))?></span>
                                                <input  type="text" name="<?=$setting['settings_name']?>" class="form-control" value="<?=$setting['settings_value']?>">
                                            </label>
                                        </div>
                                    <?php endif;?>
                                    <?php if($setting['settings_name'] == "owner_photo"): ?>
                                        <div class="form-group">
                                            <label>
                                                <span class="label-text"><?=ucwords(str_replace('_',' ',$setting['settings_name']))?></span>
                                                <img width="200" height="200" style="display:block;border-radius: 10px;box-shadow:0 0 5px 0 #272727" src="../uploads/banner_img/<?=$setting['settings_value']?>" alt="<?=$setting['settings_value']?>">
                                                <input  type="file" name="<?=$setting['settings_name']?>" class="form-control" value="<?=$setting['settings_value']?>">
                                            </label>
                                        </div>
                                    <?php endif;?>
                                    
                                <?php endforeach ?>

                        
                                <button type="submit" class="btn btn-sm btn-rounded btn-success">Save Info</button>
                            <?php if(isset( $_SESSION['update_settings'] )): ?>   
                                <div class="alert alert-primary" role="alert">
                                    <strong><?=$_SESSION['update_settings']?></strong>
                                </div>
                                
                            <?php endif; ?>
                            </form>
                            </div>
                        </div>
                </div>
             </div>
            <!-- Main Content End -->

<?php require_once "../includes/footer.php" ?>
