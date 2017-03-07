<?php
/**
 * Template Name: Jewellery
 *
 *
 * The page template for jewellery
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Nadine Smith Studio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="site-main">
			<?php

			$query = new WP_Query(array(
    'post_type' => 'Products',
    'post_status' => 'publish'
));


while ($query->have_posts()) {
    $query->the_post();
    $post_id = get_the_ID();
    echo $post_id;
    echo "<br>";
}

wp_reset_query();

		 ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
