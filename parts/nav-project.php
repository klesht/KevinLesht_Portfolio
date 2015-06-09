<?php
/**
 * Template part for displaying the single project nav.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<nav class="container" role="navigation">

	<a href="<?php echo site_url(); ?>" class="go-home">Kevin Lesht</a>

	<ul>

		<?php if( get_adjacent_post(false, '', true) ) { ?>

		<li><?php previous_post_link('%link', '<span class="fa fa-chevron-left"></span>&nbsp;&nbsp;&nbsp;Last Project'); ?></li>
		
		<?php } else { 
		    $first = new WP_Query('posts_per_page=1&order=DESC&post_type=projects'); $first->the_post();
		    	echo '<li><a href="' . get_permalink() . '"><span class="fa fa-chevron-left"></span>&nbsp;&nbsp;&nbsp;Last Project</a></li>';
		  	wp_reset_query();
		}; ?>
		    
		<?php if( get_adjacent_post(false, '', false) ) { ?>

		<li><?php next_post_link('%link', 'Next Project&nbsp;&nbsp;&nbsp;<span class="fa fa-chevron-right"></span>'); ?></li>
		
		<?php } else { 
			$last = new WP_Query('posts_per_page=1&order=ASC&post_type=projects'); $last->the_post();
		    	echo '<li><a href="' . get_permalink() . '">Next Project&nbsp;&nbsp;&nbsp;<span class="fa fa-chevron-right"></span></a></li>';
		    wp_reset_query();
		}; ?>

	</ul>

</nav>