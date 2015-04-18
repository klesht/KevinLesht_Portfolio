<?php if(is_front_page() ) {

	echo '<section class="splash home-splash">

			<div class="page-intro">

				<h6 class="lead-in">The online portfolio of</h6>
				<h1>Kevin Lesht</h1>
				<h6 class="tagline">User Experience Designer &amp; Front-End Developer</h6>
				<hr>

			</div>

		</section>';

} else {

	echo '<section class="splash codeoncamera-splash">

			<div class="page-intro">

				<h6 class="lead-in">The online portfolio of</h6>
				<h1>Code on Camera</h1>
				<h6 class="tagline">User Experience Designer &amp; Front-End Developer</h6>
				<hr>

			</div>

		</section>';

} ?>