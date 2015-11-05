<?php
/**
 * Register a custom meta box type
 * 
 */
add_action( 'init', 'create_link_post' );

function create_link_post() {
	$labels = array(
		'name'               => _x( 'links', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'link', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'links', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'link', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'link', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New link', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New link', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit link', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View link', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All links', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search links', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent links:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No links found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No links found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'link' ),
		'capability_type'    => 'page',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title','editor' )
	);

	register_post_type( 'link', $args );
}


add_action( 'add_meta_boxes', 'adding_new_metaabox' );              
function adding_new_metaabox() 
    {   
    	add_meta_box('custom_title', 'Second Title', 'custom_title_input_function', 'page', 'normal', 'high');

        add_meta_box('html_myid_61_section', 'Second Editor', 'my_output_function','page',
		'normal',
		'low');
    }

function custom_title_input_function() {
	global $post;
	echo '<input type="hidden" name="custom_title_input_hidden" id="custom_title_input_hidden" value="'.wp_create_nonce('custom-title-nonce').'" />';
	echo '<input type="text" name="custom_title_input" id="custom_title_input" style="width:100%;" value="'.get_post_meta($post->ID,'_custom_title',true).'" />';
}

function my_output_function( $post ) 
    {
    //so, dont ned to use esc_attr in front of get_post_meta
    $valueeee2=  get_post_meta($_GET['post'], 'SMTH_METANAME_VALUE' , true ) ;
    
    wp_editor( htmlspecialchars_decode($valueeee2), 'mettaabox_ID_stylee', $settings = array('textarea_name'=>'MyInputNAME') );
    }


function save_my_postdata( $post_id ) 
{                   
    if (!empty($_POST['MyInputNAME']) || !empty($_POST['custom_title_input']))
        {
        $customTitle = $_POST['custom_title_input'];
        update_post_meta($post_id, '_custom_title', $customTitle );
        $datta=htmlspecialchars($_POST['MyInputNAME']);
        update_post_meta($post_id, 'SMTH_METANAME_VALUE', $datta );

        }
}
add_action( 'save_post', 'save_my_postdata' );  
