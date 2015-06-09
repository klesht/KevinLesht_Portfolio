<?php
/**
 * The index template.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

get_header('aux'); ?>

	<main role="main">

		<div class="container">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'parts/content' ); ?>

			<?php endwhile; endif; ?>

		</div>

<?php get_footer(); ?>