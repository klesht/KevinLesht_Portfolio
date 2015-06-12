<?php
/**
 * The template for displaying the project archives.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

get_header(); ?>

	<?php include(TEMPLATEPATH . '/parts/splash.php'); ?>

	<main class="main" role="main">

		<div id="projects">
		<?php $custom_post_type = 'projects'; $args=array( 'post_type' => $custom_post_type, 'order' => 'ASC' ); ?>
		<?php $projects_query = new WP_Query($args); if( $projects_query->have_posts() ) { ?>

			<h2 class="section-heading"><span></span>Projects<span></span></h2>

			<ul class="module more-projects container container--large">
			<?php while ($projects_query->have_posts()) : $projects_query->the_post(); ?>

				<li>

					<div class="browser browser--large">

						<div class="top">
							<ul><li></li><li></li><li></li></ul>
							<span><?php echo get_post_meta($post->ID, "_url", true); ?></span>

						</div>

						<?php the_post_thumbnail(); ?> 

					</div>

					<h3><?php the_title(); ?></h3>
					<a href="<?php the_permalink() ?>" class="button button--large">View Project</a>

				</li>

			<?php endwhile; } ?>
			</ul>

		<?php wp_reset_query(); ?>
		</div>

<?php get_footer(); ?>