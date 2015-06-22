<?php
/**
 * Template part for displaying the page splash.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<?php if ( is_front_page() || is_post_type_archive('projects') ) { ?>

	<div class="splash splash--home">

		<div class="page-intro">

			<h6 class="lead-in animated fadeInUp">The online portfolio of</h6>
			<h1 class="animated fadeInUp"><?php bloginfo( 'name' ); ?></h1>
			<h6 class="tagline animated bounceIn"><?php bloginfo( 'description' ); ?></h6>
			<span class="hr animated fadeInUp"></span>

		</div>

	</div>

<?php } elseif ( is_404() ) { ?>

	<div class="splash splash--home">

		<div class="page-intro">

			<h1>404 Error</h1>
			<h6 class="tagline">Whoops! Unfortunately, the page you&apos;ve requested cannot be found.</h6>
			<span class="hr"></span>

		</div>

	</div>

<?php } else { ?>

	<div class="splash splash--project">

		<div class="page-intro">

			<?php 

                $image = get_field('project_logo');

                if( $image ) {

                    echo wp_get_attachment_image( $image, $size, false, $attr = array( 'class'	=> "animated fadeIn" ) );

                }

            ?>

			<h1 class="project-description animated fadeIn"><?php echo get_field('project_description'); ?></h1>

		</div>

	</div>

<?php } ?>