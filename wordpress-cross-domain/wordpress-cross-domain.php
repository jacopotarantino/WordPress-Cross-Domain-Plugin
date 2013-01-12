<?php

// set up the admin page

//get and scrub the inputs from the page

$access_list = "";

add_filter('wp_headers','jt_add_origin');

function jt_add_origin($headers) {
	$headers['Access-Control-Allow-Origin'] = $access_list;
	return $headers;
}

?>
