<?php get_header(); ?>


<section class="article content-pad container-fluid">

	<div class="row">

		<div class="col-md-12">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>">

					<?php the_content(); ?>

					<?php // comments_template(); ?>

				</article>

			<?php endwhile; ?>

			<?php else : ?>

				404 - Post not found

			<?php endif; ?>
			
		</div>

	</div>

</section><!-- article -->


<?php get_footer(); ?>
