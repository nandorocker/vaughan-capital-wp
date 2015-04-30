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

				<?php
					// get all categories
					$cats = get_categories('child_of=3');

					// loop through categories
					foreach($cats as $cat) {
						// set item checker for bootstrap row generator
						$item_number = 0;

						// setup the category ID
	                    $cat_id = $cat->term_id;

	                    // Make a header for the category
	                    ?><section>
						<h2><?php echo $cat->name; ?></h2>

						<div class="transaction-set"><?php

						// Create a custom wordpress query
						$args = array(

							'cat' => $cat_id,
							'posts_per_page' => -1,
							'order' => 'DESC',
							'orderby' => 'date',
							'exclude' => 3
						);

						query_posts( $args );

						// Start wordpress loop!
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
						wp_reset_query(); // End category loop query

						?>
						</div>
					</section>
						<?php

					} // End category foreach
				?>
				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>