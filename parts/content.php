<?php
/**
 * The template used for displaying posts.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<article id="post-<?php the_ID(); ?>" class="module" role="article">

	<h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

	<div class="meta">Published&nbsp;<?php the_date(); ?>,&nbsp;by&nbsp;<?php the_author(); ?></div>

	<?php the_excerpt(); ?>

	<a href="<?php the_permalink() ?>" class="button button--small button--fixed-right">Continue Reading</a>

</article>