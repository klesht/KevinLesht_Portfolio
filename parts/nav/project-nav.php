<?php
    $pagelist = get_pages( array ('child_of' => 6, 'sort_column' => 'menu_order') );
    $pages = array();
    foreach ($pagelist as $page) {
       $pages[] += $page->ID;
    }

    $current = array_search($post->ID, $pages);
    $prevID = $pages[$current-1];
    $nextID = $pages[$current+1];
?>

<nav class="container">

	<a href="<?php echo site_url(); ?>" class="go-home">Kevin Lesht</a>

	<ul>

		<?php if (!empty($prevID)) { ?>

			<li><a href="<?php echo get_permalink($prevID); ?>"><span class="fa fa-chevron-left"></span>&nbsp;&nbsp;&nbsp;Last Project</a></li>
		
		<?php }
		if (!empty($nextID)) { ?>

			<li><a href="<?php echo get_permalink($nextID); ?>">Next Project&nbsp;&nbsp;&nbsp;<span class="fa fa-chevron-right"></span></a></li>
		
		<?php } wp_reset_query(); ?>

	</ul>

</nav>