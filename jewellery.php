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
				$args = array( 'post_type' => 'products', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				  the_title();
				  echo '<div class="entry-content">';
				  the_content();
				  echo '</div>';
				endwhile;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
