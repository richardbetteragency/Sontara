<?php
/**
 * Themes functions and definitions
 *
 * @package Alternate Lite
 */
function alternate_setup() {
	global $content_width;
		if ( ! isset( $content_width ) ){
      		$content_width = 680;
		}
	load_theme_textdomain( 'alternate-lite', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo');
	add_theme_support( 'customize-selective-refresh-widgets' );
	register_nav_menus( array(
			'main-menu' => esc_html__( 'Main Menu', 'alternate-lite' ),
			'social' 	=> esc_html__( 'Social Menu', 'alternate-lite' )
		) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff',
	) );
	add_theme_support( 'post-thumbnails' );
	add_image_size('alternate-singlethumb', 780, 400, true);
}
add_action( 'after_setup_theme', 'alternate_setup' );

function alternate_widgets_init() {
	
	register_sidebar( array(
		'name' => esc_html__( 'Left Sidebar', 'alternate-lite' ),
		'id' => 'sidebar-1',
		'description' => esc_html__( 'Left sidebar, drag and drop widgets from the left', 'alternate-lite' ),
		'before_widget' => '<div id="%1$s" class="widgets">',
      	'after_widget' => '</div>',
		'before_title' => '<h2><span>',
		'after_title' => '</span></h2>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Bottom Widgets', 'alternate-lite' ),
		'id' => 'sidebar-2',
		'description' => esc_html__( 'Widgets in the bottom, drag and drop widgets from the left', 'alternate-lite' ),
		'before_widget' => '<div id="%1$s" class="widgets">',
      	'after_widget' => '</div>',
		'before_title' => '<h2><span>',
		'after_title' => '</span></h2>',
	) );
}
add_action( 'widgets_init', 'alternate_widgets_init' );
add_filter('widget_text', 'do_shortcode');

/**
 * Register Open Sans Google fonts for Alternate.
 *
 * @return string
 */
function alternate_open_sans_font_url() {
	$open_sans_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Open Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'alternate-lite' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Open Sans character subset specific to your language,
		 * translate this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language.
		 */
		$subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'alternate-lite' );

		if ( 'cyrillic' == $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ( 'greek' == $subset ) {
			$subsets .= ',greek,greek-ext';
		} elseif ( 'vietnamese' == $subset ) {
			$subsets .= ',vietnamese';
		}

		$query_args = array(
			'family' => urlencode( 'Open Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' ),
			'subset' => urlencode( $subsets ),
		);

		$open_sans_font_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	return $open_sans_font_url;
}

function alternate_scripts_styles() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	if (!is_admin()) {
		wp_enqueue_script( 'alternate-menu', get_template_directory_uri() . '/js/reaktion.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'alternate-responsive-videos', get_template_directory_uri() . '/js/responsive-videos.js', array( 'jquery' ), '', true );
		wp_enqueue_style( 'alternate-open-sans', alternate_open_sans_font_url(), array(), null );
		wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.3' );
		wp_enqueue_style( 'alternate-style', get_stylesheet_uri());
	}
}
add_action( 'wp_enqueue_scripts', 'alternate_scripts_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';