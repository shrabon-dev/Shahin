<?php

$title_current_page = 'Service Section';

?>
<?php require_once "../includes/hedear.php" ?>
<?php require_once "../includes/fontawesome.php" ?>

            <!-- Main Content Start -->
            <section class="main--content">

            <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit your services:</h3>
                    </div>

                     <!-- ERROR MESSAGE SHOW CODE  -->
                        <?php if(isset($_SESSION['error_message'])):?>
                              <ul>
                                <li class="text-danger"><?=$_SESSION['error_message']?></li>
                              </ul>
                        <?php endif; unset($_SESSION['error_message'])?>
                        <?php if(isset($_SESSION['add_message'])):?>
                              <ul>
                                <li class="text-primary"><?=$_SESSION['add_message']?></li>
                              </ul>
                        <?php endif; unset($_SESSION['add_message'])?>
                     <!-- ERROR MESSAGE SHOW CODE  -->
                     <!-- query start -->
                     <?php 
                     $id = $_GET['id'];
                     $select_service_query = "SELECT * FROM services WHERE id=$id";
                     $service =  mysqli_fetch_assoc(mysqli_query($db_connect,$select_service_query));
                      
                     $_SESSION['id'] = $id;
                     ?>
                     <!-- query end -->

                    <div class="panel-content">
                        <form action="../php_function/service_update_f.php" method="post">

                    
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Service Title</span>
                                        <input type="text" value="<?=$service['service']?>" name="service" placeholder="Title" class="form-control">
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Short Paragraph </span>
                                        <input value="<?=$service['short_paragraph']?>" type="text" name="short_paragraph" placeholder="Short paragraph" class="form-control">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Status </span>
                                        <select name="service_status" id="">
                                            <option value="" disabled>Select Status</option>
                                            <option value="active" <?=($service['service_status']=='active')? 'selected':''?> >Active</option>
                                            <option value="diactive" <?=($service['service_status']=='diactive')? 'selected':''?>>Diactive</option>
                                        </select>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Service Icon </span>
                                        <input value="<?=$service['service_icon']?>" id="input_value" type="text" name="service_icon"  class=" form-control" placeholder="input icon">
                                    </label>
                                </div>
                                <div class="show-icon mb-2" style="height: 200px;border:1px solid #000000;overflow:scroll; font-size:18px;padding:8px;">
                                    <?php foreach($fonts as $font): ?>
                                        <span class="clk_btn" id="<?=$font?>">
                                           <i class="<?=$font?>" style="display:inline-block;padding: 2px;border:1px solid #171717;margin:2px; cursor: pointer;" ></i>
                                        </span>
                                    <?php endforeach; ?>
                                </div>

                          
                                <button type="submit"  class="btn btn-sm btn-rounded btn-success">Save Change</button>
                        </form>
                            </div>
                </div>

            </section>
            <!-- Main Content End -->

<?php require_once "../includes/footer.php" ?>
<script>
    $(document).ready(function(){
          $('.clk_btn').click(function(){
              $('#input_value').val($(this).attr('id'))
          })
    })
</script>