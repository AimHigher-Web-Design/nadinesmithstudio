<?php
/**
 *
 * @package Nadine Smith Studio
 */

/*
Template Name: Home Page
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php wp_nav_menu( array( 'theme_location' => 'home-menu', 'container_class' => 'home_nav' ) ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
