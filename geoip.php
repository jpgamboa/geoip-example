<?php
/*
Plugin Name: John Gamboa's GeoTarget Redirect Example
Description: Redirects visitor traffic based on geo-location using the WP Engine GeoTarget feature
Version: 1.3
License: GPLv2
*/

function country_geo_redirect() {
    $country = isset( $_SERVER['HTTP_GEOIP_COUNTRY_CODE'] )
        ? $_SERVER['HTTP_GEOIP_COUNTRY_CODE']
        : getenv( 'HTTP_GEOIP_COUNTRY_CODE' );

    if ( ! $country ) {
        return;
    }

    if ( $country === 'US' ) {
        wp_redirect( 'https://en.wikipedia.org/wiki/United_States', 301 );
        exit;
    } elseif ( $country === 'BR' ) {
        wp_redirect( 'https://en.wikipedia.org/wiki/Brazil', 301 );
        exit;
    } else {
        wp_redirect( 'https://en.wikipedia.org/wiki/Earth', 301 );
        exit;
    }
}

add_action( 'init', 'country_geo_redirect' );
