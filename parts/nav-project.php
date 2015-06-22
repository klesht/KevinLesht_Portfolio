<?php
/**
 * Template part for displaying the single project nav.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<nav class="container container--large" role="navigation">

	<a href="<?php echo site_url(); ?>" class="go-home"><?php bloginfo( 'name' ); ?></a>

	<ul>

		<?php if( get_adjacent_post(false, '', true) ) { ?>

		<li><?php previous_post_link('%link', '<span class="fa fa-chevron-left"></span><span class="device-hidden">&nbsp;&nbsp;&nbsp;Last Project</span>'); ?></li>
		
		<?php } else { 
		    $first = new WP_Query('posts_per_page=1&order=DESC&post_type=projects'); $first->the_post();
		    	echo '<li><a href="' . get_permalink() . '"><span class="fa fa-chevron-left"></span><span class="device-hidden">&nbsp;&nbsp;&nbsp;Last Project</span></a></li>';
		  	wp_reset_query();
		}; ?>
		    
		<?php if( get_adjacent_post(false, '', false) ) { ?>

		<li><?php next_post_link('%link', '<span class="device-hidden">Next Project&nbsp;&nbsp;&nbsp;</span><span class="fa fa-chevron-right"></span>'); ?></li>
		
		<?php } else { 
			$last = new WP_Query('posts_per_page=1&order=ASC&post_type=projects'); $last->the_post();
		    	echo '<li><a href="' . get_permalink() . '"><span class="device-hidden">Next Project&nbsp;&nbsp;&nbsp;</span><span class="fa fa-chevron-right"></span></a></li>';
		    wp_reset_query();
		}; ?>

	</ul>

</nav>