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

			<div class="products category-jewellery">

				<?php
			$type = 'etsy_products';
			$args=array(
			  'post_type' => $type,
			  'post_status' => 'publish',
			  'posts_per_page' => -1,
			  'caller_get_posts'=> 1,
				'etsy_category' => 'Bracelet'
			);
			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			  while ($my_query->have_posts()) : $my_query->the_post(); ?>

					<div class="product-item jewellery">
						<div class="product-item-image">
							<?php echo get_the_post_thumbnail( get_the_ID()); ?>
							<div class="product-item-price">
								$ <?php echo get_post_meta( get_the_ID(), '_etsy_product_price', true ); ?>
							</div>
						</div>
						<div class="product-item-name">
							<p><?php the_title(); ?></p>
						</div>
					</div>

			    <?php
			  endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
			?>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
