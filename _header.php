<?php 
	// figure out what page we are on

	$classes = get_body_class(); // handy to tell which page we're on

	// if we're on the 'meet the team' custom post type $team = true
	foreach($classes as $key=>$value){
		if(strpos($value,'the_team') !== false){
			$page = 'team';
		}
		if($team){ break; }
	}

	$header_class = '';

	if (in_array('home',$classes)) {
		$page = 'home';
		$header_class = 'full';
	}
	if (in_array('error404',$classes)) {
		$page = 'error404';
	}
	if (in_array('single-post',$classes)) {
		$page = 'single';
	}
	if (in_array('search',$classes)) {
		$page = 'search';
	}
	if ($page == null) {
		$page = 'page';
	}

	
	// getting thumbnail to display as background:

	// wp functions
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id,'full', true);
	$thumb = false;

	// if has post thumbnail, and is not certain pages, show.
	if(has_post_thumbnail() && $page != 'team' && $page != 'home'){ 
		$bg_url = 'style="background-image:url(\'' . $image_url[0] . '\') ;"';
		$thumb = true;
	};
	if($page == 'search') {
		$bg_url = 'style="background-image:url(\'http://thedegreeshow.com/wp-content/uploads/2014/04/1009999_10202925685888235_996614186_n.jpg\') ;"';
		$thumb = true;
	};
?>

<!-- search -->
<section id="search">
	<?php get_search_form(); ?>
	<img src="<?php echo get_template_directory_uri(); ?>/library/images/ico-cross-xl.png" alt="close search" class="ico-close searchtoggle">
</section>
<!-- /search -->

<!-- header -->
<header class="hero <?php echo $header_class; ?>" <?php echo $bg_url; ?> >
	
<!-- 	<?php if($thumb){?>
		<span class="over"></span>
	<?php }?> -->

	<div class="header-content">
		
		<!-- mini seach/menu nav -->
		<nav id="header-nav">

			<div class="header-nav">
				<p class="searchtoggle">Search</p>
				<p class="navtoggle">Menu</p>
			</div>

			<a href="<?php echo home_url(); ?>" rel="nofollow" class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-header.png" alt="<?php bloginfo('name'); ?>">
			</a>

		</nav>
		<!-- /mini-mav -->

		<!-- header-intro -->
		<div class="header-intro">

		<?php // show on the homepage
			if ($page == 'home') {
		?>

			<h1>
				<a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
			</h1>

			<div class="header-info">
				<p class="header-date">16 - 20 June 2014</p>
				<p class="header-place">Ravensbourne</p>
			</div>
			<a href="#booking" class="cta lg-cta bold">book your place</a>

		<?php }; // end homepage only ?>


		<?php // show on pages, combate the SEO plugin
			if ($page == 'page' || $page == 'team' || $page == 'search'){ 
		?>
			<h1>
				<a href="<?php echo home_url(); ?>" rel="nofollow"><?php wp_title(); ?></a>
			</h1>

		<?php }; // end single only?>


		<?php // show on single posts, meta data and title
			if ($page == 'single'){ 
		?>
			<h1>
				<a href="<?php echo home_url(); ?>" rel="nofollow"><?php the_title(); ?></a>
			</h1>

			<div class="header-info">

				<?php
					echo '<p class="header-person">';
						the_author_meta('display_name', $post->post_author);
					echo '</p>';

					printf( __( '<p class="header-clock"><time class="updated" datetime="%1$s" pubdate>%2$s</time></p><p class="header-info">%4$s</p>

					', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', ') );
					?>

			</div>

		<?php }; // end single only?>

		</div>
		<!-- /header-intro -->


	</div> <!-- .header-content -->

</header>
<!-- /header -->