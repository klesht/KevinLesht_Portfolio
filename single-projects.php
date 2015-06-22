<?php
/**
 * The template for displaying all single projects.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

get_header('projects'); ?>

	<?php get_template_part( 'parts/splash' ); ?>

	<main class="main" role="main">

		<div class="container container--large">

			<?php while ( have_posts() ) : the_post(); ?>

				<h2 class="section-heading"><span></span>Overview<span></span></h2>

				<div class="module text">

					<?php the_content(); ?>

				</div>
				
			<?php endwhile; ?>

			<?php if( have_rows('project_case_study') ): while ( have_rows('project_case_study') ) : the_row(); ?>

				<?php if( get_row_layout() == 'full_width_browser_module' ): ?>

					<?php get_template_part( 'parts/module', 'full_width_browser' ); ?>

				<?php elseif( get_row_layout() == 'media_and_text_module' ): ?>

					<?php get_template_part( 'parts/module', 'media_and_text' ); ?>

				<?php elseif( get_row_layout() == 'browser_and_text_module' ): ?>

					<?php get_template_part( 'parts/module', 'browser_and_text' ); ?>

				<?php elseif( get_row_layout() == 'mobile_and_text_module' ): ?>

					<?php get_template_part( 'parts/module', 'mobile_and_text' ); ?>

				<?php elseif( get_row_layout() == 'browser_showcase_module' ): ?>

					<?php get_template_part( 'parts/module', 'browser_showcase' ); ?>

				<?php elseif( get_row_layout() == 'text_module' ): ?>

					<?php get_template_part( 'parts/module', 'text' ); ?>													

			<?php endif; endwhile; ?>

			<?php else : ?>

				<h6>No layouts found.</h6>

			<?php endif; ?>	

		</div>

<?php get_footer('projects'); ?>