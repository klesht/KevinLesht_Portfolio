<?php
/**
 * Template Name: Blog
 * @package WordPress
 * @subpackage Kevin Lesht
 */

get_header('aux'); ?>

	<main role="main">

		<div class="container container--small">

			<?php if ( have_posts() ) : ?>

				<h1>Blog</h1>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'parts/content' ); ?>

			<?php endwhile; endif; ?>

		</div>

<?php get_footer(); ?>