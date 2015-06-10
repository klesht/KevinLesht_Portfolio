<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the main element and all content after
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

	<footer class="index-footer">

		<div class="container container--large">

			<nav>
				<ul>
					<?php get_template_part( 'parts/nav', 'social' ); ?>
				</ul>
			</nav>

			<p>Looking for more? Check out my latest demos on <a href="#">Codepen</a> or take a look at the source for my portfolio on <a href="#">Github</a> <em>(it's a custom WordPress theme).</em></p>
			
		</div>

	</footer>

</main>

<?php get_template_part( 'parts/contact', 'modal' ); ?>
<?php wp_footer(); ?>
</body>
</html>