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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="col-md-7">
				<ul class="nav navbar-nav">
					{% include nav.html %}
				</ul>
			</div>

			<p class="col-md-5">&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?>. Securities offered through Independent Investment Bankers Corp. a broker-dealer, Members FINRA/SIPC. Vaughan Capital Advisors, LLC is not affiliated with Independent Investment Bankers Corp.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
