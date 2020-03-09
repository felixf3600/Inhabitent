<?php

function ci_sc_function( $atts ) {
	$atts = shortcode_atts( array(
		'show' => '',
	), $atts );
	if( empty($atts['show'])){
		return;
	}
	return contact_info_wid::contact_icon($atts['show']) . get_option( $atts['show'] . '_default' );
}

function contact_info_text_domain(){
	load_plugin_textdomain('contact-info', FALSE, basename( dirname( __FILE__ ) ) .'/languages');
}

function ci( $key ){
	return do_shortcode( '[ci show="'.$key.'"]' );
}