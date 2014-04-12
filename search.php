<?php get_header(); ?>

<section class="search-results content-pad container-fluid">

	<div class="row">

		<div class="col-md-12">

			<h1 class="archive-title"><?php _e( 'Showing Results for ', 'bonestheme' ); ?> &ldquo;<span><?php echo esc_attr(get_search_query()); ?></span>&rdquo;</h1>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="story">

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

				<?php endwhile; ?>

				<?php if (function_exists('bones_page_navi')) { ?>
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

				No results found. <a class="searchtoggle">Search again?</a>

			<?php endif; ?>
			
		</div>

	</div>

</section><!-- article -->


<?php get_footer(); ?>
