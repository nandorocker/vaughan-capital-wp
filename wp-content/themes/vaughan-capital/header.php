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

		<header id="masthead" class="navbar site-header container navbar-static-top" role="banner">
			<!-- Brand -->
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img alt="Vaughan Capital Advisors" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/vaughan-logo.png"></a>
			</div>

			<!-- Main Navigation--><?php 
wp_nav_menu(
	array( 
		'container_class' => '',									// applies to div
		'container_id' => 'menu',									// applies to ul
		'menu_class' => 'nav navbar-nav navbar-right', // applies to ul
		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
		)
);
?>		</header>

		<div id="content" class="site-content">