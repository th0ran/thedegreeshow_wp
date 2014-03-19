<?php get_header(); ?>

<section class="booking content container-fluid" role="main">

	<div class="row">

		<div class="col-md-12">
			
			<h1>Book Your Place</h1>

			<p class="intro">
				Lorem ipsum dolor sit amet, in pro ludus aperiam insolens, novum simul et nam. His et odio suas unum. Eam cu ullum concludaturque, at quas ubique doctus eum. Ei choro legimus detraxit per. No novum omittam interesset has, quo ut magna.
			</p>

		</div>

	</div>

	<div class="row">

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

	<div class="row">

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

</section><!--booking-->

<section class="featured content container-fluid">

	<div class="row">

	<?php query_posts('posts_per_page=2&category_name=featured'); ?>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="col-md-6">
			<a class="lg-cta" href="<?php the_permalink() ?>">
				<h1><?php the_title(); ?></h1><br />
				<p>Read about it here &raquo;</p>
			</a>
			
		</div>

	<?php endwhile; ?> <?php wp_reset_query(); ?>

	</div>

</section><!--featured-->

<section class="front-posts content container-fluid">

	<div class="row">

		<div class="col-md-6">
			<h1>Latest Tweets</h1>
			<p>Eam cu ullum concludaturque, at quas ubique doctus eum. Ei choro legimus detraxit per. No novum omittam interesset has, quo ut magna.</p>
		</div>

		<div class="col-md-6">
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

				<footer class="article-footer">

					<p class="byline"><?php
						printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
					?></p>

					<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

				</footer>

				<?php // comments_template(); // uncomment if you want to use them ?>

			</article>

			<?php endwhile; ?>

			<?php else : ?>

				<h1>Post not found</h1>

			<?php endif; ?>

		</div>

	</div>

</section><!--front-posts-->

<?php get_footer(); ?>
