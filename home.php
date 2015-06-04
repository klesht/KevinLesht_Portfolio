<?php
/**
 * Template Name: Blog
 * @package WordPress
 * @subpackage Kevin Lesht
 */

get_header('aux'); ?>

	<main>

		<section class="container--small">

			<h1>Blog</h1>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" class="module" role="article">

					<h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

					<div class="meta">Published <?php the_date(); ?>, by <?php the_author(); ?></div>

					<?php the_excerpt(); ?>

					<a href="<?php the_permalink() ?>" class="button button--small button--fixed-right">Continue Reading</a>

				</article>

			<?php endwhile; endif; ?>

			<?php the_posts_navigation(); ?>

		</section>

<?php get_footer(); ?>