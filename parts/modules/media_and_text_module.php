<div class="module split inset">

	<?php if(get_sub_field('asset_type') == "Image") { ?>

		<div>

			<?php 

		        $image = get_sub_field('image');

		        if( $image ) {

		            echo wp_get_attachment_image( $image, 'full' );

		        }

		    ?>

		</div>

	<?php } if(get_sub_field('asset_type') == "Video") { ?>

		<div>

			<?php the_sub_field('video'); ?>

		</div>

	<?php } ?>

	<div>

		<h3><?php the_sub_field('module_title'); ?></h3>

		<p><?php the_sub_field('module_text'); ?></p>

	</div>

</div>