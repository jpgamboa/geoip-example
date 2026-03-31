# geoip-example

Example of how to use WP Engine's GeoTarget (formerly GeoIP) system with PHP. WP Engine's GeoTarget is an add-on featuring MaxMind's GeoIP database.

## Country Codes

See `countrycodes.txt` for ISO-3166 country codes for use in the plugin.

## Installation

1. Upload `geoip.php` to the `/wp-content/plugins/` directory of your WordPress site.
2. Activate the plugin from the WordPress admin Plugins page.

## Requirements

You must have WP Engine's GeoTarget addon enabled on your account for this plugin to work.

## How It Works

The plugin hooks into WordPress `init` and reads the visitor's country code from the `HTTP_GEOIP_COUNTRY_CODE` header set by WP Engine's GeoTarget. It then redirects with a 301 based on the country:

- **US** -> `https://en.wikipedia.org/wiki/United_States`
- **BR** -> `https://en.wikipedia.org/wiki/Brazil`
- **All others** -> `https://en.wikipedia.org/wiki/Earth`

Edit the country codes and URLs in `geoip.php` to match your needs.

**Note:** As written, this redirects on every page load. For production use, you'll likely want to limit redirects to specific pages or add a cookie so visitors are only redirected once.
