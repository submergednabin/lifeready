<?php
/**
 * Register a custom meta box type
 * 
 */
add_action( 'init', 'create_Slider_post' );

function create_Slider_post() {
	$labels = array(
		'name'               => 'Sliders',
		'singular_name'      => 'Slider',
		'menu_name'          => 'Sliders',
		'name_admin_bar'     => 'Slider',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Slider',
		'new_item'           => 'New Slider',
		'edit_item'          => 'Edit Slider',
		'view_item'          => 'View Slider',
		'all_items'          => 'All Sliders',
		'search_items'       => 'Search Sliders',
		'parent_item_colon'  => 'Parent Sliders:',
		'not_found'          => 'No Sliders found.',
		'not_found_in_trash' => 'No Sliders found in Trash.'
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'flex-slider' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slide' ),
		'capability_type'    => 'page',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array('title','thumbnail','page-attributes'),
	);

	register_post_type( 'Slider', $args );
}
