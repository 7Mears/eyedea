<?php
/**
 * eyedea functions and definitions
 *
 * @package eyedea
 */
//Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}
if ( ! function_exists( 'eyedea_setup' ) ) :
function eyedea_setup() {
	// Add language support
	load_theme_textdomain( 'eyedea', get_template_directory() . '/languages' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	//Let WordPress manage the document title.
	add_theme_support( 'title-tag' );
	//Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'eyedea' ),
	) );
	// Switch default markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	//Enable support for Post Formats.
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );
	// Set up the WordPress custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'eyedea_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // eyedea_setup
add_action( 'after_setup_theme', 'eyedea_setup' );


// Load Scripts and Styles
require get_template_directory() . '/inc/enqueue.php';
// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';
// Custom functions that act independently of the theme templates.
require get_template_directory() . '/inc/extras.php';
// Clean up Wordpress
require get_template_directory() . '/inc/cleanup.php';
// Widgets
require get_template_directory() . '/inc/widgets.php';
//Load Jetpack compatibility file.
// require get_template_directory() . '/inc/jetpack.php';
// Implement the Custom Header feature.
  //require get_template_directory() . '/inc/custom-header.php';
// Shame
// require get_template_directory() . '/inc/shame.php';
