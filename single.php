<?php
/**
 * The template for displaying all single posts.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

get_header('blog'); ?>

	<main role="main">

		<div class="container container--small">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'parts/content', 'single' ); ?>

			<?php endwhile; ?>

		</div>

<?php get_footer(); ?>