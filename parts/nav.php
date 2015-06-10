<?php
/**
 * Template part for displaying the default header nav.
 * @package WordPress
 * @subpackage Kevin Lesht
 */

?>

<nav class="container container--large" role="navigation">

	<a href="<?php echo site_url(); ?>" class="go-home">Kevin Lesht</a>

	<ul>

		<li><a href="#projects" class="goto">Projects</a></li>
		<li><a href="javascript:void(0);" class="modal-toggle">Contact</a></li>

		<?php get_template_part( 'parts/nav', 'social' ); ?>

	</ul>

</nav>