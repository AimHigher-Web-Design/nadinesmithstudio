<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Nadine Smith Studio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( '<div class="entry-header"><h1 class="entry-title">', '</h1></div>' ); ?>
		
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-thumbnail">
			<?php echo get_the_post_thumbnail( get_the_ID(), 'boardwalk-hero-image' ); ?>
		</div><!-- .entry-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
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

	<?php edit_post_link( __( 'Edit', 'boardwalk' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
