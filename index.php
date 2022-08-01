<?php  require_once "./backend/includes/index_header.php"; ?>

   <!-- ================  banner section start  ==================== -->
   <section id="banner__section">
   <div class="container">
       <div class="row">
           <div class="col-lg-6"><div class="banner__txt" data-aos="fade-right" data-aos-duration="1500">
               <h6>Introduction</h6>
               <h4>I'm Sultan</h4>
               <h3>a professional <span class="name__one">Web & App</span>
                <span class="name__two">Developer</span></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, molestias? Odio
                     inventore rerum accusamus officiis minima iste
                     hic eius temporibus laboriosam. Ullam eos quod dolores.</p>
                <div class="dflex">
                    <div class="experience">
                       <p> <span>8+</span>Years of experience</p>
                    </div>
                    <div class="project">
                       <p> <span>1250+</span>Project Complete</p>
                    </div>
                </div>
                
                <div class="download">
                    <a href="#">Download Resume</a>
                </div>
           </div></div>
           <div class="col-lg-6 m-auto"><div class="banner__img" data-aos="fade-left" data-aos-duration="1500">
               <img src="./frontend/images/banner/home-banner.jpg" alt="home-banner.jpg">
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
           <div class="col-lg-4 col-md-4" data-aos="zoom-in-right" data-aos-duration="1500"><div class="testimonial__img__slider">
               <div class="testimonial__img">
                   <div class="img"><img src="./frontend/images/testimonial/1.jpg" alt="testimonial/1.jpg"></div>
                   <h4>Ladem Shekh</h4>
                   <h6>Ceo of LTG ltd.</h6>
               </div>
               <div class="testimonial__img">
                <div class="img"><img src="./frontend/images/testimonial/1.jpg" alt="testimonial/1.jpg"></div>
                <h4>Ladem Shekh</h4>
                <h6>Ceo of LTG ltd.</h6>
            </div>
            <div class="testimonial__img">
                <div class="img"><img src="./frontend/images/testimonial/1.jpg" alt="testimonial/1.jpg"></div>
                <h4>Ladem Shekh</h4>
                <h6>Ceo of LTG ltd.</h6>
            </div>
            <div class="testimonial__img">
                <div class="img"><img src="./frontend/images/testimonial/1.jpg" alt="testimonial/1.jpg"></div>
                <h4>Ladem Shekh</h4>
                <h6>Ceo of LTG ltd.</h6>
            </div>
           </div>
        </div>
        <div class="col-lg-7 col-md-8 ms-auto">
            <div class="testi__symble">
                &#8221;
               
            </div>
            <div class="testi__text__slider">
            <div class="testimonial__txt">
                <div class="testi__icon">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro cumque eum a laudantium.
                     Reiciendis voluptatum hic sed harum molestias ea nisi, aperiam, corporis assumenda ab placeat sunt d
                     eleniti architecto, neque dolores porro suscipit dignissimos dicta asperiores alias? Eius, cupiditate in!</p> 
                  <h5><span>23 January 2022</span></h5>   
            </div>
            <div class="testimonial__txt">
                <div class="testi__icon">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro cumque eum a laudantium.
                     Reiciendis voluptatum hic sed harum molestias ea nisi, aperiam, corporis assumenda ab placeat sunt d
                     eleniti architecto, neque dolores porro suscipit dignissimos dicta asperiores alias? Eius, cupiditate in!</p> 
                  <h5><span>23 January 2022</span></h5>   
            </div>
            <div class="testimonial__txt">
                <div class="testi__icon">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro cumque eum a laudantium.
                     Reiciendis voluptatum hic sed harum molestias ea nisi, aperiam, corporis assumenda ab placeat sunt d
                     eleniti architecto, neque dolores porro suscipit dignissimos dicta asperiores alias? Eius, cupiditate in!</p> 
                  <h5><span>23 January 2022</span></h5>   
            </div>
            <div class="testimonial__txt">
                <div class="testi__icon">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro cumque eum a laudantium.
                     Reiciendis voluptatum hic sed harum molestias ea nisi, aperiam, corporis assumenda ab placeat sunt d
                     eleniti architecto, neque dolores porro suscipit dignissimos dicta asperiores alias? Eius, cupiditate in!</p> 
                  <h5><span>23 January 2022</span></h5>   
            </div>
        </div>
        </div>
       </div>
   </div>
   </section>
   <!-- ================  testimonial section end  ==================== -->

   
   <?php  require_once "./backend/includes/index_footer.php"; ?>
