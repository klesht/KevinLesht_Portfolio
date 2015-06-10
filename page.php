<?php
/**
 * The template for displaying all default pages.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

get_header('aux'); ?>

	<main role="main">

		<div class="container container--small">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'parts/content', 'page' ); ?>

			<?php endwhile; ?>

		</div>

<?php get_footer(); ?>