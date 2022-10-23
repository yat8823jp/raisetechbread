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

	//カテゴリー説明文でHTMLタグを使う
	remove_filter( 'pre_term_description', 'wp_filter_kses' );

	//カテゴリー説明文から自動で付与されるpタグを除去
	remove_filter( 'term_description', 'wpautop' );

	function my_delete_local_jquery() {
		wp_deregister_script( 'jquery' );
	}
	add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );

	function readScript() {
		wp_enqueue_style(  'oswald', '//fonts.googleapis.com/css2?family=Oswald:wght@400;600&display=swap', array(), "" );
		wp_enqueue_style(  'robot', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), "" );
		wp_enqueue_style(  'mplus', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array(), "" );
		wp_enqueue_style(  'rtbread', get_stylesheet_uri(), array(), "" );
		wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.5.0.min.js', '', '3.5.0', true );
		wp_enqueue_script( 'bundle', get_template_directory_uri() . '/js/bundle.js', 'jquery', "", true );
	}
	add_action( 'wp_enqueue_scripts', 'readScript' );

