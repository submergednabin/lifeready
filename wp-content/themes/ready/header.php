<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo('charset' );?>">
<title><?php bloginfo('name' );?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<?php wp_head();?>
</head>
<body <?php body_class( );?>>
     <div class="header-container">
     	<div class="container">
        	<div class="row">
               <div class="col-sm-12">
                 <div class=" col-sm-2 logo">
                 <a href="<?php echo home_url(); ?>"><figure><img class="img-responsive" src="<?php header_image();?>" alt=""></figure></a>
                 <a href="#"></a>
                 </div><!--logo-->
                  <div class=" col-sm-10 navigation">
                    <?php
                      $args = array(
                        'menu_class'=> 'nav nav-pills',
                        'theme_location'=> 'primary',

                      );
                    ?>
                    <?php wp_nav_menu( $args );?>
                  <!--  <ul class="nav nav-pills">
                     <li class="active"><a href="#">HOME </a></li>
                     <li><a href="#">COMPANY</a></li>
                     <li><a href="#">SERVICS</a></li>
                      <li><a href="#">CONTACT US</a></li>
                   </ul> -->
                  </div>
                </div>
               </div>
            </div>
          </div>