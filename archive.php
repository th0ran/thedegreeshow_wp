<?php get_header(); ?>


<?php
	// Grab the categories
	$get_cats = wp_list_categories( 'echo=0&title_li=&depth=1' );
	$cat_array = explode('</li>',$get_cats);
	$results_total = count($cat_array);
	$cats_per_list = 3;
	$list_number = 1;
	$result_number = 0;
?>
<div class="cat-nav-container">

	<ul class="cat-col-<?php echo $list_number; ?>">

		<?php
		foreach($cat_array as $category) {

			$result_number++;

			if($result_number == $results_total){
				break;
			}

			if($result_number % $cats_per_list == 0) {
				$list_number++;
				echo $category.'</li>
			</ul>

			<ul class="cat-col-'.$list_number.'">';

			}

			else {

				echo $category.'</li>';

			}

		} ?>

	</ul>

</div>

<span class="cat-nav-toggle">Select a Category <img src="<?php echo get_template_directory_uri(); ?>/library/images/arrow-sm.png" alt="^" class="arrow"></span>
	

<section class="content-pad container-fluid">

	<div class="row">

		<div class="col-md-12">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			

			<a href="<?php the_permalink() ?>"><span class="cat-thumb" <?php echo $bg_url ?>>
			</span></a>

			<div class="story">

				<a href="<?php the_permalink() ?>">
					<h2><?php the_title(); ?></h2>
				</a>

				<p>
					<?php echo excerpt('80'); ?>
				</p>

			</div>

			<hr>

			<?php endwhile; ?>

			<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
			<div class="story col-md-12">
				<?php bones_page_navi(); ?>
			</div>
			<?php } else { ?>
			<div class="story col-md-12">
				<nav class="wp-prev-next">
					<ul>
						<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
						<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
					</ul>
				</nav>
			</div>
			<?php } ?>

		<?php else : ?>

			404 No posts found

			
		<?php endif; ?>

		</div>

	</div>

</section><!-- article -->



<!-- 
	<?php if (is_category()) { ?>
		<h1 class="archive-title h2">
			<span><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
		</h1>

	<?php } elseif (is_tag()) { ?>
		<h1 class="archive-title h2">
			<span><?php _e( 'Posts Tagged:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
		</h1>

	<?php } elseif (is_author()) {
		global $post;
		$author_id = $post->post_author;
	?>
		<h1 class="archive-title h2">

			<span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

		</h1>
	<?php } elseif (is_day()) { ?>
		<h1 class="archive-title h2">
			<span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
		</h1>

	<?php } elseif (is_month()) { ?>
			<h1 class="archive-title h2">
				<span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
			</h1>

	<?php } elseif (is_year()) { ?>
			<h1 class="archive-title h2">
				<span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
			</h1>
	<?php } ?>

-->

<?php get_footer(); ?>
