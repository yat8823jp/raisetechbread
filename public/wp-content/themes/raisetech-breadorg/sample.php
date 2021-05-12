<html lang="ja"> → <html <?php language_attributes(); ?>>
<meta charset="UTF-8">→<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="description" content="サイトの説明文が入ります">→<meta name="description" content="<?php bloginfo( 'description' ); ?>">

<meta property="og:site_name" content="サイトの説明文が入ります"> → <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:image" content="./images/common/meta/ogp_fb.jpg"> → <meta property="og:image" content="<?php echo COMMON_PFIX; ?>/images/common/meta/ogp_fb.jpg">
<meta name="twitter:title" content="サイトの説明文が入ります | localhost"> → <meta name="twitter:title" content="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'url' ); ?>">

<meta property="og:title" content="サイトのタイトルが入ります">→ <meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:url" content="localhost">→<meta property="og:url" content="<?php bloginfo( 'url' ); ?>">
<meta property="og:description" content="サイトの説明文が入ります"> migi <meta property="og:description" content="<?php get_template_part( "component/description" ); ?>">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="./images/common/favicon.ico"> → <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo COMMON_PFIX; ?>/images/common/favicon.ico">
<title>Hamburger &#8211; RaiseTech Bread</title> →削除（ functions.php 似て設定 ）
<link rel="stylesheet" id="robot-css"  href="//fonts.googleapis.com/css2?family=Roboto%3Awght%40400%3B700&#038;display=swap&#038;ver=5.4" type="text/css" media="all" />→削除（ functions.php 似て設定 ）
<link rel="stylesheet" id="mplus-css"  href="//fonts.googleapis.com/css2?family=M+PLUS+1p%3Awght%40400%3B700&#038;display=swap&#038;ver=5.4" type="text/css" media="all" />→削除（ functions.php 似て設定 ）
<link rel="stylesheet" id="rtbread-css"  href="./style.css" type="text/css" media="all" />→削除（ functions.php 似て設定 ）
<script type="text/javascript" src="./js/jquery-3.5.0.min.js"></script>→削除（ functions.php 似て設定 ）
<body class="home"> → <body <?php body_class(); ?>>
