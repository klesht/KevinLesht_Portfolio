<?php
/**
 * Template Name: Front Page
 * @package WordPress
 * @subpackage Kevin Lesht
 */

get_header(); ?>

	<?php include(TEMPLATEPATH . '/parts/splash.php'); ?>

	<main>

		<section id="projects">

			<h2 class="section-heading">Projects</h2>

			<?php include(TEMPLATEPATH . '/parts/project-previews-primary-showcase.php'); ?>

			<h2 class="section-heading">More Projects</h2>

			<?php include(TEMPLATEPATH . '/parts/project-previews-secondary-showcase.php'); ?>

		</section>

<?php get_footer(); ?>