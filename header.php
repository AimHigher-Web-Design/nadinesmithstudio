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
		<link rel="stylesheet" type="text/css" href="/nadinesmithstudio/wp-content/themes/nadinesmithstudio/resources/css/main.css" />
		<script src="https://use.typekit.net/tfp4yqo.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'boardwalk' ); ?></a> -->
			<?php if (is_front_page() == FALSE): ?>
				<header id="masthead" class="site-header" role="banner">
					<div class="logo left-header">
						<a href="/"><img class="site-logo" src="/nadinesmithstudio/wp-content/themes/nadinesmithstudio/resources/images/logo.svg" /></a>
					</div>
					<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav>
				</header><!-- #masthead -->
			<?php else: ?>
				<header id="masthead" class="site-header home-header" role="banner">
					<div class="logo">
						<a href="/"><img class="site-logo" src="wp-content/themes/nadinesmithstudio/resources/images/logo.svg" /></a>
					</div>
				</header>
			<?php endif ?>
			<div id="content" class="site-content">
