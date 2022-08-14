<?php  session_start(); 
?>   
<?php  require_once "./backend/includes/index_header.php"; ?>

   <!-- ================  banner section start  ==================== -->
   <section id="banner__section">
   <div class="container">
       <div class="row">
           <div class="col-lg-6"><div class="banner__txt" data-aos="fade-right" data-aos-duration="1500">
               <h6>Introduction</h6>
               <h4>I'm <?=$owner_name['settings_value']?> </h4>
               <h3>a professional <span class="name__one"><?=$owner_profession['settings_value']?></span>
                <!-- <span class="name__two">Developer</span></h3> -->
                <p><?=$owner_bio['settings_value']?></p>
                <div class="dflex">
                    <div class="experience">
                       <p> <span><?=$owner_experience['settings_value']?></span>Years of experience</p>
                    </div>
                    <div class="project">
                       <p> <span><?=$owner_project_done['settings_value']?>+</span>Project Complete</p>
                    </div>
                </div>
                
                <div class="download">
                    <a href="#">Download Resume</a>
                </div>
           </div></div>
           <div class="col-lg-6 m-auto"><div class="banner__img" data-aos="fade-left" data-aos-duration="1500">
               <img src="./backend/uploads/banner_img/<?=$owner_image['settings_value']?>" alt="home-banner.jpg">
           </div></div>
       </div>
   </div>
   </section>
   <!-- ================  banner section end  ==================== -->

   <!-- ================  services section start  ==================== -->
   <section id="services__section">
   <div class="container">
       <div class="title" data-aos="fade-down" data-aos-duration="1500">
           <h1>Service</h1>
           <h2>Service provide for you</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
               elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       </div>
       <div class="row">
        
            <?php foreach($mysqli_services_query as $service_value): ?>	
			
            <div class="col-lg-4 col-sm-6 col-md-6 col-xl-4 col-xxl-2"  data-aos="flip-left" data-aos-duration="1500">
            <div class="service">
                <div class="svc__icon"><i class="<?=$service_value['service_icon']?>"></i></div>
                <h3><?=$service_value['service']?></h3>
                <p> <?=$service_value['short_paragraph']?></p>
                
               <a href="#"><img src="./frontend/images/font/010-right-arrow.png" alt="010-right-arrow.png"></a>
                
            </div>
            </div>
			<?php endforeach; ?>
    

       </div>
   </div>
   </section>
   <!-- ================  services section end  ==================== -->

   <!-- ================  resume section start  ==================== -->
   <section id="resume__section">
    <div class="container">
        <div class="title" data-aos="fade-right" data-aos-duration="1000">
            <h1>Resume</h1>
            <h2>My Skills and Education</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6 col-xl-6 col-xxl-6">
            <h3 data-aos="fade-down-right" data-aos-duration="1500"> <i class="fas fa-user-graduate"></i> Education</h3>
            <?php foreach($mysqli_education_skill_query as $skill_value): ?>

                <div class="resume__card"  data-aos="fade-down-right" data-aos-duration="1500">
                       <span> <?=$skill_value['year']?></span>
                      <h4><?=$skill_value['degree']?></h4>
                      <h6><?=$skill_value['university']?></h6>
                  </div>
             
            <?php endforeach;?>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6 col-xl-6 col-xxl-6">
                <h3 class="h3_2"  data-aos="fade-down-left" data-aos-duration="1500"><i class="fas fa-briefcase"></i> Job Experience</h3>
                  
                <?php foreach($mysqli_experience_skill_query as $skill_value): ?>

                    <div class="resume__card"  data-aos="fade-down-right" data-aos-duration="1500">
                        <span> <?=$skill_value['year']?></span>
                        <h4><?=$skill_value['degree']?></h4>
                        <h6><?=$skill_value['university']?></h6>
                    </div>

                <?php endforeach;?>
               
        
                
                
            </div>
        </div>
    </div>
   </section>
   <!-- ================  resume section end  ==================== -->

   <!-- ================  portfolio section start  ==================== -->
   <section id="portfolio__section">
   <div class="container" data-aos="zoom-in" data-aos-duration="1500">
    <div class="title">
        <h1>Portfolio</h1>
        <h2>My latest projects</h2>
    </div>
       <div class="row">
           <div class="col-lg-12"  data-aos="zoom-out" data-aos-duration="1500">
               <ul>
                   <li class="all">all</li>
                   <li class="design">Web Design</li>
                   <li class="development">Web Development</li>
                   <li class="app">App Development</li>
                   <li class="ui">UX/UI Design</li>
               </ul>
           </div>
           <div class="col-lg-3 col-sm-6 col-md-6 col-xl-3 col-xxl-2  one two"  data-aos="fade-right" data-aos-duration="1500">
            <div class="portfolio">
                <div class="port__img">
                    <img src="./frontend/images/portfolio/fv1.png" alt="portfolio/fv1.png">        
                </div>
                 <span>Web Design</span>
                <h3>BDResturent</h3>
                <a href="#"><img src="./frontend/images/font/010-right-arrow.png" alt="font/010-right-arrow.png"></a>
            </div>
           </div>
           <div class="col-lg-3 col-sm-6 col-md-6 col-xl-3 col-xxl-2  one three" data-aos="fade-down" data-aos-duration="1500">
            <div class="portfolio">
                <div class="port__img">
                    <img src="./frontend/images/portfolio/fv4.png" alt="portfolio/fv4.png">        
                </div>
                 <span>Web Design</span>
                <h3>Nofa</h3>
                <a href="#"><img src="./frontend/images/font/010-right-arrow.png" alt="font/010-right-arrow.png"></a>
            </div>
           </div>
           <div class="col-lg-3 col-sm-6 col-md-6 col-xl-3 col-xxl-2  one two"  data-aos="fade-up" data-aos-duration="1500">
            <div class="portfolio">
                <div class="port__img">
                    <img src="./frontend/images/portfolio/fv2.png" alt="portfolio/fv2.png">        
                </div>
                 <span>Web Design</span>
                <h3>RuleX</h3>
                <a href="#"><img src="./frontend/images/font/010-right-arrow.png" alt="font/010-right-arrow.png"></a>
            </div>
           </div>
           <div class="col-lg-3 col-sm-6 col-md-6 col-xl-3 col-xxl-2  one four"  data-aos="fade-left" data-aos-duration="1500">
            <div class="portfolio">
                <div class="port__img">
                    <img src="./frontend/images/portfolio/fv3.png" alt="portfolio/fv3.png">        
                </div>
                 <span>Web Design</span>
                <h3>BroxX</h3>
                <a href="#"><img src="./frontend/images/font/010-right-arrow.png" alt="font/010-right-arrow.png"></a>
            </div>
           </div>
           <div class="col-lg-3 col-sm-6 col-md-6 col-xl-3 col-xxl-2  one three" data-aos="fade-down-right" data-aos-duration="1500">
            <div class="portfolio">
                <div class="port__img">
                    <img src="./frontend/images/portfolio/fv3.png" alt="portfolio/3.png">        
                </div>
                 <span>Web Design</span>
                <h3>BroxX</h3>
                <a href="#"><img src="./frontend/images/font/010-right-arrow.png" alt="font/010-right-arrow.png"></a>
            </div>
           </div>
           <div class="col-lg-3 col-sm-6 col-md-6 col-xl-3 col-xxl-2  one four" data-aos="flip-left" data-aos-duration="1500">
            <div class="portfolio">
                <div class="port__img">
                    <img src="./frontend/images/portfolio/fv1.png" alt="portfolio/fv1.png">        
                </div>
                 <span>Web Design</span>
                <h3>BDResturent</h3>
                <a href="#"><img src="./frontend/images/font/010-right-arrow.png" alt="font/010-right-arrow.png"></a>
            </div>
           </div>
           <div class="col-lg-3 col-sm-6 col-md-6 col-xl-3 col-xxl-2  one five" data-aos="flip-right" data-aos-duration="1500"> 
            <div class="portfolio">
                <div class="port__img">
                    <img src="./frontend/images/portfolio/fv4.png" alt="portfolio/fv4.png">        
                </div>
                 <span>Web Design</span>
                <h3>Nofa</h3>
                <a href="#"><img src="./frontend/images/font/010-right-arrow.png" alt="font/010-right-arrow.png"></a>
            </div>
           </div>
           <div class="col-lg-3 col-sm-6 col-md-6 col-xl-3 col-xxl-2 one two" data-aos="flip-up"  data-aos-duration="1500">
            <div class="portfolio ">
                <div class="port__img">
                    <img src="./frontend/images/portfolio/fv2.png" alt="portfolio/fv2.png">        
                </div>
                 <span>Web Design</span>
                <h3>RuleX</h3>
                <a href="#"><img src="./frontend/images/font/010-right-arrow.png" alt="font/010-right-arrow.png"></a>
            </div>
           </div>
           

       </div>
   </div>
   </section>
   <!-- ================  portfolio section end  ==================== -->
      <!-- ================  Blog's section start  ==================== -->
      <section id="Blog__section">
        <div class="container">
         <div class="title" data-aos="zoom-in" data-aos-duration="1500">
             <h1>Blog's</h1>
             <h2>My recent blog's</h2>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam exercitationem eos
                  nesciunt mollitia nulla nihil quasi quod doloremque cumque obcaecati.</p>
         </div>
               <div class="row">
               
                <div class="col-lg-8">
                <?php foreach($mysqli_blogs_query as $blog): ?>
                    <div class="main_blog">
                    <div class="img"><img src="./backend/uploads/blogs_image/<?=$blog['blog_image_name']?>" alt=""></div>
                   <div class="blog_text">
                     <p><span>Publish Date : </span><span> <?=date("F j, Y",strtotime($blog['entry_date']))?></span></p>
                      <h4><?=$blog['blog_title']?></h4>
                      <p><?=substr($blog['blog_paragraph'],0,300)?> ...... <a href="blog.php?id=<?=$blog['id']?>">read more <i class="fas fa-angle-double-right"></i></a></p>
                   </div>
                    </div>
                <?php endforeach; ?>

                </div>


                <div class="col-lg-4"><div class="blog_list">
                    <h4>All Blog's</h4>
                    
                    <?php foreach($mysqli_recent_blogs_query as $blogs): ?>
                    <?php if($blogs['id']>1): ?>
                    <div class="blog">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="img"><img src="./backend/uploads/blogs_image/<?=$blogs['blog_image_name']?>" alt="<?=$blogs['blog_image_name']?>"></div>
                            </div>
                            <div class="col-lg-7">
                                <div class="blog_text">
                                     <h4><?=$blogs['blog_title']?></h4>
                                     <p><?=substr($blogs['blog_paragraph'],0,150)?>...... <a href="blog.php?id=<?=$blogs['id']?>">read more <i class="fas fa-angle-double-right"></i></a></p>
                                     <p><span>Publish Date : </span><span> <?=date('F j, Y',strtotime($blogs['entry_date']))?></span></p>
                                
                                    </div>
                            </div>
                        </div>
                    
                    </div>
                    <?php endif; endforeach; ?>
                 
                    
                   
                     <div class="see_more">
                        <a href="blog.php">See More</a>
                     </div>
                </div></div>
               </div>
        </div>
        </section>
        <!-- ================  Blog's section end  ==================== -->
   <!-- ================  Hire me section start  ==================== -->
   <section id="hire__me__section">
   <div class="container">
       <div class="row">
           <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500"><div class="hire__text">
               <h2>You can hire me with trust</h2>
               <h4>You will get best work form me</h4>
           </div></div>
           <div class="col-lg-2" data-aos="zoom-in" data-aos-duration="1500"><div class="hire__option">
               <a href="#">Hire me in Fiverr</a>
           </div></div>
           <div class="col-lg-2" data-aos="zoom-in" data-aos-duration="1500"><div class="hire__option">
            <a href="#">Hire me in Upwork</a>
           </div></div>
           
           <div class="col-lg-2" data-aos="zoom-in" data-aos-duration="1500"><div class="hire__option">
            <a href="#">Hire me in Direct</a>
           </div></div>
       </div>
   </div>
   </section>
   <!-- ================  Hire me section end  ==================== -->
   <!-- ================  testimonial section start  ==================== -->
   <section id="testimonial__section">
   <div class="container">
    <div class="title" data-aos="zoom-in" data-aos-duration="1500">
        <h1>Testimonial</h1>
        <h2>What Clients Say</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam exercitationem eos
             nesciunt mollitia nulla nihil quasi quod doloremque cumque obcaecati.</p>
    </div>
       <div class="row">

       <div class="col-lg-4 col-md-4" data-aos="zoom-in-right" data-aos-duration="1500">
           <div class="testimonial__img__slider">
        <!-- =============== php code start =============== -->

                <?php  foreach($mysqli_experience_testimonial_query as $value):  ?>
               <div class="testimonial__img">
                   <div class="img"><img style="width: 100%;height:400px !important;" src="./backend/uploads/testimonial_img/<?=$value['image_name']?>" alt="testimonial/1.jpg"></div>
                   <h4><?=$value['name']?></h4>
                   <h6><?=$value['occupation']?></h6>
               </div>
               <?php endforeach; ?>

            <!-- =============== php code end =============== -->
         
           </div>
        </div>
        <div class="col-lg-7 col-md-8 ms-auto">
            <div class="testi__symble">
                &#8221;  
            </div>
            <div class="testi__text__slider">

           <!-- =============== php code start =============== -->

            <?php  foreach($mysqli_experience_testimonial_query as $value):  ?>
               <div class="testimonial__txt">
                <div class="testi__icon">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p><?=$value['client_say']?></p> 
                  <h5><span><?=date("F j, Y",strtotime($value['entry_date']));?></span></h5>   
               </div>
            <?php endforeach; ?>
            <!-- =============== php code end =============== -->

        </div>
        </div>


       
       </div>
   </div>
   </section>
   <!-- ================  testimonial section end  ==================== -->

   
   <?php  require_once "./backend/includes/index_footer.php"; ?>
