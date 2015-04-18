<div class="module split inset">

	<div>

		<?php 

	        $image = get_sub_field('media');

	        if( $image ) {

	            echo wp_get_attachment_image( $image, 'full' );

	        }

	    ?>

	</div>

	<div>

		<h3><?php the_sub_field('module_title'); ?></h3>

		<p><?php the_sub_field('module_text'); ?></p>

	</div>

</div>