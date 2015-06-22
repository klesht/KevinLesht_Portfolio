<?php
/**
 * Template part for displaying single posts.
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

<a href="<?php echo site_url(); ?>/blog" class="button button--small button--fixed-right">&larr;&nbsp;&nbsp;&nbsp;Back to Blog</a>
