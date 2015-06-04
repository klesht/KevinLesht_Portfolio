<?php
/**
 * Template part for displaying single posts.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<article id="post-<?php the_ID(); ?>" class="module">
	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
		<hr>
	</header>

	<?php the_content(); ?>
</article>