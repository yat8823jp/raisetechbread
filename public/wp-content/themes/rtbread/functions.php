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
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'menus' );
	register_nav_menus( array(
		'footer_nav' => esc_html__( 'footer navigation', 'rtbread' ),
		'category_nav' => esc_html__( 'category navigation', 'rtbread' ),
	) );
}
add_action( 'after_setup_theme', 'custom_theme_support' );

function readScript() {
	wp_enqueue_style(  'ress', get_template_directory_uri() . '/ress.min.css' , array(), $theme_version );
	wp_enqueue_style(  'robot', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), '' );
	wp_enqueue_style(  'mplus', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array(), '' );
	wp_enqueue_style(  'rtbread', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.4.1.min.js', '', '', true );
	wp_enqueue_script( 'bundle', get_template_directory_uri() . '/js/bundle.js', 'jquery', $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'readScript' );
