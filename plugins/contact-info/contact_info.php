<?php 
/*
Plugin Name: Contact Info
Plugin URI: https://wordpress.org/plugins/contact-info/
Description: This Plugin will allow the admin user to update the contact information and display them using functions and shortcodes. This includes Phone no, Email, and Address.
Version: 3.1.7
Text Domain: contact-info
Author: aviplugins.com
Author URI: https://www.aviplugins.com/
*/	

/**
	  |||||   
	<(`0_0`)> 	
	()(afo)()
	  ()-()
**/

/* 
* Create more icons at https://fontawesome.com/v4.7.0/icons/
*
* Add Icons at config/config_general.php
*/

define( 'CI_DIR_NAME', 'contact-info' );
define( 'CI_DIR_PATH', dirname( __FILE__ ) );

function ci_plug_install(){
	include_once CI_DIR_PATH . '/config/config_general.php';
	include_once CI_DIR_PATH . '/includes/class_settings.php';
	include_once CI_DIR_PATH . '/includes/class_scripts.php';
	include_once CI_DIR_PATH . '/contact_info_widget.php';
	include_once CI_DIR_PATH . '/functions.php';
	new contact_info;
	new contact_info_scripts;
}

class ci_plugin_init {
	function __construct() {
		ci_plug_install();
	}
}
new ci_plugin_init;

add_shortcode( 'ci', 'ci_sc_function' );

add_action( 'widgets_init', function(){ register_widget( 'contact_info_wid' ); } );

add_action( 'plugins_loaded', 'contact_info_text_domain' );