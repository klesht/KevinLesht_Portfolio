<?php
/**
 * Template part for displaying the secondary project preview showcase.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<h2 class="section-heading">More Projects</h2>

<ul class="module more-projects container container--large">

	<?php if(get_field('project_previews_secondary_showcase')): ?>

		<?php while(has_sub_field('project_previews_secondary_showcase')): ?>

			<li>

				<div class="browser browser--large">

					<div class="top">
						<ul><li></li><li></li><li></li></ul>
						<span><?php the_sub_field('project_url'); ?></span>

					</div>

					<?php 

                        $image = get_sub_field('browser_preview_image');
                        $size = 'browser_preview_image';

                        if( $image ) {

                            echo wp_get_attachment_image( $image, $size );

                        }

                    ?>

				</div>

				<h3><?php the_sub_field('project_title'); ?></h3>
				<a href="<?php the_sub_field('project_link'); ?>" class="button button--large">View Project</a>

			</li>

		<?php endwhile; ?>

	<?php endif; ?>	

</ul>