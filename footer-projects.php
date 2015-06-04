<?php
/**
 * The template for displaying the single projects footer.
 * Contains the closing of the main element and all content after
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

	<footer class="next-project">

		<a href="<?php echo get_field('next_project_link'); ?>">

			<div class="teaser">

				<span><?php echo get_field('next_project'); ?></span>

			</div>

			<div>

				<span>Next Project</span>

			</div>

		</a>

	</footer>

</main>

<?php wp_footer(); ?>
</body>
</html>