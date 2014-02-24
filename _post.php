<!-- template for 4x4 posts with thumbnail images (home and archive pages) -->
<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-6' ); ?> role="article">

	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><span class="article-image" <?php if(has_post_thumbnail()) : ?>style="background-image:url(<?php echo $image_url[0];?>);"<?php endif;?>></span></a>

	<header class="article-header">

		<h2>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h2>

		<p class="byline vcard">
		<?php
			printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
			?>
		</p>

	</header>

	<section class="entry-content">
		<?php the_excerpt(); ?>
	</section>

	<footer class="article-footer">
		<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>
	</footer>

	<?php // comments_template(); // uncomment if you want to use them ?>

</article>