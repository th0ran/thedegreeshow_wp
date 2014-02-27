<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap center-block clearfix">

					<div id="main" class="eightcol first clearfix" role="main">
						
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" class="center-block" itemscope itemtype="http://schema.org/BlogPosting">
							
							<div class="img-responsive post-image">
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('full', array( 'class' => "img-responsive"));
		}
		?>
		
		<header class="article-header">
									
									<h1 class="center-block entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
									<p class="center-block byline vcard"><?php
										printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&amp;</span> filed under %4$s.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', ') );
									?></p>

								</header>

		
	</div>


								
								<section class="center-block entry-content clearfix" itemprop="articleBody">									
									<?php the_content(); ?>
								</section>

								<footer class="center-block article-footer">
									<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

								<?php comments_template(); ?>

							</article>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
