<?php
/**
 * The default header template part.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

<?php wp_head(); ?>
    <?php if ( is_post_type_archive('projects') ) { ?>
	   	<style>
	    	.top-navigation nav a {
	    		color: #000;
	    	}
	    </style>
    <?php } else { ?>
	    <style>
	    	.top-navigation nav a {
	    		color: <?php echo get_field('project_nav_color'); ?>;
	    	}
	    </style>
    <?php } ?>
</head>
<body <?php body_class(); ?>>

	<header class="top-navigation top-navigation--fixed">

		<?php get_template_part( 'parts/nav' ); ?>

	</header>