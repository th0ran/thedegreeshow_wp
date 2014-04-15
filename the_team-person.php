

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-4' ); ?> role="article">



	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo get_the_post_thumbnail($page->ID, 'full'); ?></a>


	<header class="article-header">

		<h2>
			<?php the_title(); ?>
			<span>
				<?php echo get_post_meta($post->ID, "job-title", true); ?>
			</span>
		</h2>

	</header>

	<section class="entry-content clearfix">
		<?php the_content(); ?>
	</section>

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

</article>
