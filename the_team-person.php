
<?php
	$graduate = get_post_meta($post->ID, "graduate-page", true);	
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-4' ); ?> role="article">


	<a href="<?php if(!$graduate){ the_permalink(); } else { echo $graduate; } ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="profile">
		<?php if (!has_post_thumbnail()): ?>
			<img width="640" height="640" src="http://thedegreeshow.com/wp-content/uploads/2014/04/Selfie_Jon.jpg" class="attachment-full wp-post-image" alt="Selfie_Jon">
		<?php endif;?>
		<?php echo get_the_post_thumbnail($page->ID, 'full'); ?>
		<span class="over">
			<span class="cta lg-cta">View profile</span>
		</span>
	</a>


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
