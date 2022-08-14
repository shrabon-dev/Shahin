<?php
session_start();
$title_current_page = 'Skill Edit';





?>
<?php require_once "../includes/hedear.php" ?>

            <!-- Main Content Start -->
            <section class="main--content">

            <div class="panel">
                   

                    <div class="panel-content">
                        <!-- message show start-->
                        <?php if(isset($_SESSION['skill_message'])):?>
                            <div class="alert alert-primary" role="alert">
                                <strong><?=$_SESSION['skill_message']?></strong>
                            </div>
                                
                        <?php endif; ?>
                        <!-- message show end -->
                        <?php 
                     $id = $_GET['id'];
                     $select_skill_query = "SELECT * FROM skills WHERE id=$id";
                     $skill =  mysqli_fetch_assoc(mysqli_query($db_connect,$select_skill_query));
                      
                     $_SESSION['skill_id'] = $id;
                     ?>
                        <!-- Dropzone Start -->
                        <form action="../php_function/skill_update_f.php"  method="post" enctype="multipart/form-data">
                               <div class="form-group">
                                    <label>
                                        <span class="label-text"> Degree</span>
                                        <input type="text" name="degree" placeholder="Input Degree" class="form-control" value="<?=$skill['degree']?>">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">University</span>
                                        <input type="text" name="university" placeholder="Input University" class="form-control" value="<?=$skill['university']?>">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Year</span>
                                        <input type="text" name="year" placeholder="Input Year" class="form-control"value="<?=$skill['year']?>">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Category</span>
                                        <select name="category" id="">
                                            <option selected disabled>Select Cetagory</option>
                                            <option  <?=($skill['category'] == 'experience')?   'selected' : ''?> value="experience">Experience</option>
                                            <option <?=($skill['category']  == 'education')?   'selected' : ''?> value="education">Education</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Status</span>
                                        <select name="skill_status" id="">
                                            <option selected disabled>Select Status</option>
                                            <option  <?=($skill['skill_status'] == 'active')? 'selected':''?> value="active">Active</option>
                                            <option <?=($skill['skill_status']  == 'diactive')? 'selected':''?> value="diactive">Diactive</option>
                                        </select>
                                    </label>
                                </div>
                                <button type="submit"  class="btn btn-sm btn-rounded btn-success">Save Change</button>

                        </form>
                        <!-- Dropzone End -->
                    </div>
                </div>

            </section>
            <!-- Main Content End -->

            <?php unset($_SESSION['degree']); unset($_SESSION['university']); unset($_SESSION['year']);  unset($_SESSION['category']); unset($_SESSION['skill_message']) ?>
            <?php require_once "../includes/footer.php" ?>
