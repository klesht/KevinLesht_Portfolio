<?php if(is_front_page() ) { ?>

	<footer class="index-footer">

		<div class="container">

			<p>Looking for more?  Check out my latest demos on <a href="#">Codepen</a> or take a look at the source for my portfolio on <a href="#">Github</a> <em>(it's a custom WordPress theme).</em></p>
			
		</div>

	</footer>

<?php } else { ?>

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

<?php } ?>

</main>

<?php wp_footer(); ?>
</body>
</html>