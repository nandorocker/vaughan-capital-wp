<?php
/**
 * The template part for displaying the page's banner.
 *
 * @package _mbbasetheme
 */
?>
<?php
	// Header Image
	if ( has_post_thumbnail() ) {
		$post_thumbnail_id = get_post_thumbnail_id($post->ID);
		$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

		echo "	<figure class='header-image' style='background-image: url(" . $post_thumbnail_url . ");'></figure>";
	}
?>