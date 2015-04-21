<?php if(is_front_page() ) { ?>

	<section class="splash splash--home">

		<div class="page-intro">

			<h6 class="lead-in">The online portfolio of</h6>
			<h1>Kevin Lesht</h1>
			<h6 class="tagline">User Experience Designer &amp; Front-End Developer</h6>
			<hr>

		</div>

	</section>

<?php } else { ?>

	<section class="splash splash--project">

		<div class="page-intro">

			<h6 class="lead-in">The online portfolio of</h6>
			<h1><?php the_title(); ?></h1>
			<h6 class="tagline">User Experience Designer &amp; Front-End Developer</h6>
			<hr>

		</div>

	</section>

<?php } ?>