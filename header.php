<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
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

	<header class="top-navigation">

		<?php include(TEMPLATEPATH . '/parts/nav/home-header-nav.php'); ?>

	</header>