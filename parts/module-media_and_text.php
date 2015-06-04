<?php
/**
 * Template part for displaying the media and text module.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

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

	<?php } if(get_sub_field('asset_type') == "Browser") { ?>

		<div class="browser">

			<div class="top">

				<ul><li></li><li></li><li></li></ul>
				<span><?php the_sub_field('page_url'); ?></span>

			</div>

			<div class="viewport">

				<?php 

			        $image = get_sub_field('browser_image');

			        if( $image ) {

			            echo wp_get_attachment_image( $image, 'full' );

			        }

			    ?>

			</div>

		</div>

	<?php } ?>

	<div>

		<h3><?php the_sub_field('module_title'); ?></h3>

		<p><?php the_sub_field('module_text'); ?></p>

	</div>

</div>