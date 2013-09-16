<?php
/*
Plugin Name: JT Cross Domain Ajax GUI
Plugin URI: http://jacopotarantino.com/wordpress-cross-domain-access-control-allow-origin-plugin/
Description: Adds headers via WordPress so you can do AJAX across domains and not run into the access-control-allow-origin error.
Author: Jacopo Tarantino
Version: 3.0
Author URI: http://jacopotarantino.com
License: Creative Commons Attribution 3.0 Unported
Copyright 2013 Jacopo Tarantino (email: jacopo.tarantino@gmail.com)

This program is free software; you can redistribute it and/or modify it under the terms of the Creative Commons Attribution 3.0 Unported License.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  Any version of this software including modified and commercial versions must give credit to Jacopo Tarantino for the original software.
*/

// ------------------------------------------------------------------
// Add the access-control-allow-origin header to the wp headers list
// iff it has a value filled in.
// ------------------------------------------------------------------
add_filter('wp_headers','jt_add_origin');

function jt_add_origin($headers) {
	if( !empty( $_SERVER['HTTP_REFERER'] ) ) {
		$ref = $_SERVER['HTTP_REFERER'];

		$jt_acao = get_option('jt_cross_domain_settings');

		if ( $jt_acao != false ) {
			$sites = explode(",", $jt_acao);

			foreach ($sites as $site) {
				$pos = strpos($ref, trim($site) );
				if ( $pos !== false ) {
					$headers['Access-Control-Allow-Origin'] = trim($site);
					return $headers;
				}
			}
		}
	}
	return $headers;
}


// ------------------------------------------------------------------
// Add all the sections, fields and settings during admin_init
// ------------------------------------------------------------------

function cross_domain_settings_api_init() {
	add_settings_section('jt_cross_domain_setting_section',
	'Cross Domain Settings',
	'jt_cross_domain_output',
	'general');

	add_settings_field('jt_cross_domain_settings',
	'Allowed Domains',
	'jt_cross_domain_callback',
	'general',
	'jt_cross_domain_setting_section');

	register_setting('general','jt_cross_domain_settings');
}

add_action('admin_init', 'cross_domain_settings_api_init');


// ------------------------------------------------------------------
// Settings section callback function
// ------------------------------------------------------------------

function jt_cross_domain_output() {
	echo "<p>Enter a comma-separated list of the domains you'd like to allow to access files/pages managed by WordPress<br><br> Or enter an asterisk ( * ) to allow any site to make cross-domain AJAX requests to this site.</p>";
}

// ------------------------------------------------------------------
// Callback function for our example setting
// ------------------------------------------------------------------

function jt_cross_domain_callback() {
	echo '<input name="jt_cross_domain_settings" class="regular-text" id="jt_cross_domain_settings" type="text" value="' . get_option('jt_cross_domain_settings') . '" class="code" /> <p class="description">(eg. http://example.com, http://store.example.com, http://foo.bar.com)</p>';
}

?>
