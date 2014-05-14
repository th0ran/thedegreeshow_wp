<?php get_header(); ?>


<?php
	// category, not search results, show category menu
	if(is_category( $category ) ) {
		$args = 'title_li=';
		echo '<div class="cat-nav-container"><ul class="cat-nav">';
		wp_list_categories( $args );
		echo '</ul></div>';
		echo '<span class="cat-nav-toggle arrow">Select a Category <img src="'.  get_template_directory_uri() .'/library/images/arrow-up.png" alt="arrow"></span>';
	};
?>

<section class="search-results content-pad container-fluid">

	<div class="row">

		<div class="col-md-12">

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
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="story col-md-8">

					<a href="<?php the_permalink() ?>">
						<h3><?php the_title(); ?></h3>
					</a>

					<p class="byline vcard">
					<?php
						printf( __( 'Posted by <span class="author">%3$s</span> | %4$s.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), bones_get_the_author_posts_link(), get_the_category_list(', ') );
						?>
					</p>
					<p>
						<?php the_excerpt(); ?>
					</p>

				</div>

				<div class="col-md-4">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'bones-thumb-400' ); ?></a>
				</div>


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

<?php get_footer(); ?>
