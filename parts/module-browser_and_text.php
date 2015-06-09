<?php
/**
 * Template part for displaying the browser and text module.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<div class="module split inset">

	<?php if(get_sub_field('asset_type') == "Image") { ?>

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

	<?php } if(get_sub_field('asset_type') == "Video") { ?>

		<div class="browser browser--video">

			<div class="top">

				<ul><li></li><li></li><li></li></ul>
				<span><?php the_sub_field('page_url'); ?></span>

			</div>

			<div class="viewport--video">

				<?php the_sub_field('browser_video'); ?>

			</div>

		</div>

	<?php } ?>

	<div>

		<?php if( get_sub_field('module_title') ): ?>
			
			<h3><?php the_sub_field('module_title'); ?></h3>
		
		<?php endif; ?>

		<?php the_sub_field('module_text'); ?>

	</div>

</div>