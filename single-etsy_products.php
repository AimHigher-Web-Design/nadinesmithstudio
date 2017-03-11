<?php
/**
 * @package Nadine Smith Studio
 */
get_header(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() && ! has_post_format( 'video' ) ) : ?>
		<div class="entry-thumbnail">
			<?php echo get_the_post_thumbnail( get_the_ID(), 'boardwalk-hero-image' ); ?>
		</div><!-- .entry-thumbnail -->
	<?php endif; ?>

<div class="jewellery-content">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="post-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'boardwalk' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'boardwalk' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->
</div>

</article><!-- #post-## -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
