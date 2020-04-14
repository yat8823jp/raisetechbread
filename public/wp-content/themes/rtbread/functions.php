<?php
/**
 * init
 */

if ( ! isset( $content_width ) ) :
	$content_width = 1200;
endif;

$theme         = wp_get_theme();
$theme_version = $theme->get( 'Version' );
define( 'COMMON_PFIX', get_template_directory_uri() );

function custom_theme_support() {
	add_theme_support( 'html5', array(
		'post-thumbnails',
		'title-tag'
	) );
}
add_action( 'after_setup_theme', 'custom_theme_support' );

function readScript() {
	wp_enqueue_style(  'ress', get_template_directory_uri() . '/ress.min.css' , array(), $theme_version );
	wp_enqueue_style(  'robot', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), '' );
	wp_enqueue_style(  'mplus', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array(), '' );
	wp_enqueue_style(  'rtbread', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style(  'leaflet', '//cdn.leafletjs.com/leaflet-0.7.3/leaflet.css', array(), $theme_version );
	wp_enqueue_script( 'leafletjs', '//cdn.leafletjs.com/leaflet-0.7.3/leaflet.js', '', '', false );
	wp_enqueue_script( 'gmap', '//maps.google.com/maps/api/js?key=AIzaSyDY6E3e19xzXSzgTXCJzrvne3Mg--FERaQ&language=ja', '', '', false );
	wp_enqueue_script( 'leafletgoogle', '//matchingnotes.com/javascripts/leaflet-google.js', '', '', false );
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.4.1.min.js', '', '', true );
	wp_enqueue_script( 'bundle', get_template_directory_uri() . '/js/bundle.js', 'jquery', $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'readScript' );

