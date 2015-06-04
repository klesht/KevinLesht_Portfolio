<?php
/**
 * Template part for displaying the browser showcase module.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<div class="module">

	<div class="browser-showcase">

		<?php if(get_sub_field('asset_type') == "Image") { ?>

			<div class="browser">

				<div class="top">

					<ul><li></li><li></li><li></li></ul>
					<span><?php the_sub_field('page_url_1'); ?></span>

				</div>

				<div class="viewport">

					<?php 

				        $image = get_sub_field('browser_image_1');

				        if( $image ) {

				            echo wp_get_attachment_image( $image, 'full' );

				        }

				    ?>

				</div>

			</div>

		<?php } if(get_sub_field('asset_type') == "Video") { ?>

			<div class="browser browser--video">

				<div class="top">

					<ul><li></li><li></li><li></li></ul>
					<span><?php the_sub_field('page_url_1'); ?></span>

				</div>

				<div class="viewport--video">

					<?php the_sub_field('browser_video_1'); ?>

				</div>

			</div>

		<?php } ?>

	</div>

	<div class="browser-showcase">

		<?php if(get_sub_field('asset_type_2') == "Image") { ?>

			<div class="browser">

				<div class="top">

					<ul><li></li><li></li><li></li></ul>
					<span><?php the_sub_field('page_url_2'); ?></span>

				</div>

				<div class="viewport">

					<?php 

				        $image = get_sub_field('browser_image_2');

				        if( $image ) {

				            echo wp_get_attachment_image( $image, 'full' );

				        }

				    ?>

				</div>

			</div>

		<?php } if(get_sub_field('asset_type_2') == "Video") { ?>

			<div class="browser browser--video">

				<div class="top">

					<ul><li></li><li></li><li></li></ul>
					<span><?php the_sub_field('page_url_2'); ?></span>

				</div>

				<div class="viewport--video">

					<?php the_sub_field('browser_video_2'); ?>

				</div>

			</div>

		<?php } ?>

	</div>

</div>