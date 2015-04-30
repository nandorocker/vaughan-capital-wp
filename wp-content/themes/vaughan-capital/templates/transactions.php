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

							// Add bootstrap row dynamically
							addRowStart($item_number);
					?>
								<article class="transaction-item">
									<div class="transaction-img"></div>
									<div class="transaction-descr">
										<h3><?php the_title(); ?></h3>
										<h4><em><?php the_field("role"); ?></em></h4>
									</div>
									<div class="transaction-value">
										<h2><?php the_field("value"); ?></h2>
									</div>
								</article>
					<?php
							// End bootstrap row dynamically
							addRowEnd($item_number);

							// Progress bootstrap row generator
							if ($item_number < 2) {
								$item_number++;
							} else {
								$item_number = 0;
							}

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