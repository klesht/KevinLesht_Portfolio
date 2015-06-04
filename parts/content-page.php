<?php
/**
 * The template used for displaying page content in page.php
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