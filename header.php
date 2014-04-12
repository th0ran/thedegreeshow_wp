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

<?php 
	$classes = get_body_class(); // handy to tell which page we're on

	// if we're on the 'meet the team' custom post type, treat it like a page
	// foreach($classes as $key=>$value){
	// 	if(strpos($value,'the_team') !== false){ $page = true; }
	// 	if($page){ break; }
	// }

?>

<!-- Side navigation must be outside the wrapper -->
<?php get_sidebar(); ?>

<!-- wrapper -->
<div id="wrapper">

	<section id="search">
		<?php get_search_form(); ?>
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/ico-cross-xl.png" alt="close search" class="ico-close searchtoggle">
	</section>

	<header class="hero <?php if (in_array('home',$classes)) { echo 'full'; } ?>">

		<nav id="header-nav">
		
			<div class="header-nav">
				<p class="searchtoggle">Search</p>
				<p class="navtoggle">Menu</p>
			</div>

			<a href="<?php echo home_url(); ?>" rel="nofollow" class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-header.png" alt="<?php bloginfo('name'); ?>">
			</a>

		</nav>

		<!-- header-intro -->
		<div class="header-intro">

		<?php //	SHOW THE FOLLOWING ONLY ON THE HOMEPAGE
			if (in_array('home',$classes)) { ?>

				<h1>
					<a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
				</h1>
				<div class="header-info">
					<p class="header-date">16 - 20 June 2014</p>
					<p class="header-place">Ravensbourne</p>
				</div>
				<a href="#booking" class="cta lg-cta">book your place</a>


		<?php // SHOW ON PAGES THAT AREN'T THE HOMEPAGE
			} else { ?>

				<?php //	SHOW TITLE ON POST AND PAGES, but not the 404 page...
					if (!in_array('error404',$classes)) { ?>
				<h1>
					<a href="<?php echo home_url(); ?>" rel="nofollow"><?php wp_title(''); ?></a>
				</h1>
				<?php };?>


				<?php //	SHOW THE FOLLOWING ONLY ON POSTS
					if(in_array('single-post',$classes)) { ?>

					<div class="header-info">
						
						<?php
							echo '<p class="header-person">';
							the_author_meta('display_name', $post->post_author);
							echo '</p>';

							printf( __( '<p class="header-clock"><time class="updated" datetime="%1$s" pubdate>%2$s</time></p><p class="header-info">%4$s</p>
								

								', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', ') );
						?>

					</div>
				<?php };?>

		<?php }; ?>

		</div>
		<!-- /header-intro -->

	</header>

	<div class="content" role="main">