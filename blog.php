<?php  require_once "./backend/includes/index_header.php"; ?>
      <?php 
      
      $id = $_GET['id'];

      $select_blog = "SELECT * FROM blogs where id=$id";
      $mysqli_query = mysqli_query($db_connect,$select_blog);
      $blogs_info = mysqli_fetch_assoc($mysqli_query);


      ?>

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
                <div class="col-lg-8"><div class="main_blog">
                    <div class="img"><img src="./backend/uploads/blogs_image/<?=$blogs_info['blog_image_name']?>" alt="<?=$blogs_info['blog_image_name']?>"></div>
                   <div class="blog_text">
                     <p><span>Publish Date : </span><span> <?=date("F j, Y",strtotime($blogs_info['entry_date']));?></span></p>
                      <h4><?=$blogs_info['blog_title']?></h4>
                      <p><?=$blogs_info['blog_paragraph']?></a></p>
                   </div>
                </div></div>
                <div class="col-lg-4">
                  <div class="blog_list">
                    <h4>All Blog's</h4>
                    <?php foreach($mysqli_recent_blogs_query as $blogs): ?>
                    <?php if($blogs['id']!=$id): ?>
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
                        <a href="#">See More</a>
                     </div>
                </div>
                </div>
               </div>
        </div>
        </section>
        <!-- ================  Blog's section end  ==================== -->



   
   <!-- ================  footer section start  ==================== -->

   <?php  require_once "./backend/includes/index_footer.php"; ?>