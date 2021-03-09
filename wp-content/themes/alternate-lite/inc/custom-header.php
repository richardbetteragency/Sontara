<?php
/**
 *
 * @package Alternate Lite
 */

/**
 * Setup the WordPress core custom header feature.
 */
function alternate_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'alternate_custom_header_args', array(
		'uploads'       => false,
		'default-text-color'     => '3f3f3f',
		'wp-head-callback'       => 'alternate_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'alternate_custom_header_setup' );

if ( ! function_exists( 'alternate_header_style' ) ) :
        function alternate_header_style() {
                wp_enqueue_style( 'alternate-style', get_stylesheet_uri() );
                $header_text_color = get_header_textcolor();
                $position = "absolute";
                $clip ="rect(1px, 1px, 1px, 1px)";
                if ( ! display_header_text() ) {
                        $custom_css = '.site-title, .site-description {
                                position: '.$position.';
                                clip: '.$clip.'; 
                        }';
                } else{

                        $custom_css = 'h1.site-title, h2.site-description  {
                                color: #' . $header_text_color . ';                     
                        }';
                }
                wp_add_inline_style( 'alternate-style', $custom_css );
        }
        add_action( 'wp_enqueue_scripts', 'alternate_header_style' );

endif;