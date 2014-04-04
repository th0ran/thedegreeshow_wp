<?php get_header(); ?>

 <!-- <div id="map"></div> -->

<section class="booking container-fluid">

	<div class="row">

		<div class="col-md-12">
			
			<h1>Book Your Place</h1>

			<p class="intro">
				Lorem ipsum dolor sit amet, in pro ludus aperiam insolens, novum simul et nam. His et odio suas unum. Eam cu ullum concludaturque, at quas ubique doctus eum. Ei choro legimus detraxit per. No novum omittam interesset has, quo ut magna.
			</p>

			<hr>

		</div>

	</div>

	<div class="row days">

		<div class="col-md-4">
			
			<h2>Monday 16th June</h2>
			<h4>Day 1</h4>

			<p>
				Eam cu ullum concludaturque, at quas ubique doctus eum. Ei choro legimus detraxit per. No novum omittam interesset has, quo ut magna.
			</p>

			<a href="#" class="cta">Book now</a>

		</div>

		<div class="col-md-4">
			
			<h2>Tuesday 17th June</h2>
			<h4>Day 2</h4>

			<p>
				Eam cu ullum concludaturque, at quas ubique doctus eum. Ei choro legimus detraxit per. No novum omittam interesset has, quo ut magna.
			</p>

			<a href="#" class="cta">Book now</a>

		</div>

		<div class="col-md-4">
			
			<h2>Wednesday 18th June</h2>
			<h4>Day 3</h4>

			<p>
				Eam cu ullum concludaturque, at quas ubique doctus eum. Ei choro legimus detraxit per. No novum omittam interesset has, quo ut magna.
			</p>

			<a href="#" class="cta">Book now</a>

		</div>

	</div>

	<div class="row days">

		<div class="col-md-4">
			
			<h2>Thursday 19th June</h2>
			<h4>Day 4</h4>

			<p>
				Eam cu ullum concludaturque, at quas ubique doctus eum. Ei choro legimus detraxit per. No novum omittam interesset has, quo ut magna.
			</p>

			<a href="#" class="cta">Book now</a>

		</div>

		<div class="col-md-4">
			
			<h2>Friday 20th June</h2>
			<h4>Day 5</h4>

			<p>
				Eam cu ullum concludaturque, at quas ubique doctus eum. Ei choro legimus detraxit per. No novum omittam interesset has, quo ut magna.
			</p>

			<a href="#" class="cta">Book now</a>

		</div>

	</div>

</section><!--/booking-->

<section class="featured container-fluid">

	<a href="#" class="cta btn-news">
		<span>All news</span>
	</a>


	<div class="row">

	<!-- posts here must be in category 'featured' caps sensitive -->
	<?php query_posts('posts_per_page=2&category_name=featured'); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="col-md-6">

			<div class="story">

				<a href="<?php the_permalink() ?>">
					<h1><?php the_title(); ?></h1>
				</a>
				<p>
					<?php the_excerpt(); ?>
				</p>
				<p class="byline">
					<?php
						printf( __( '<em>Posted by <span class="author">%3$s</span></em>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link());
					?>
				</p>

			</div>

		</div>

	<?php endwhile; ?> <?php wp_reset_query(); ?>

	</div>

</section><!--/featured-->

<section class="front-posts container-fluid">

	<div class="row">

		<div class="col-md-5 tweets">
			<h1>Latest Tweets</h1>

			<?php echo do_shortcode('[kebo_tweets count="4"]'); ?>

		</div>

		<div class="col-md-6 col-md-push-1 news">
			<h1>Latest News</h1>
			
			<?php query_posts('posts_per_page=3'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article">

				<header class="article-header">

					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				</header>

				<section class="article-content">
					<?php the_excerpt(); ?>
				</section>

			</article>

			<footer class="article-footer">

				<p class="byline">
					<?php
						printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')));
					?>
					<!-- tags, uncomment if you want to use them -->
					<!-- <p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p> --> 
				</p>


			</footer>

			<?php // comments_template(); // uncomment if you want to use them ?>

			<?php endwhile; ?>

			<?php else : ?>

				<h1>Post not found</h1>

			<?php endif; ?>

		</div>

	</div>

</section><!--/front-posts-->

<section class="location container-fluid">
	<div class="row address">

		<div class="col-md-12">
			
			<h1>Ravensbourne</h1>

			<p class="intro">
				Located on the Greenwich Digital Peninsula, London's newest digital community, just 20 minutes away from Tech City, the capital's fast-growing media and technology hub.
			</p>

			<div class="row">
				<div class="col-sm-6">

					<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-rave.png" class="logo" alt="ravensbourne logo" />

				</div>
				<div class="col-sm-6">

					<address>
						6 Penrose Way<br />
						Greenwich Peninsula<br />
						London<br />
						SE10 0EW
					</address>
					
				</div>
			</div>

		</div>

	</div>
</section><!-- /location -->

<section class="sponsors container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h4>Sponsored by</h4>

			<ul class="sponsors-list">
				<li>1</li>
				<li>2</li>
				<li>3</li>
				<li>4</li>
				<li>5</li>
				<li>6</li>
				<li>7</li>
				<li>8</li>
				<li>9</li>
				<li>10</li>
				<li>11</li>
				<li>12</li>
				<li>13</li>
				<li>14</li>
				<li>15</li>
			</ul>
		</div>
	</div>
</section><!-- /sponsors -->
<?php get_footer(); ?>
