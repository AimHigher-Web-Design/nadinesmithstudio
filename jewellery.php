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

			<form action="" method="GET" class="filter-buttons">
				<span>Filter by:</span>
				<input type="submit" value="Jewellery" name="jewellery-type"></input>
				<input type="submit" value="Bracelet" name="jewellery-type"></input>
				<input type="submit" value="Necklace" name="jewellery-type"></input>
				<input type="submit" value="Earrings" name="jewellery-type"></input>
			</form>

			<div class="products category-jewellery">

				<?php
					$prodCat = "Jewellery";

					// echo $prodCat.before;

					if (isset($_GET["jewellery-type"])) {
						$prodCat = $_GET["jewellery-type"];
						// echo $prodCat.assigned;
					};

					// echo $prodCat.assignedafter;

					// echo $_POST[3].name;

					// echo $prodCat.cat;

					$type = 'etsy_products';

					$args=array(
			  		'post_type' => $type,
			  		'post_status' => 'publish',
			  		'posts_per_page' => -1,
			  		'caller_get_posts'=> 1,
						'etsy_category' => $prodCat
					);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
			  		while ($my_query->have_posts()) : $my_query->the_post(); ?>

					<div class="product-item jewellery">
						<a href="<?php echo get_post_permalink(get_the_ID()); ?>">
							<div class="product-item-image">
								<?php echo get_the_post_thumbnail( get_the_ID()); ?>
								<div class="product-item-price">
									$ <?php echo get_post_meta( get_the_ID(), '_etsy_product_price', true ); ?>
								</div>
							</div>
						</a>
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
