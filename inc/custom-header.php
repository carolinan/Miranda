<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * @package miranda
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses miranda_customize_css()
 * @uses miranda_admin_header_style()
 * @uses miranda_admin_header_image()
 */
function miranda_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'miranda_custom_header_args', array(
		'default-image'          => get_template_directory_uri() . '/images/rose.png',
		'default-text-color'     => '861a50',
		'width'                  => 700,
		'height'                 => 280,
		'flex-height'            => true,
		'flex-width'            => true,
		'wp-head-callback'       => 'miranda_customize_css',
		'admin-head-callback'    => 'miranda_admin_header_style',
		'admin-preview-callback' => 'miranda_admin_header_image',
	)
	) );
	
	register_default_headers( array(
			'Rose' => array(
				'url' => '%s/images/rose.png',
				'thumbnail_url' => '%s/images/rose-thumb.png',
				/* translators: header image description */
				'description' => __( 'Rose', 'miranda' )
			),
			'Purple' => array(
				'url' => '%s/images/purple-flower.png',
				'thumbnail_url' => '%s/images/purple-thumb.png',
				/* translators: header image description */
				'description' => __( 'Purple Flower', 'miranda' )
			)

		) );
	
}
add_action( 'after_setup_theme', 'miranda_custom_header_setup' );