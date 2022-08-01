<?php
session_start();
$title_current_page = 'Skill Add';

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
                        <!-- Dropzone Start -->
                        <form action="../php_function/skill_f.php"  method="post" enctype="multipart/form-data">
                               <div class="form-group">
                                    <label>
                                        <span class="label-text"> Degree</span>
                                        <input type="text" name="degree" placeholder="Input Degree" class="form-control" value="<?=(isset(   $_SESSION['degree'] ))?    $_SESSION['degree'] : ''?>">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">University</span>
                                        <input type="text" name="university" placeholder="Input University" class="form-control" value="<?=(isset(   $_SESSION['university'] ))?    $_SESSION['university'] : ''?>">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Year</span>
                                        <input type="text" name="year" placeholder="Input Year" class="form-control" value="<?=(isset(   $_SESSION['year'] ))?    $_SESSION['year'] : ''?>">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Category</span>
                                        <select name="category" id="">
                                            <option selected disabled>Select Cetagory</option>
                                            <option  <?=(isset($_SESSION['category']) == 'experience')?   'selected' : ''?> value="experience">Experience</option>
                                            <option <?=(isset($_SESSION['category'])  == 'education')?   'selected' : ''?> value="education">Education</option>
                                        </select>
                                    </label>
                                </div>
                                <button type="submit"  class="btn btn-sm btn-rounded btn-success">Add Skill</button>

                        </form>
                        <!-- Dropzone End -->
                    </div>
                </div>

            </section>
            <!-- Main Content End -->

            <?php unset($_SESSION['degree']); unset($_SESSION['university']); unset($_SESSION['year']);  unset($_SESSION['category']); unset($_SESSION['skill_message']) ?>
            <?php require_once "../includes/footer.php" ?>
