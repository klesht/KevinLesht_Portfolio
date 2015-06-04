<?php
/**
 * Template Name: Single Blog Post
 * @package WordPress
 * @subpackage Kevin Lesht
 */

get_header('blog'); ?>

	<main>

		<section class="container--small">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" class="module" role="article">
					<h1><?php the_title(); ?></h1>
					<hr>

					<?php the_content(); ?>

				</article>

			<?php endwhile; endif; ?>

		</section>

<?php get_footer(); ?>