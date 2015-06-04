<!DOCTYPE html>
<html lang="en">
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

		<?php include(TEMPLATEPATH . '/parts/nav/project-nav.php'); ?>

	</header>