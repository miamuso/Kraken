<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package practice
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="cold-brew-text">
	<header class="entry-header">
		<div class="cold-brew">
			<h1 class="entry-title">
		<h1 class="cold-brew-header"><?php 
				the_title();
				?> -->
		<div>
				<?php the_content();
				?>
			
		</div> 
	</header><!-- .entry-header -->

	<!-- <div class="cold-brew-image"><?php practice_post_thumbnail(); ?></div> -->
	
	
	
</article><!-- #post-<?php the_ID(); ?> -->
