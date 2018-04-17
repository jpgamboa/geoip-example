<?php
/*
Plugin Name: John Gamboa's GeoTarget Redirect Example
Description: Redirecting visitor traffic based on geo-location using the WPEngine GeoTarget feature
Version: 1.1
License: GPLv2
*/

function country_geo_redirect() {

$country = getenv('HTTP_GEOIP_COUNTRY_CODE');

if ( $country == "US" ) {

wp_redirect( 'https://en.wikipedia.org/wiki/United_States', 301 );

     exit;

} else if ( $country == "BR" ) {

wp_redirect( 'https://en.wikipedia.org/wiki/Brazil', 301 );

     exit;

}else if ( $country !== "(US|BR)" ) {

wp_redirect( 'https://en.wikipedia.org/wiki/Earth', 301 );

     exit;

}

}

add_action('init', 'country_geo_redirect');
