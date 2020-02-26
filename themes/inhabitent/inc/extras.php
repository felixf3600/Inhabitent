<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function Inhabitent_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	if ( is_page('about') ) {
		$classes[] = 'page-about';
	}

	return $classes;
}
add_filter( 'body_class', 'Inhabitent_starter_body_classes' );


function new_custom_login_logo() {
	echo '
		<style> h1 a { background-image:url('.get_template_directory_uri().'/assets/logos/inhabitent-logo-text-dark.svg) !important; height:70px !important; background-size: contain !important; width: 320px !important; }
	</style>' ;
} 

add_action('login_head', 'new_custom_login_logo');

	function new_wp_login_url() {
	return home_url();
}
add_filter('login_headerurl', 'new_wp_login_url');