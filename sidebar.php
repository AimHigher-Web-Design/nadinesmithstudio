<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Nadine Smith Studio
 */

if ( ! is_active_sidebar( 'sidebar-1' ) && ! has_nav_menu( 'primary' ) ) {
	return;
}
?>

<div id="sidebar" class="sidebar" aria-hidden="true">
	<div class="sidebar-content">
		<?php if ( is_active_sidebar( 'submenu' ) ) : ?>
			<?php dynamic_sidebar( 'submenu' ); ?>
		<?php endif; ?>
	</div><!-- .sidebar-content -->
</div><!-- #sidebar -->
