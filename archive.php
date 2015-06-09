<?php
/**
 * The archive template.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

get_header('aux'); ?>

	<main role="main">

		<div class="container--small">

			<?php if ( have_posts() ) : ?>

				<?php
					the_archive_title( '<h1>', '</h1>' );
					the_archive_description( '<div class="meta">', '</div>' );
				?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'parts/content' ); ?>

			<?php endwhile; endif; ?>

		</div>

<?php get_footer(); ?>