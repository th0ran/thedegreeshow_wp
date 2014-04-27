<?php
/*
Template Name: Events Page
*/
?>

<?php get_header(); ?>

<section class="article content-pad container-fluid">

	<div class="row">


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="col-md-12">

			<article id="post-<?php the_ID(); ?>">

				<?php the_content(); ?>

				<?php // comments_template(); ?>

			</article>

			<footer class="article-footer">
				<ul class="social-buttons-sm">

				<?php 
					$instagram = get_post_meta($post->ID, "instagram", true);
					$twitter = get_post_meta($post->ID, "twitter", true);
					$linkedin = get_post_meta($post->ID, "linkedin", true);
				?>

				<?php if ($twitter != ""){ ?>

					<li><a href="<?php echo $twitter; ?>" class="ico-tw" target="blank" title="<?php the_title(); ?>'s Twitter">Twitter</a></li>

				<?php }; if ($instagram != ""){ ?>

					<li><a href="<?php echo $instagram; ?>" class="ico-in" target="blank" title="<?php the_title(); ?>'s Instagram">instagram</a></li>

				<?php }; if ($linkedin != ""){ ?>

					<li><a href="<?php echo $linkedin; ?>" class="ico-li" target="blank" title="<?php the_title(); ?>'s LinkedIn">linkedin</a></li>

				<?php }; ?>

				</ul>
			</footer>

		</div>

		<?php endwhile; ?>

		<?php else : ?>

		<div class="col-md-12">
			404 - Post not found
		</div>

		<?php endif; ?>
			

	</div>

</section><!-- article -->

<?php get_footer(); ?>
