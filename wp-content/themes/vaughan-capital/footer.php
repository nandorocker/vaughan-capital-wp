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
						'container_class' => 'col-sm-12 col-md-8 col-lg-6',
						'container_id' => 'nav_footer',
						'menu_class' => "nav navbar-nav",
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
						)
				);
			?>

			<p class="col-sm-12 col-md-4 col-lg-6 disclaimer">&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?>. Securities offered through Independent Investment Bankers Corp. a broker-dealer, Members FINRA/SIPC. Vaughan Capital Advisors, LLC is not affiliated with Independent Investment Bankers Corp.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
