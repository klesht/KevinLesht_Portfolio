<?php
/**
 * Template Name: Front Page
 * @package WordPress
 * @subpackage Kevin Lesht
 */

get_header(); ?>

	<?php get_template_part( 'parts/splash' ); ?>

	<main class="main" role="main">

		<div id="projects">

			<?php get_template_part( 'parts/showcase', 'primary' ); ?>

			<?php get_template_part( 'parts/showcase', 'secondary' ); ?>

		</div>

<?php get_footer(); ?>