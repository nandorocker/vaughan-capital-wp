<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _mbbasetheme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container" role="contentinfo">
		<div class="row">
			<!-- Automatically generated menu -->
			<?php 
				wp_nav_menu(
					array( 
						'container_class' => 'col-sm-12 col-md-8',
						'container_id' => 'nav_footer',
						'menu_class' => "nav navbar-nav",
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
						)
				);
			?>

			<div class="col-sm-12 col-md-4 disclaimer"><?php
// Begin legal footer query
// $args = 'p=246'; // Use this for local setup without slug
$args = 'name=legal';
query_posts($args);

	if (have_posts()) : while ( have_posts() ) : the_post();
		
		// Display footer
		the_field("legal_footer");
		// the_title();
	
		endwhile;
	endif;

// End legal footer query
wp_reset_query()
?>			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
