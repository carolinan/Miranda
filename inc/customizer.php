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

	$wp_customize->add_setting(
		'miranda_color',
		array(
			'default'           => '#861a50',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'miranda_color',
			array(
				'label'    => __( 'Accent color:', 'miranda' ),
				'section'  => 'colors',
				'settings' => 'miranda_color',
			)
		)
	);

	$wp_customize->add_section(
		'miranda_section',
		array(
			'title'    => __( 'Advanced settings', 'miranda' ),
			'priority' => 100,
		)
	);

	$wp_customize->add_setting(
		'miranda_social_footer',
		array(
			'sanitize_callback' => 'miranda_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'miranda_social_footer',
		array(
			'type'     => 'checkbox',
			'label'    => __( 'By default, the social menu is placed in the header. Check this box to show the social menu in the footer instead.', 'miranda' ),
			'section'  => 'miranda_section',
			'settings' => 'miranda_social_footer',
		)
	);

	$wp_customize->add_setting(
		'miranda_header_visibility',
		array(
			'sanitize_callback' => 'miranda_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'miranda_header_visibility',
		array(
			'type'     => 'checkbox',
			'label'    => __( 'By default, the header is only shown on the front page. Check this box to show the header on all posts and pages.', 'miranda' ),
			'section'  => 'miranda_section',
			'settings' => 'miranda_header_visibility',
		)
	);

	$wp_customize->add_setting(
		'miranda_navigation_position',
		array(
			'default'           => 'both',
			'sanitize_callback' => 'miranda_sanitize_select',
		)
	);

	$wp_customize->add_control(
		'miranda_navigation_position',
		array(
			'type'        => 'select',
			'label'       => __( 'Post navigation', 'miranda' ),
			'description' => __( 'By default, the navigation for the next and previous posts is visible both above and below the posts. You can change the position of the navigation here:', 'miranda' ),
			'section'     => 'miranda_section',
			'settings'    => 'miranda_navigation_position',
			'choices'   => array(
				'both'  => __( 'Both above and below the post', 'miranda' ),
				'above' => __( 'Above the post', 'miranda' ),
				'below' => __( 'Below the post', 'miranda' ),
				'hide'  => __( 'Do not show the navigation', 'miranda' ),
			),
		)
	);

	$wp_customize->add_setting(
		'miranda_blog_content',
		array(
			'default'           => 'full',
			'sanitize_callback' => 'miranda_sanitize_select',
		)
	);

	$wp_customize->add_control(
		'miranda_blog_content',
		array(
			'type'        => 'select',
			'label'       => __( 'Blog and Archive content', 'miranda' ),
			'description' => __( 'By default, the blog and the archives shows the full content of the posts. You can select what to show here:', 'miranda' ),
			'section'     => 'miranda_section',
			'settings'    => 'miranda_blog_content',
			'choices'   => array(
				'full'  => __( 'Full content', 'miranda' ),
				'excerpt' => __( 'Excerpt', 'miranda' ),
			),
		)
	);

	$wp_customize->add_setting(
		'miranda_hide_credits',
		array(
			'sanitize_callback' => 'miranda_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'miranda_hide_credits',
		array(
			'type'    => 'checkbox',
			'label'   => __( 'Check this box to hide the Theme Author credit in the footer =(.', 'miranda' ),
			'section' => 'miranda_section',
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

/**
 * Sanitize the checkbox options.
 */
function miranda_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return 1;
	} else {
		return '';
	}
}

/**
 * Sanitization callback for 'select' and 'radio' type controls. This callback sanitizes `$input`
 * as a slug, and then validates `$input` against the choices defined for the control.
 *
 * @see sanitize_text_field()        https://developer.wordpress.org/reference/functions/sanitize_text_field/
 * @see $wp_customize->get_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/get_control/
 *
 * @param string               $input   Slug to sanitize.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return string Sanitized slug if it is a valid choice; otherwise, the setting default.
 */
function miranda_sanitize_select( $input, $setting ) {
	// Ensure input is a slug.
	$input = sanitize_text_field( $input );
	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;
	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
