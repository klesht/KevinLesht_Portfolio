<div class="module mobile-preview">

	<div>

		<h3><?php the_sub_field('module_title'); ?></h3>

		<p><?php the_sub_field('module_text'); ?></p>

	</div>

	<div>

		<ul>

			<li>

				<div class="mobile mobile--large">
						
					<div class="top">
						
						<div class="camera">
							<span></span>
						</div>

						<div class="speaker">
							<span></span>
						</div>

					</div>

					<div class="viewport">

						<?php 

					        $image = get_sub_field('mobile_image_1');

					        if( $image ) {

					            echo wp_get_attachment_image( $image, 'full' );

					        }

					    ?>

					</div>

					<div class="bottom">
						
						<div>
							<span></span>
						</div>

					</div>

				</div>

			</li>

			<li>

				<div class="mobile mobile--large">
						
					<div class="top">

						<div class="camera">
							<span></span>
						</div>

						<div class="speaker">
							<span></span>
						</div>

					</div>

					<div class="viewport">

						<?php 

					        $image = get_sub_field('mobile_image_2');

					        if( $image ) {

					            echo wp_get_attachment_image( $image, 'full' );

					        }

					    ?>

					</div>

					<div class="bottom">
						
						<div>
							<span></span>
						</div>

					</div>

				</div>

			</li>

		</ul>									

	</div>

</div>