<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

<?php wp_head(); ?>
   	<style>
    	.top-navigation nav a {
    		color: #000;
    	}
    </style>
</head>
<body <?php body_class(); ?>>

	<?php if ( is_404() ) { ?>

		<header class="top-navigation top-navigation--fixed">

			<?php include(TEMPLATEPATH . '/parts/nav/aux-header-nav.php'); ?>

		</header>

	<?php } else { ?>

		<header class="top-navigation">

			<?php include(TEMPLATEPATH . '/parts/nav/aux-header-nav.php'); ?>

		</header>

	<?php } ?>