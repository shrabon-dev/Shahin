<?php
session_start();
$title_current_page = 'Testimonial Add';
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
                            <form action="../php_function/testi_f.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Name of Client</span>
                                        <input type="text" name="name"  class="form-control <?=(isset($_SESSION['name']))? 'is-invalid':''?>">
                                    </label>
                         
                                </div>

                                <div class="form-group">
                                    <label>
                                        <span class="label-text">Occupation</span>
                                        <input type="text" name="occupation" class="form-control <?=(isset($_SESSION['occupation']))? 'is-invalid':''?>">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <span class="label-text">What client's say</span>
                                        <input type="text" name="cleint_say"  class="form-control <?=(isset($_SESSION['cleint_say']))? 'is-invalid':''?>">
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
                                        <span class="label-text">Client Photo</span>
                                        <input type="file" name="cleint_photo"  class="<?=(isset( $_SESSION['image_name']))? 'is-invalid':''?> form-control">
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