<?php

// Basic support
function kevinlesht_theme_support() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'mobile-preview-image', 300, 534, true );
    add_image_size( 'browser-preview-image', 780, 488, true );
    add_image_size( 'browser-image', 1170 );
}
add_action('after_setup_theme','kevinlesht_theme_support');
add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );

// Load CSS
function kevinlesht_styles() {
  wp_register_style( 'global', get_template_directory_uri() . '/scss/global.min.css');
  wp_register_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Josefin+Sans:400,600|Ubuntu:300,400,500');
  wp_register_style( 'font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

  wp_enqueue_style( 'global' );
  wp_enqueue_style( 'google-fonts' );
  wp_enqueue_style( 'font-awesome' );

}
add_action('wp_enqueue_scripts', 'kevinlesht_styles');

// Load JS
function kevinlesht_js() {
    if (!is_admin()) {
      wp_deregister_script('jquery');
      wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null);
      wp_register_script('main', get_template_directory_uri() . '/js/main.js', '','1.0', TRUE);

      wp_enqueue_script('jquery');
      wp_enqueue_script('main');

    }
}
add_action('init', 'kevinlesht_js');

// Register Custom Post Type
function projects_post_type() {

	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Projects', 'text_domain' ),
		'name_admin_bar'      => __( 'Post Type', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Project:', 'text_domain' ),
		'all_items'           => __( 'All Projects', 'text_domain' ),
		'add_new_item'        => __( 'Add New Project', 'text_domain' ),
		'add_new'             => __( 'New Project', 'text_domain' ),
		'new_item'            => __( 'New Item', 'text_domain' ),
		'edit_item'           => __( 'Edit Project', 'text_domain' ),
		'update_item'         => __( 'Update Project', 'text_domain' ),
		'view_item'           => __( 'View Project', 'text_domain' ),
		'search_items'        => __( 'Search projects', 'text_domain' ),
		'not_found'           => __( 'No projects found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No projects found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'projects', 'text_domain' ),
		'description'         => __( 'Single Project Pages', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail' ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'projects', $args );

}

// Hook into the 'init' action
add_action( 'init', 'projects_post_type', 0 );

?>