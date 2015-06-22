<?php
/**
 * Functions
 * @package WordPress
 * @subpackage Kevin Lesht
 */

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
function kevinlesht_css() {
	wp_register_style( 'global', get_template_directory_uri() . '/scss/global.min.css');
	wp_register_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Ubuntu:300,400,500');
	wp_register_style( 'font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	wp_enqueue_style( 'global' );
	wp_enqueue_style( 'google-fonts' );
	wp_enqueue_style( 'font-awesome' );

}
add_action('wp_enqueue_scripts', 'kevinlesht_css');

// Load JS
function kevinlesht_js() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", FALSE, null, true);
		wp_register_script('main', get_template_directory_uri() . '/js/main.min.js', '','1.0', TRUE);

		wp_enqueue_script('jquery');
		wp_enqueue_script('main');
	}
}
add_action('init', 'kevinlesht_js');

// Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

// Clean up the head
function head_cleanup() {
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	global $wp_widget_factory;
	remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));

	add_filter('use_default_gallery_style', '__return_null');
}
add_action('init', 'head_cleanup');

// Register Custom Post Type
function projects_post_type() {

	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Projects', 'text_domain' ),
		'name_admin_bar'      => __( 'Project', 'text_domain' ),
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
		'rewrite' 			  => array( 'with_front' => false ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon' 		  => 'dashicons-art',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'register_meta_box_cb' => 'add_url_metabox'
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'projects_post_type', 0 );

// Add the Project URL metabox
function add_url_metabox() {
	add_meta_box('project_url', 'Project URL', 'project_url', 'projects', 'side', 'low');
}

// The Project URL Metabox
function project_url() {
	global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="urlmeta_noncename" id="urlmeta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	// Get the url data if its already been entered
	$url = get_post_meta($post->ID, '_url', true);
	
	// Echo out the field
	echo '<input type="text" name="_url" value="' . $url  . '" class="widefat" />';

}

// Save the Metabox Data
function save_url_meta($post_id, $post) {
	
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['urlmeta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.
	$url_meta['_url'] = $_POST['_url'];
	
	// Add values of $url_meta as custom fields
	foreach ($url_meta as $key => $value) { // Cycle through the $events_meta array!
		if( $post->post_type == 'revision' ) return; // Don't store custom data twice
		$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	}

}
add_action('save_post', 'save_url_meta', 1, 2); // save the custom fields

// Custom login
function custom_login() {
	$files = '<link rel="stylesheet" href="'.get_bloginfo('template_directory').'/scss/login.min.css" />';
	echo $files;
}
add_action('login_head', 'custom_login');

add_filter( 'login_headerurl', 'custom_login_header_url' );
function custom_login_header_url($url) {
    return home_url( $path, $scheme );
}

function kevinlesht_login_logo_url_title() {
    return $bloginfo = get_bloginfo( $show, $filter );
} 
add_filter( 'login_headertitle', 'kevinlesht_login_logo_url_title' );

// removes the WP logo and links from the admin bar
function annointed_admin_bar_remove() {
    global $wp_admin_bar;

    /* Remove their stuff */
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

?>