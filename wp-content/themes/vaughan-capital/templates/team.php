<?php
/**
 * Template Name: Team page
 *
 * Displays content for transactions
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php 
while ( have_posts() ) : the_post(); // begin current page loop  
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php get_template_part( 'content', 'thumbnail' ); ?>
				
				<header class="entry-header">
					<?php the_title( '<h2 class="entry-title sidebar-line">', '</h2>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); // Display intro if found ?>

					<?php
	/*
	** Team section
	 */

	// Create a custom wordpress query
	$args = array(

		'category_name' => 'team',
		'posts_per_page' => -1,
		'meta_key' => 'order',
		'orderby' => 'meta_value_num',
		'order' => 'ASC'
	);

	query_posts( $args );

	// Start wordpress loop!
	if (have_posts()) : while ( have_posts() ) : the_post(); 
?>

					<article class="team-mate">
						<h2><?php the_title(); ?></h2>
						<h3><?php the_field("role"); ?> - <?php the_field("homebase"); ?></h3>
						<?php the_content(); ?>
					</article>	

					<?php
		endwhile;
	endif;
	wp_reset_query(); // End category loop query
?>

				</div><!-- .entry-content -->
			</article><!-- #post-## -->	

			<?php 

endwhile; // end of the main loop. 
?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>