<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _mbbasetheme
 */
?>

<?php

// Header Image
if ( has_post_thumbnail() ) {
	$post_thumbnail_id = get_post_thumbnail_id($post->ID);
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

	echo "<figure class='header-image' style='background-image: url(" . $post_thumbnail_url . ");'>";
		//the_post_thumbnail();
	echo "</figure>";
}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_mbbasetheme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
