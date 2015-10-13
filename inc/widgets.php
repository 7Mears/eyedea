<?php
/**
 * Register widget area.
 *
 *
 * @package eyedea
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 *
 */

 function eyedea_widgets_init() {
 	register_sidebar( array(
 		'name'          => __( 'Sidebar', 'eyedea' ),
 		'id'            => 'sidebar-1',
 		'description'   => '',
 		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
 		'after_widget'  => '</aside>',
 		'before_title'  => '<h1 class="widget-title">',
 		'after_title'   => '</h1>',
 	) );

 	//Home Hero
 	register_sidebar( array(
 		'name'          => __( 'Home Hero', 'eyedea' ),
 		'id'            => 'home-hero',
 		'description'   => 'This is the first section of the home page.',
 		'before_widget' => '<div class="home-hero-widget %2$s">',
 		'after_widget'  => '</div>',
 		'before_title'  => '<h2 class="widget-title">',
 		'after_title'   => '</h2>',
 		) );

 	//Footer
 	register_sidebar( array(
 		'name'          => __( 'Footer', 'eyedea' ),
 		'id'            => 'footer',
 		'description'   => 'This is the footer.',
 		'before_widget' => '<div class="footer-widget %2$s">',
 		'after_widget'  => '</div>',
 		'before_title'  => '<h2 class="widget-title">',
 		'after_title'   => '</h2>',
 		) );
 }
 add_action( 'widgets_init', 'eyedea_widgets_init' );
