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

	</div><!-- .entry-content -->
</div>

</article><!-- #post-## -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
