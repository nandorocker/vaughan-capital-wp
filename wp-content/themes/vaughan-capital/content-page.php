<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _mbbasetheme
 */
?>

<?php get_template_part( 'content', 'thumbnail' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title sidebar-line">', '</h2>' ); ?>
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
