   <!-- ================  footer section start  ==================== -->
   <footer>
       <div class="container">
        <div class="title" data-aos="zoom-out" data-aos-duration="1500">
            <h1>Contact</h1>
            <h2>Get In Touch</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam exercitationem eos
                 nesciunt mollitia nulla nihil quasi quod doloremque cumque obcaecati.</p>
        </div>
            
            <?php if(isset($_SESSION['user_message'])): ?>
             <div class="alert " style="background: #4153E8 !important; width:50%; margin:10px auto !important;" role="alert">
                <?= $_SESSION['user_message']?>
             </div>
             <?php endif; ?>
             
            

           <form data-aos="zoom-out-up" data-aos-duration="1500" action="backend/php_function/form_f.php" method="post">
           <div class="row">
               <div class="col-lg-6"><input type="text" <?=(isset($_SESSION['user_name']))? "style='border: 1px solid #DF5A67;'":''?> name="user_name" placeholder="Name*"></div>
               <div class="col-lg-6"><input type="email" <?=(isset($_SESSION['user_email']))? "style='border: 1px solid #DF5A67;'":''?> name="user_email" placeholder="Email*"></div>
               <div class="col-lg-12"><input type="text" <?=(isset($_SESSION['message_subject']))? "style='border: 1px solid #DF5A67;'":''?> name="message_subject" placeholder="Subject*"></div>
               <div class="col-lg-12"><textarea name="message" <?=(isset($_SESSION['message']))? "style='border: 1px solid #DF5A67;'":''?> placeholder="Your Message*"></textarea></div>
               <div class="button"><button type="submit">Submit</button></div>
           </div>
        </form>




         <div class="contact__addres">
             <div class="row">
                <div class="col-lg-4"><div class="location">
                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                    <span><?=$owner_location['settings_value']?></span>
                    <span><?=$owner_location_more['settings_value']?></span>
                
                </div></div>
                 <div class="col-lg-4"><div class="email">
                     <div class="icon"><i class="far fa-envelope"></i></div>
                     <span><?=$owner_email['settings_value']?></span>

                 </div></div>
                 <div class="col-lg-4"><div class="tel">
                     <div class="icon"><i class="fas fa-phone"></i></div>
                     <span><?=$owner_contact_number['settings_value']?></span>
                 </div></div>
             </div>
         </div>


       </div>
   </footer>
   <!-- ================  footer section end  ==================== -->

<?php

unset($_SESSION['user_name']);
unset($_SESSION['user_email']);
unset($_SESSION['message_subject']);
unset($_SESSION['message']);
unset($_SESSION['user_message']);


?>




    <!-- =================== Script link start ===================== -->
    <script src="./frontend/js/jquery-1.12.4.min.js"></script>
    <script src="./frontend/js/bootstrap.bundle.min.js"></script>
    <script src="./frontend/js/aos.js"></script>
    <script src="./frontend/js/slick.min.js"></script>
    <script src="./frontend/js/venobox.min.js"></script>
    <script src="./frontend/js/script.js"></script>
    <!-- =================== Script link end ===================== -->
</body>
</html>