<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package miranda
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<h1 class="screen-reader-text"><?php esc_html_e( 'Sidebar', 'miranda' ); ?></h1>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
