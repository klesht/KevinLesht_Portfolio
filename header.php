<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

<?php wp_head(); ?>
    <style>
    	.top-navigation nav a {
    		color: <?php echo get_field('project_nav_color'); ?>;
    	}
    </style>
</head>
<body <?php body_class(); ?>>

	<header class="top-navigation">

		<?php include(TEMPLATEPATH . '/parts/nav/home-header-nav.php'); ?>

	</header>