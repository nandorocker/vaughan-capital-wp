<?php
/**
 * Template Name: Transactions page
 *
 * Displays content for transactions
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<div class="transactions">
					<section>
						<h2>Digital Media</h2>

						<article class="transaction-item">
							<span>Image</span>
							<h1>Double Encore acquired by Possible</h1>
							<h3>Exclusive Sell-Side Advisor</h3>
							<h2>Private</h2>
						</article>

						<article class="transaction-item">
							<span>Image</span>
							<h1>Testflight acquired by Apple</h1>
							<h3>Advisor to Founder</h3>
							<h2>Private</h2>
						</article>

						<article class="transaction-item">
							<span>Image</span>
							<h1>Bell Canada share buyback from SBC</h1>
							<h3>Exclusive Buy-Side Advisor</h3>
							<h2>$5 Million</h2>
						</article>

					</section>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>