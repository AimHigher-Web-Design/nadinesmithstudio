<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Nadine Smith Studio
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="inner">
			<?php if (is_front_page() == FALSE): ?>
				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation">
						<?php
							wp_nav_menu( array(
								'theme_location'  => 'social',
								'container_class' => 'menu-social',
								'menu_class'      => 'clear',
								'link_before'     => '<span class="screen-reader-text">',
								'link_after'      => '</span>',
								'depth'           => 1,
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif; ?>
				<div class="aimhigher-logo">
					<a href="http://www.aimhigherwebdesign.com" target="_blank"><img src="/nadinesmithstudio/wp-content/uploads/Graphics-Logo.svg" /></a>
				</div>
			<?php else: ?>
			<?php endif ?>

	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script type="text/javascript" src="/nadinesmithstudio/wp-content/themes/nadinesmithstudio/resources/js/main.js"></script>

</body>
</html>
