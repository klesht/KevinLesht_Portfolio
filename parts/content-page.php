<?php
/**
 * The template used for displaying page content in page.php.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<article id="post-<?php the_ID(); ?>" class="module" role="article">
	<header>
		<?php the_title( '<h1 class="hr">', '</h1>' ); ?>
	</header>

	<?php the_content(); ?>
</article>