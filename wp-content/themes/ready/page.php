<?php 

/*
Template Name: Main Page

*/
?>
<?php
	get_header();
?>
<?php
while( have_posts() ):the_post(); ?>
<div class="banner-container">
<!-- Here banner images will be posted -->
<div class="container">
    <div class="row">
    <div class="banner-detail">
    <h1><!--Here should be banner title--></h1>
    <p><!--Here should be banner caption--></p>

	</div>
    </div>
    </div>
</div>
<div class="about-container">
  <div class="container">
  <div class="row about">	
    <div class="content_item">
     <?php
  $content = get_post_meta(get_the_ID(), 'SMTH_METANAME_VALUE' , true );
    $content = htmlspecialchars_decode($content);
    $content = wpautop( $content );
    echo the_title();
    echo the_content( );
    echo $content;

    $title = get_post_meta(get_the_ID(), '_custom_title' , true );
    $title = htmlspecialchars_decode($title);
    $title = wpautop( $title );
    echo $title;
  ?>
    </div>
  </div>
</div>
</div>
<div class="necessary-container">
 <div class="container">
   <div class="row">
   <div class="col-sm-12 necessary">
    <h2>Are we necessary?</h2>
    <p>Have a look at these photos and you tell us</p>
    <div class="necessary-wrapper">
    <i class="fa fa-caret-left"></i>
   	  <div class="col-sm-8 necessary-img">
   	  	<?php 
   	  		$args = array(

   	  			'post_type'=>'slider',
   	  			'orderby'=> 'menu_order',
   	  			'posts_per_page'=> -1
   	  		);

   	  		$slides = new WP_Query( $args );

   	  		if ( $slides->have_posts() ) : ?>
   	  	<div class="flexslider"><?php
   	  			while ( $slides->have_posts() ) :
   	  			 $slides->the_post();
   	  		?>
		  <ul class="slides">
		    <li data-thumb="slide1-thumb.jpg">
		      <?php the_post_thumbnail( 'slides' );?>
		    </li>
		  </ul>
		<?php endwhile; ?>
		</div>
		<?php
   	  	endif;	
   	  		
   	  	?>
   	  	
         <!-- <a href="#"><figure><img class="img-responsive" src="images/necessary.jpg" alt=""></figure></a> -->
       </div>
       <div class="col-sm-4 necessary-text">
       <h3><?php the_field('slide_title');?></h3>
       
       <p><?php the_field('caption');?></p>
          <!-- <h3>Real Education</h3>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> -->
            <i class="fa fa-caret-right"></i>
       </div>
       </div>
      </div>
    </div>
   </div>
   </div>
<?php endwhile;?>
<?php get_footer(); ?>
