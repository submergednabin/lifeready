<?php
	get_header();
?>

<?php 
	if (have_posts()): 
		while(have_posts()): the_post();?>
	<div class="banner-container">
	   <a href="#"><figure><img class="img-responsive" src="images/banner.jpg" alt=""></figure></a>
    	<div class="container">
         <div class="row">
         <div class="banner-detail">
           <h1>WE ARE LIFE BASED EDUCATION COMPANY</h1>
            <p>We’re here to close the gap between academic and practical education</p>
            <button type="button" class="btn btn-default">FIND OUT MORE</button>
         
         </div>
          </div>
        </div>
    </div>
    <div class="about-container">
     <div class="container">
     <div class="row">
     <div class="col-sm-12 about">
       <h2><?php the_title();?></h2>
       <p><?php the_content();?></p>
     </div>
     </div>
   </div>
   </div>
   <?php endwhile;?>
   <?php endif;?>
   <?php get_footer();?>