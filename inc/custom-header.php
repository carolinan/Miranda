<?php
/**
 * Sample implementation of the Custom Header feature
 * https://codex.wordpress.org/Custom_Headers
 *
 * @package Miranda
 */

/**
 * Set up the WordPress core custom header feature.
 *
 */
function miranda_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'miranda_custom_header_args',
			array(
				'default-image'          => get_template_directory_uri() . '/images/rose.png',
				'default-text-color'     => '861a50',
				'width'                  => 700,
				'height'                 => 280,
				'flex-height'            => true,
				'flex-width'             => true,
				'wp-head-callback'       => 'miranda_customize_css',
			)
		)
	);

	register_default_headers(
		array(
			'Rose' => array(
				'url'           => '%s/images/rose.png',
				'thumbnail_url' => '%s/images/rose-thumb.png',
				/* translators: header image description */
				'description'   => __( 'Rose', 'miranda' ),
			),
			'Purple' => array(
				'url'           => '%s/images/purple-flower.png',
				'thumbnail_url' => '%s/images/purple-thumb.png',
				/* translators: header image description */
				'description'    => __( 'Purple Flower', 'miranda' ),
			),
		)
	);

}
add_action( 'after_setup_theme', 'miranda_custom_header_setup' );
