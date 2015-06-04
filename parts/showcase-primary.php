<?php
/**
 * Template part for displaying the primary project preview showcase.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<h2 class="section-heading">Projects</h2>

<ul class="module projects container">

	<?php if(get_field('project_previews_primary_showcase')): ?>

		<?php while(has_sub_field('project_previews_primary_showcase')): ?>

			<li>

				<div class="project-preview">

					<div class="mobile mobile--preview">

						<div class="top">

							<div class="camera">
								<span></span>
							</div>

							<div class="speaker">
								<span></span>
							</div>

						</div>

						<?php 

	                        $image = get_sub_field('mobile_preview_image');
	                        $size = 'mobile_preview_image';

	                        if( $image ) {

	                            echo wp_get_attachment_image( $image, $size );

	                        }

	                    ?>

						<div class="bottom">

							<div>
								<span></span>
							</div>

						</div>

					</div>

					<div class="browser browser--small">

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

				</div>

				<div class="project-info">

					<h3><?php the_sub_field('project_title'); ?></h3>

					<p><?php the_sub_field('project_description'); ?></p>

					<a href="<?php the_sub_field('project_link'); ?>" class="button button--large">View Project</a>

				</div>

			</li>

		<?php endwhile; ?>

	<?php endif; ?>	

</ul>