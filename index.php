<?php get_header(); ?>

<header class="header" role="banner">

		<div class="row">
			
			<div class="booking col-sm-3">
				Booking Information
			</div>

			<div class="main col-sm-6">

				<!-- <h1>
					<a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
				</h1> -->

				<?php // bloginfo('description'); ?>

				<!--
<nav role="navigation">
					<?php bones_main_nav(); ?>
				</nav>
-->



			</div>

			<div class="findus col-sm-3">
				Find Us
			</div>

		</div>

	</header>


<div id="main" class="container-post center-block" role="main">

	<div class="row">

		<?php
			// split into rows
			$post_counter = 0;

			if (have_posts()) : while (have_posts()) : the_post();

			if($post_counter%2 == 0){ // after 2 posts start a new row
				echo "</div><div class='row'>";
			};

			// getting thumbnail to display as background:
			$image_id = get_post_thumbnail_id();
			$image_url = wp_get_attachment_image_src($image_id,'full', true);
			
			include '_post.php'; // post style in one file
		?>



		<?php
			$post_counter ++;
			endwhile;
		?>

	</div>

	<div class="row">

		<!-- pagination -->
		<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
		<?php bones_page_navi(); ?>
		<?php } else { ?>
		<nav class="wp-prev-next">
			<ul class="clearfix">
				<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
				<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
			</ul>
		</nav>
		<?php } ?>

		<?php else : ?>

		<!-- Post not found -->

		<article id="post-not-found" class="hentry clearfix">
			<header class="article-header">
				<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			</header>
			<section class="entry-content">
				<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			</section>
			<footer class="article-footer">
				<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
			</footer>
		</article>

		<?php endif; ?>

	</div>

</div>
		<?php //get_sidebar(); ?>

<?php get_footer(); ?>
