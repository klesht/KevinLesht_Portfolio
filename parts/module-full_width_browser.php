<?php
/**
 * Template part for displaying the full width browser module.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<div class="module browser">

	<div class="top">

		<ul><li></li><li></li><li></li></ul>
		<span><?php the_sub_field('page_url'); ?></span>

	</div>

	<?php 

        $image = get_sub_field('browser_image');
        $size = 'browser_image';

        if( $image ) {

            echo wp_get_attachment_image( $image, $size );

        }

    ?>

</div>

<?php if( get_sub_field('caption') ): ?>

    <div class="module caption">

        <?php the_sub_field('caption'); ?>

    </div>

<?php endif; ?>