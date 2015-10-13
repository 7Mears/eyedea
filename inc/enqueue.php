<?php
/**
 * Enqueue scripts and styles.
 *
 *
 * @package eyedea
 */



function eyedea_scripts() {
	// Main stylesheet
	wp_enqueue_style( 'eyedea-style', get_stylesheet_uri() );
	// Main javascript file with jquery
	wp_enqueue_script( 'eyedea-javascript', get_template_directory_uri() . '/js/app.js', array('jquery'), '20130115', true );
	// Google Fonts
	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Roboto:500,900,400italic,100,700italic,300,700,500italic,100italic,300italic,400|Roboto+Slab:400,100,300,700');
	wp_enqueue_style( 'googleFonts');
	wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '4.0.3' );
	// Comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eyedea_scripts' );
