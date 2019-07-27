<?php
/**
 * @package Miranda
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_home() || is_front_page() || get_theme_mod( 'miranda_header_visibility' ) ) {
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		} else {
			the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
		}

		if ( 'post' === get_post_type() ) {
			?>
			<div class="entry-meta">
				<?php miranda_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
		}
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		}

		if ( get_theme_mod( 'miranda_blog_content' ) <> 'excerpt' ) {
			/* Translators: %s: Name of current post. */
			the_content( sprintf( __( 'Continue reading %s', 'miranda' ), get_the_title() ) );

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'miranda' ),
					'after'  => '</div>',
				)
			);
		} else {
			the_excerpt();
		}
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php miranda_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
