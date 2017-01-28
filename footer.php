<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package miranda
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<h1 class="screen-reader-text"><?php esc_html_e( 'Footer Content', 'miranda' ); ?></h1>

		<?php if ( get_theme_mod( 'miranda_social_footer' ) && has_nav_menu( 'social' ) ) { ?>
			<nav class="social-menu" role="navigation" aria-label="<?php esc_attr_e( 'Social Media', 'miranda' ); ?>">
				<?php wp_nav_menu( array( 'theme_location' => 'social', 'fallback_cb' => false, 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>' ) ); ?>
			</nav><!-- #social-menu -->
		<?php };?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'miranda' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'miranda' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( 'http://wptema.se/miranda' ); ?>" rel="nofollow"><?php printf( esc_html__( 'Theme: %1$s by Carolina', 'miranda' ), 'Miranda' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
