<?php

// Load WordPress
require( 'wp-load.php' );

// Clear cache
if ( function_exists( 'rocket_clean_domain' ) ) {
	rocket_clean_domain();
 }

// Clear minified CSS and JavaScript files.
if ( function_exists( 'rocket_clean_minify' ) ) {
	rocket_clean_minify();
}