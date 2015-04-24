<div class="module">

	<div class="browser-showcase">

		<div class="browser">

			<div class="top">

				<ul><li></li><li></li><li></li></ul>
				<span><?php the_sub_field('page_url_1'); ?></span>

			</div>

			<?php if(get_sub_field('asset_type') == "Image") { ?>

				<div class="viewport">

					<?php 

				        $image = get_sub_field('browser_image_1');

				        if( $image ) {

				            echo wp_get_attachment_image( $image, 'full' );

				        }

				    ?>

				</div>

			<?php } if(get_sub_field('asset_type') == "Video") { ?>

				<div class="viewport--video">

					<?php the_sub_field('browser_video_1'); ?>

				</div>
			
			<?php } ?>

		</div>

	</div>

	<div class="browser-showcase">

		<div class="browser">

			<div class="top">

				<ul><li></li><li></li><li></li></ul>
				<span><?php the_sub_field('page_url_2'); ?></span>

			</div>

			<?php if(get_sub_field('asset_type_2') == "Image") { ?>

				<div class="viewport">

					<?php 

				        $image = get_sub_field('browser_image_2');

				        if( $image ) {

				            echo wp_get_attachment_image( $image, 'full' );

				        }

				    ?>

				</div>

			<?php } if(get_sub_field('asset_type_2') == "Video") { ?>

				<div class="viewport--video">

					<?php the_sub_field('browser_video_2'); ?>

				</div>
			
			<?php } ?>

		</div>

	</div>

</div>