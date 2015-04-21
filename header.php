<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

<?php wp_head(); ?>
<?php if ( is_singular( 'projects' ) ) { ?>
    <style>
    	.splash--project {
    		<?php echo get_field('project_splash'); ?>
    	}
	    .teaser {
	    	<?php echo get_field('next_project_teaser'); ?>
	    }
    </style>
<?php } ?>
</head>
<body <?php body_class(); ?>>

	<header class="top-navigation">

		<?php if(is_front_page() ) {

			include(TEMPLATEPATH . '/parts/nav/home-nav.php');

		} else {

			include(TEMPLATEPATH . '/parts/nav/project-nav.php');

		} ?>

	</header>