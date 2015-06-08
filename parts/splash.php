<?php
/**
 * Template part for displaying the page splash.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<?php if ( is_front_page() || is_post_type_archive('projects') ) { ?>

	<section class="splash splash--home">

		<div class="page-intro">

			<h6 class="lead-in">The online portfolio of</h6>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h6 class="tagline"><?php bloginfo( 'description' ); ?></h6>
			<hr>

		</div>

	</section>

<?php } else { ?>

	<section class="splash splash--project">

		<div class="page-intro">

			<?php 

                $image = get_field('project_logo');

                if( $image ) {

                    echo wp_get_attachment_image( $image, $size, false, $attr = array( 'class'	=> "animated fadeInDown" ) );

                }

            ?>

			<h1 class="project-description animated fadeInUp"><?php echo get_field('project_description'); ?></h1>

		</div>

	</section>

<?php } ?>