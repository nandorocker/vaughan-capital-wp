<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 9]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<div id="page" class="hfeed site">

		<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_mbbasetheme' ); ?></a> -->

		<header id="masthead" class="site-header container" role="banner">
			<!-- Main Navigation-->
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img alt=
						"Vaughan Capital Advisors" src=
						"<?php bloginfo('stylesheet_directory'); ?>/assets/images/vaughan-logo.png"></a><button class=
						"navbar-toggle collapsed" data-target="#navbar"
						data-toggle="collapse" type="button"><span class=
						"sr-only">Toggle navigation</span><span class=
						"icon-bar"></span><span class=
						"icon-bar"></span><span class="icon-bar"></span></button>
				</div>

				<!-- Group all menu items to cllapse-->
				<?php 
					wp_nav_menu(
						array( 
							'container_class' => 'collapse navbar-collapse',
							'container_id' => 'navbar',
							'menu_class' => "nav navbar-nav navbar-right",
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
							)
					);
				?>
			</nav>
		</header>

		<div id="content" class="site-content">