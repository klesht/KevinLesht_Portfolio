<?php
/**
 * The blog header template part.
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
   	<style>
    	.top-navigation nav a {
    		color: #000;
    	}
    </style>
</head>
<body <?php body_class(); ?>>

	<header class="top-navigation">

		<?php get_template_part( 'parts/nav', 'blog' ); ?>

	</header>