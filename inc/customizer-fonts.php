<?php
/**
 * Miranda Theme Customizer typogrpahy options.
 *
 * @package Miranda
 */

if ( ! function_exists( 'miranda_font_customize_register' ) ) {
	/**
	 * Add font settings and controls for the Theme Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	function miranda_font_customize_register( $wp_customize ) {
		$wp_customize->add_section(
			'miranda_font_options',
			array(
				'title' => __( 'Font Options', 'miranda' ),
			)
		);

		$wp_customize->add_setting(
			'miranda_title_font',
			array(
				'default'           => 'Open Sans',
				'sanitize_callback' => 'miranda_sanitize_select',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'miranda_title_font',
				array(
					'label'   => __( 'Choose a font for the Site title', 'miranda' ),
					'section' => 'miranda_font_options',
					'type'    => 'select',
					'choices' => array(
						'Noto Serif'        => __( 'Noto Serif', 'miranda' ),
						'Alegreya'           => 'Alegreya',
						'Alegreya Sans SC'   => 'Alegreya Sans SC',
						'Arimo'              => 'Arimo',
						'Bree Serif'         => 'Bree Serif',
						'Cherry Swash'       => 'Cherry Swash',
						'Cinzel'             => 'Cinzel',
						'Exo 2'              => 'Exo 2',
						'Fondamento'         => 'Fondamento',
						'Gentium Book Basic' => 'Gentium Book Basic',
						'Grand Hotel'        => 'Grand Hotel',
						'Hind'               => 'Hind',
						'Josefin Sans'       => 'Josefin Sans',
						'Karla'              => 'Karla',
						'La Belle Aurore'    => 'La Belle Aurore',
						'Lato'               => 'Lato',
						'Libre Baskerville'  => 'Libre Baskerville',
						'Lobster Two'        => 'Lobster Two',
						'Lora'               => 'Lora',
						'Merriweather'       => 'Merriweather',
						'Montserrat'         => 'Montserrat',
						'Muli'               => 'Muli',
						'Noticia Text'       => 'Noticia Text',
						'Noto Sans'          => 'Noto Sans',
						'Open Sans'          => 'Open Sans',
						'Oswald'             => 'Oswald',
						'Pacifico'           => 'Pacifico',
						'Playfair Display'   => 'Playfair Display',
						'Quando'             => 'Quando',
						'Raleway'            => 'Raleway',
						'Roboto Slab'        => 'Roboto Slab',
						'Sorts Mill Goudy'   => 'Sorts Mill Goudy',
						'Tangerine'          => 'Tangerine',
						'Ubuntu'             => 'Ubuntu',
						'Vollkorn'           => 'Vollkorn',
					),
				)
			)
		);

		$wp_customize->add_setting(
			'miranda_description_font',
			array(
				'default'           => 'Open Sans',
				'sanitize_callback' => 'miranda_sanitize_select',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'miranda_description_font',
				array(
					'label'   => __( 'Choose a font for the Site tagline', 'miranda' ),
					'section' => 'miranda_font_options',
					'type'    => 'select',
					'choices' => array(
						'Noto Serif'         => __( 'Noto Serif', 'miranda' ),
						'Alegreya'           => 'Alegreya',
						'Alegreya Sans SC'   => 'Alegreya Sans SC',
						'Arimo'              => 'Arimo',
						'Bree Serif'         => 'Bree Serif',
						'Cherry Swash'       => 'Cherry Swash',
						'Cinzel'             => 'Cinzel',
						'Exo 2'              => 'Exo 2',
						'Fondamento'         => 'Fondamento',
						'Gentium Book Basic' => 'Gentium Book Basic',
						'Grand Hotel'        => 'Grand Hotel',
						'Hind'               => 'Hind',
						'Josefin Sans'       => 'Josefin Sans',
						'Karla'              => 'Karla',
						'La Belle Aurore'    => 'La Belle Aurore',
						'Lato'               => 'Lato',
						'Libre Baskerville'  => 'Libre Baskerville',
						'Lobster Two'        => 'Lobster Two',
						'Lora'               => 'Lora',
						'Merriweather'       => 'Merriweather',
						'Montserrat'         => 'Montserrat',
						'Muli'               => 'Muli',
						'Noticia Text'       => 'Noticia Text',
						'Noto Sans'          => 'Noto Sans',
						'Open Sans'          => 'Open Sans',
						'Oswald'             => 'Oswald',
						'Pacifico'           => 'Pacifico',
						'Playfair Display'   => 'Playfair Display',
						'Quando'             => 'Quando',
						'Raleway'            => 'Raleway',
						'Roboto Slab'        => 'Roboto Slab',
						'Sorts Mill Goudy'   => 'Sorts Mill Goudy',
						'Tangerine'          => 'Tangerine',
						'Ubuntu'             => 'Ubuntu',
						'Vollkorn'           => 'Vollkorn',
					),
				)
			)
		);

		$wp_customize->add_setting(
			'miranda_post_title_font',
			array(
				'default'           => 'Open Sans',
				'sanitize_callback' => 'miranda_sanitize_select',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'miranda_post_title_font',
				array(
					'label'   => __( 'Choose a font for the post and page titles', 'miranda' ),
					'section' => 'miranda_font_options',
					'type'    => 'select',
					'choices' => array(
						'Noto Serif'        => __( 'Noto Serif', 'miranda' ),
						'Alegreya'          => 'Alegreya',
						'Alegreya Sans SC'  => 'Alegreya Sans SC',
						'Arimo'             => 'Arimo',
						'Bree Serif'        => 'Bree Serif',
						'Cherry Swash'      => 'Cherry Swash',
						'Cinzel'            => 'Cinzel',
						'Exo 2'             => 'Exo 2',
						'Fondamento'        => 'Fondamento',
						'Gentium Book Basic' => 'Gentium Book Basic',
						'Grand Hotel'       => 'Grand Hotel',
						'Hind'              => 'Hind',
						'Josefin Sans'      => 'Josefin Sans',
						'Karla'             => 'Karla',
						'La Belle Aurore'   => 'La Belle Aurore',
						'Lato'              => 'Lato',
						'Libre Baskerville' => 'Libre Baskerville',
						'Lobster Two'       => 'Lobster Two',
						'Lora'              => 'Lora',
						'Merriweather'      => 'Merriweather',
						'Montserrat'        => 'Montserrat',
						'Muli'              => 'Muli',
						'Noticia Text'      => 'Noticia Text',
						'Noto Sans'         => 'Noto Sans',
						'Open Sans'         => 'Open Sans',
						'Oswald'            => 'Oswald',
						'Pacifico'          => 'Pacifico',
						'Playfair Display'  => 'Playfair Display',
						'Quando'            => 'Quando',
						'Raleway'           => 'Raleway',
						'Roboto Slab'       => 'Roboto Slab',
						'Sorts Mill Goudy'  => 'Sorts Mill Goudy',
						'Tangerine'         => 'Tangerine',
						'Ubuntu'            => 'Ubuntu',
						'Vollkorn'          => 'Vollkorn',
					),
				)
			)
		);

		$wp_customize->add_setting(
			'miranda_body_font',
			array(
				'default'           => 'Open Sans',
				'sanitize_callback' => 'miranda_sanitize_select',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'miranda_body_font',
				array(
					'label'   => __( 'Choose a font for the body text', 'miranda' ),
					'section' => 'miranda_font_options',
					'type'    => 'select',
					'choices' => array(
						'Noto Serif'        => __( 'Noto Serif', 'miranda' ),
						'Alegreya'          => 'Alegreya',
						'Alegreya Sans SC'  => 'Alegreya Sans SC',
						'Arimo'             => 'Arimo',
						'Exo 2'             => 'Exo 2',
						'Gentium Book Basic' => 'Gentium Book Basic',
						'Hind'              => 'Hind',
						'Josefin Sans'      => 'Josefin Sans',
						'Karla'             => 'Karla',
						'Lato'              => 'Lato',
						'Libre Baskerville' => 'Libre Baskerville',
						'Lora'              => 'Lora',
						'Merriweather'      => 'Merriweather',
						'Montserrat'        => 'Montserrat',
						'Muli'              => 'Muli',
						'Noticia Text'      => 'Noticia Text',
						'Noto Sans'         => 'Noto Sans',
						'Old Standard TT'   => 'Old Standard TT',
						'Open Sans'         => 'Open Sans',
						'Oswald'            => 'Oswald',
						'Raleway'           => 'Raleway',
						'Roboto Slab'       => 'Roboto Slab',
						'Ubuntu'            => 'Ubuntu',
						'Vollkorn'          => 'Vollkorn',
					),
				)
			)
		);
	}
}
add_action( 'customize_register', 'miranda_font_customize_register' );

/**
 * Enqueue the list of fonts.
*/
function miranda_customizer_fonts() {
	wp_enqueue_style( 'miranda_customizer_fonts', 'https://fonts.googleapis.com/css?family=Alegreya|Alegreya+Sans+SC|Arimo|Bree+Serif|Cherry+Swash|Cinzel|Exo+2|Fondamento|Gentium+Book+Basic|Grand+Hotel|Hind|Josefin+Sans|Karla|La+Belle+Aurore|Lato|Libre+Baskerville|Lobster+Two|Lora|Merriweather|Montserrat|Muli|Noticia+Text|Noto+Sans|Noto+Serif|Old+Standard+TT|Open+Sans|Oswald|Pacifico|Playfair+Display|Quando|Raleway|Roboto+Slab|Sorts+Mill+Goudy|Tangerine|Ubuntu|Vollkorn', array(), null );
}
add_action( 'customize_controls_print_styles', 'miranda_customizer_fonts' );
add_action( 'customize_preview_init', 'miranda_customizer_fonts' );

add_action(
	'customize_controls_print_styles',
	function() {
		?>
		<style>
		<?php
		$arr = array( 'Alegreya', 'Alegreya Sans SC', 'Arimo', 'Bree Serif', 'Cherry Swash', 'Cinzel', 'Exo 2', 'Fondamento', 'Gentium Book Basic', 'Grand Hotel', 'Hind', 'Josefin Sans', 'Karla', 'La Belle Aurore', 'Lato', 'Libre Baskerville', 'Lora', 'Lobster Two', 'Merriweather', 'Montserrat', 'Muli', 'Noticia Text', 'Noto Sans', 'Noto Serif', 'Old Standard TT', 'Open Sans', 'Oswald', 'Pacifico', 'Playfair Display', 'Quando', 'Raleway', 'Roboto Slab', 'Sorts Mill Goudy', 'Tangerine', 'Ubuntu', 'Vollkorn' );

		foreach ( $arr as $font ) {
			echo '.customize-control select option[value*="' . $font . '"] {font-family: ' . $font . '; font-size: 22px;}';
		}
		?>
		</style>
		<?php
	}
);
