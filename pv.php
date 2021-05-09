<?php
/*
Plugin Name: PV Formula notes share
Plugin URI: https://www.jbparfum.com/
Description:  Share your formula notes directly from your PV server
Version: 1.0
Author: JB Parfum
Author URI: https://www.jbparfum.com/
License: GPLv3
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define('PV_PLUGIN_VERSION', '1.0');

function pv_plugin_add_shortcode_cb( $params ) {

	$html = "\n".'<!-- PV plugin v.'.PV_PLUGIN_VERSION.' https://www.jbparfum.com/ -->'."\n";
	
	foreach( $params as $param => $v ) {
		$html .= file_get_contents($v);
	}

	return $html;
}
add_shortcode( 'pv', 'pv_plugin_add_shortcode_cb' );

