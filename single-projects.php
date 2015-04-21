<?php
/**
 * @package WordPress
 * @subpackage Kevin Lesht
 */

get_header(); ?>

		<?php include(TEMPLATEPATH . '/parts/splash.php'); ?>

		<main>

			<section class="container">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h2 class="section-heading">Overview</h2>

					<div class="project-description">

						<?php the_content(); ?>

						<?php the_field('next_project_teaser'); ?>

					</div>
					
				<?php endwhile; endif; ?>

				<?php if( have_rows('project_case_study') ): ?>

					<?php while ( have_rows('project_case_study') ) : the_row(); ?>

						<?php if( get_row_layout() == 'full_width_browser_module' ): ?>

							<?php include(TEMPLATEPATH . '/parts/modules/full_width_browser_module.php'); ?>

						<?php elseif( get_row_layout() == 'media_and_text_module' ): ?>

							<?php include(TEMPLATEPATH . '/parts/modules/media_and_text_module.php'); ?>

						<?php elseif( get_row_layout() == 'mobile_and_text_module' ): ?>

							<?php include(TEMPLATEPATH . '/parts/modules/mobile_and_text_module.php'); ?>

						<?php elseif( get_row_layout() == 'browser_showcase_module' ): ?>

							<?php include(TEMPLATEPATH . '/parts/modules/browser_showcase_module.php'); ?>							

						<?php endif; ?>

					<?php endwhile; ?>

					<?php else : ?>

						<h6>No layouts found.</h6>

				<?php endif; ?>	

			</section>

<?php get_footer(); ?>