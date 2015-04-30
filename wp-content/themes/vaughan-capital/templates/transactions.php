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
						<h2>Category</h2>

						<div class="transaction-set">
						<?php

							// Loop: list all the posts under category "transaction"
							$args = array(
								'category_name' => 'transaction',
								'posts_per_page' => -1,
								'order' => 'ASC'
							);

							query_posts( $args );
							if (have_posts()) : while ( have_posts() ) : the_post(); 

		  				?>
							<article class="transaction-item">
								<div class="transaction-img">Image</div>
								<div class="transaction-descr">
									<h3><?php the_title(); ?><br>
									<em><?php the_field("role"); ?></em></h3>
								</div>
								<div class="transaction-value">
									<h2><?php the_field("value"); ?></h2>
								</div>
							</article>

				<?php
					endwhile; endif; // End transaction post loop
					wp_reset_query(); 
				?>
						</div>

					</section>

				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>