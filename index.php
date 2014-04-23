<?php get_header(); ?>

<section id="booking" class="booking container-fluid">

	<div class="row">

		<div class="col-md-12">
			
			<h1>Who are we?</h1>

			<p class="intro light">
				<!-- Every June, The Degree Show transforms Ravensbourne into one of the most exciting and innovative exhibitions that focuses on showing students’ work in the most unique way possible. Our alumni is extensive, which includes various award winning producers and directors such as academy award winner Gareth Unwin, producer of ‘The Kings Speech’. The Degree Show has been a starting block for many of our students’ careers. Join us from the 16th - 20th June 2014, from 4pm until 10pm each day, and celebrate our work with us. -->
				We are <span class="italic">the</span> student showcase to be at this summer. Ravensbourne's immense talent gathers for one week to celebrate the class of 2014 in an action packed event, with courses from Animation to Web Media exhibiting their very best work. 
			</p>
			<p class="intro light">
				The Degree Show has been a starting block for many of our students’ careers - Our alumni is extensive, which includes various producers and directors such as academy award winners Gareth Unwin and Simon Egan, producers of ‘The Kings Speech’, to the likes of Stella McCartney, fashion designer. Join us from the 16th - 20th June 2014 from 4pm until 10pm each day, and celebrate our work with us.
			</p>

			<hr>

		</div>
	</div>

	<div class="row days">

		<div class="col-md-4">
			
			<h2 class="light">Monday 16th June</h2>
			<h4>Day 1</h4>

			<p>
				The 16th June is the first day of our live broadcast on digital terrestrial and online. There will be live shows around the building as well as private views for Editing and Post Production, Music Production for Media and Web Media. We kick off the show with the our annual awards ceremony, which is a privately ticketed event, where we celebrate the best of our graduates’ work.
			</p>

			<a href="http://tickets.thedegreeshow.com/?utm_campaign=monday&utm_source=website" class="cta">Book now</a>

		</div>

		<div class="col-md-4">
			
			<h2 class="light">Tuesday 17th June</h2>
			<h4>Day 2</h4>

			<p>
				On the 17th June is our second day of live broadcasting, with even more live programmes being transmitted straight out of our building. You will also be able to attend the Broadcast Engineering, Broadcast Operations and Production and Sound Design private views. This will also be your chance to attend the private screenings of work from our Digital Film Production course. 
			</p>

			<a href="http://tickets.thedegreeshow.com/?utm_campaign=tuesday&utm_source=website" class="cta">Book now</a>

		</div>

		<div class="col-md-4">
			
			<h2 class="light">Wednesday 18th June</h2>
			<h4>Day 3</h4>

			<p>
				The 18th June is our schools day, where we invite our main feeder schools down and any students who are looking to study at Ravensbourne. It is also the private view for our Foundation Courses, where we invite all friends and family of our FE students down to view their work as part of the wider exhibition. We also have the Fashion Private view, which is a invite-only event.
			</p>

			<a href="http://tickets.thedegreeshow.com/?utm_campaign=wednesday&utm_source=website" class="cta">Book now</a>

		</div>

	</div>

	<div class="row days">

		<div class="col-md-4">
			
			<h2 class="light">Thursday 19th June</h2>
			<h4>Day 4</h4>

			<p>
				The Degree Show transforms again on the 19th June into focusing more on our design cluster courses. Not only will you be able to browse through some amazing installations around the building but you will also be able to attend the Graphics, Motion Graphics and Product Design and Design Interaction private views.
			</p>

			<a href="http://tickets.thedegreeshow.com/?utm_campaign=thursday&utm_source=website" class="cta">Book now</a>

		</div>

		<div class="col-md-4">
			
			<h2 class="light">Friday 20th June</h2>
			<h4>Day 5</h4>

			<p>
				The 20th sees the close of The Degree Show, and as well as being the wrap party for everyone that has helped with the show, there is also the Animation, Architecture, Digital Photography and IDEAs private views, and is your last chance to see all the students’ who are exhibiting this year.
			</p>

			<a href="http://tickets.thedegreeshow.com/?utm_campaign=friday&utm_source=website" class="cta">Book now</a>

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

		<?php
			// getting thumbnail to display as background:
			$image_id = get_post_thumbnail_id();
			$image_url = wp_get_attachment_image_src($image_id,'large', true);
		?>

		<div class="col-md-6" <?php if(has_post_thumbnail()){ echo 'style="background-image:url(' . $image_url[0] . ');"' ; };?>>

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


<section class="location">
	<div id="map"></div>
	<div class="address">

		<span class="map-toggle arrow"></span>

		<div class="map-info">
			
			<h1 class="map-toggle">Ravensbourne</h1>

			<p class="intro">
				Located on the Greenwich Digital Peninsula, London's newest digital community, just 20 minutes away from Tech City, the capital's fast-growing media and technology hub.
			</p>
			<p>
				You can get to Ravensbourne via the Jubilee Line to North Greenwich, the Emirates Airline from Emirates Royal Docks or the Thames Clipper from London Bridge or Embankment. 
				If you are travelling from abroad the nearest airport is London City Airport or we are half an hour away from St. Pancras International where the Eurostar terminates.
			</p>
			<div class="row">
				<div class="col-sm-6">
					<a target="_blank" title="Find us" class="map-toggle">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-rave.png" class="logo" alt="ravensbourne logo" />
					</a>
				</div>
				<div class="col-sm-6">

					<address>
						<a target="_blank" title="Find us" class="map-toggle">
							6 Penrose Way<br />
							Greenwich Peninsula<br />
							London<br />
							SE10 0EW
						</a>
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
				<li>
					<a href="http://www.arqiva.co.uk" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/sponsor-arqiva.png" alt="arqiva">
					</a>					
				</li>
				<li>
					<a href="http://www.stage-electrics.co.uk" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/sponsor-stageelectrics.png" alt="Stage Electrics">
					</a>					
				</li>
				<li>
					<a href="http://www.moo.com" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/sponsor-moo.png" alt="moo">
					</a>					
				</li>
				<li>
					<a href="https://www.daltonmaag.com" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/sponsor-DaMa.png" alt="DaMa">
					</a>					
				</li>
				<li>
					<a href="http://www.gearhousebroadcast.com" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/sponsor-gearhouse.png" alt="Gearhouse">
					</a>					
				</li>
				<li>
					<a href="http://www.axon.tv" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/sponsor-axon.png" alt="Axon">
					</a>
				</li>
			</ul>
		</div>
	</div>
</section><!-- /sponsors -->
<?php get_footer(); ?>
