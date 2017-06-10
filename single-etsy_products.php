<?php
/**
 * @package Nadine Smith Studio
 */
get_header(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() && ! has_post_format( 'video' ) ) : ?>
		<div class="entry-thumbnail">
			<?php echo get_the_post_thumbnail( get_the_ID() ); ?>
		</div><!-- .entry-thumbnail -->
	<?php endif; ?>

<div class="jewellery-content">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="post-content">

		<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

		<?php endwhile; // end of the loop. ?>

		<?php
			$etsyprice = get_post_meta(get_the_ID(), '_etsy_product_price', true);
			echo '<h2>$ ' . $etsyprice . ' AUD</h2>';
		?>

		<?php
			$etsylink = get_post_meta(get_the_ID(), '_etsy_product_url', true);
			echo '<p><a href="' . $etsylink . '" target="_blank"><button type="button">Buy Now</button></a></p>
			<small>Note. This will redirect you to our store on Etsy</small>';
		?>

	</div><!-- .entry-content -->
</div>

</article><!-- #post-## -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
