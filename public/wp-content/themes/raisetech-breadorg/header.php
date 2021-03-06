<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="article">
	<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
	<meta property="og:image" content="<?php get_template_directory_uri(); ?>/images/common/meta/ogp_fb.jpg">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="blog">
	<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'url' ); ?>">
	<meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
	<meta property="og:url" content="<?php bloginfo( 'url' ); ?>">
	<meta property="og:description" content="<?php get_template_part( "component/description" ); ?>">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php get_template_directory_uri(); ?>/images/common/favicon.ico">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if( is_search() || is_archive() ) : ?>
		<div class="l-container p-archive">
	<?php elseif( is_single() || is_page() || is_404() ) : ?>
		<div class="l-container p-detail">
	<?php else : ?>
		<div class="l-container">
	<?php endif; ?>
		<main class="l-main">
			<header class="l-header">
				<?php if( is_home() || is_front_page( ) ) : ?>
					<h1 class="l-header__sitename"><?php bloginfo( 'name' ); ?></h1>
				<?php else : ?>
					<p class="l-header__sitename"><a href="<?php echo esc_url( home_url( "/" ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>
				<?php get_search_form(); ?>
				<button id="sidebar-bt--open" class="l-sidebar-bt--open">Menu</button>
			</header>
