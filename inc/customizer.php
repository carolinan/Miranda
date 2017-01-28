<?php
/**
 * Miranda Theme Customizer
 *
 * @package Miranda
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function miranda_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	/**
	* Add sections to the WordPress customizer.
	* Accessibility info:
	*/
	$wp_customize->get_section( 'colors' )->description  = __( 'Please note that changing the colors can affect the accessibility.', 'miranda' );

	$wp_customize->add_setting( 'miranda_color', array(
		'default'        => '#861a50',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'miranda_color', array(
		'label'	=> __( 'Accent color:', 'miranda' ),
		'section' => 'colors',
		'settings'  => 'miranda_color',
	) ) );

	$wp_customize->add_section( 'miranda_section',      array(
		'title' => __( 'Advanced settings', 'miranda' ),
		'priority' => 100,
		)
	);

	$wp_customize->add_setting( 'miranda_social_footer',	array(
			'sanitize_callback' => 'miranda_sanitize_checkbox',
		)
	);
	$wp_customize->add_control( 'miranda_social_footer',		array(
			'type' => 'checkbox',
			'label' => __( 'By default, the social menu is placed in the header. Check this box to show the social menu in the footer instead.', 'miranda' ),
			'section' => 'miranda_section',
			'settings'  => 'miranda_social_footer',
		)
	);

	$wp_customize->add_setting( 'miranda_header_visibility',	array(
			'sanitize_callback' => 'miranda_sanitize_checkbox',
		)
	);
	$wp_customize->add_control( 'miranda_header_visibility',		array(
			'type' => 'checkbox',
			'label' => __( 'By default, the header is only shown on the front page. Check this box to show the header on all pages.', 'miranda' ),
			'section' => 'miranda_section',
			'settings'  => 'miranda_header_visibility',
		)
	);

}
add_action( 'customize_register', 'miranda_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function miranda_customize_preview_js() {
	wp_enqueue_script( 'miranda_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'miranda_customize_preview_js' );

function miranda_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return 1;
	} else {
		return '';
	}
}
