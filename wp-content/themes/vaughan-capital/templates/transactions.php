<?php
/**
 * Template Name: Transactions page
 *
 * Displays content for transactions
 *
 * @package _mbbasetheme
 */

get_header(); ?>
<ul>
<?php
  query_posts( array('category_name' => 'transaction', 'posts_per_page' => -1 ));
  if (have_posts()) : while ( have_posts() ) : the_post(); ?>
  <li><?php the_title(); ?> </li>
<?php endwhile; endif; 
  wp_reset_query(); ?>
</ul>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<div class="transactions">

					<section>
						<h2>Category</h2>

						<div class="transaction-set">
							<article class="transaction-item">
								<div class="transaction-img">Image</div>
								<div class="transaction-descr">
									<h3><?php //echo $transaction[$i][0] ?><br>
									<em><?php //echo $transaction[$i][1] ?></em></h3>
								</div>
								<div class="transaction-value">
									<h2><?php //echo $transaction[$i][2] ?></h2>
								</div>
							</article>
						</div>

					</section>

				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>