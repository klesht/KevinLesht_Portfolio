<?php

// Basic support
function kevinlesht_theme_support() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'mobile-preview-image', 300, 534, true );
    add_image_size( 'browser-preview-image', 780, 488, true );
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

?>