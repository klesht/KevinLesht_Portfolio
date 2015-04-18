<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="top-navigation">

		<?php if(is_front_page() ) {

			include(TEMPLATEPATH . '/parts/nav/home-nav.php');

		} else {

			include(TEMPLATEPATH . '/parts/nav/project-nav.php');

		} ?>

	</header>