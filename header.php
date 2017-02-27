<?php
/**
 * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Nadine Smith Studio
 */
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nadine Smith Studio</title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" type="text/css" href="wp-content/themes/nadinesmithstudio/resources/css/main.css" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'boardwalk' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
				<?php if (is_front_page() == FALSE): ?>
					<div class="logo left-header">
						<a href="/"><img class="site-logo" src="resources/images/logo.svg" /></a>
					</div>
					<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav>
				<?php else: ?>
					<div class="logo">
						<a href="/"><img class="site-logo" src="wp-content/themes/nadinesmithstudio/resources/images/logo.svg" /></a>
					</div>
				<?php endif ?>
			</header><!-- #masthead -->
			<div id="content" class="site-content">
