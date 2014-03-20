<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<!-- Google Chrome Frame for IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php bloginfo('name'); ?><?php wp_title(':'); ?></title>

	<!-- mobile meta (hooray!) -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!-- icons & favicons -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

	<!-- drop Google Analytics Here -->
	<!-- end analytics -->

</head>

<body <?php body_class(); ?>>

<?php get_sidebar(); ?>

<div id="wrapper">

	<header class="home">

		<div class="header-nav">
			<p class="searchtoggle">Search</p>
			<p class="navtoggle">Menu</p>
		</div>

		<a href="<?php echo home_url(); ?>" rel="nofollow" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-header.png" alt="<?php bloginfo('name'); ?>"></a>

		<div class="header-intro">
			<h1>
				<a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
			</h1>
			<div class="header-info">
				<p class="header-date">16 - 20 June 2014</p>
				<p class="header-place">Ravensbourne</p>
			</div>
			<div><a href="#booking" class="cta">book your place</a></div>
		</div>

	</header>

	<div class="content" role="main">