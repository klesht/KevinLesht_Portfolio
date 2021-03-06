<?php
/**
 * The projects header template part.
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
    		color: <?php echo get_field('project_nav_color'); ?>;
    	}
    	.splash--project {
    		<?php echo get_field('project_splash'); ?>
    	}
    	.splash .page-intro .project-description {
			color: <?php echo get_field('project_description_color'); ?>;
		}
	    .teaser {
	    	<?php echo get_field('next_project_teaser'); ?>
	    }
	    .next-project div:first-child span {
	    	color: <?php echo get_field('next_project_teaser_nav_color'); ?>;
	    }
    </style>
</head>
<body <?php body_class(); ?>>

	<header class="top-navigation top-navigation--fixed">

		<?php get_template_part( 'parts/nav', 'project' ); ?>

	</header>