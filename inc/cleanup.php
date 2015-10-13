<?php
/**
 * Cleaning up wordpress
 *
 *
 * @package eyedea
 */

 /**
 * Clean up navigation
 */
 //Deletes all CSS classes and id's, except for those listed in the array below
 function custom_wp_nav_menu($var) {
 	return is_array($var) ? array_intersect($var, array(
 		//List of allowed menu classes
 		'current_page_item',
 		'current_page_parent',
 		'current_page_ancestor',
 		'first',
 		'last',
 		'vertical',
 		'horizontal',
 		'menu-item-has-children'
 	)
 	) : '';
 }
 add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
 add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
 add_filter('page_css_class', 'custom_wp_nav_menu');

 // Remove meta links at header
 remove_action( 'wp_head', 'wp_generator' ) ;
 remove_action( 'wp_head', 'wlwmanifest_link' ) ;
 remove_action( 'wp_head', 'rsd_link' ) ;
 // Remove RSS feeds
 remove_action( 'wp_head', 'feed_links', 2 );
 remove_action( 'wp_head', 'feed_links_extra', 3 );

 // Remove emoji's
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' );
