<?php 
/* Registering the css*/
add_action( 'wp_enqueue_scripts', 'load_css' );
function load_css() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'style', get_stylesheet_uri() . '/css/flexslider.css' );

}

/* Registering the javascript*/
add_action('wp_enqueue_scripts', 'load_js' );
function load_js() {
	wp_register_script( 'global-js', get_template_directory_uri() .'/js/global.js', array( 'jquery' ), '1.0', true );
	wp_register_script( 'flexslider', get_template_directory_uri() .'/js/jquery.flexslider.js', array('jquery'), '2.5.0', true );
	wp_register_script( 'flexslider-min-js', get_template_directory_uri() .'/js/jquery.flexslider.js', array('jquery'), '2.5.0', true );

	wp_enqueue_script('global-js');
	wp_enqueue_script('flexslider');
	wp_enqueue_script('flexslider-min-js');

}	

/* Including the custom-post-types box*/
require get_template_directory().'/inc/custom-post-meta-editor.php';
require get_template_directory().'/inc/custom-post-meta-slider.php';


/* Add the theme banner*/
add_theme_support( 'post-thumbnails' );
add_image_size('slide', 540, 300, true );

//Register Navigation Menus

register_nav_menus( array(
	'primary'=> __( 'Primary Menu' ),
) 
);


 /*custom header adding*/

$args = array(
	'width'         => 980,
	'height'        => 60,
	'default-image' => get_template_directory_uri() . '/images/logo.png',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

