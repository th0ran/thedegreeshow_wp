<?php
/*
Template Name: Live Template
*/
?>

<?php get_header(); ?>

<style type="text/css">
	
</style>

<script>jwplayer.key='5XXb+w0txH2+cnkwOtAOWXU39zFQbZ6VT9mOA6R83tk='</script>
<div id='playerDFQjhyvHZjum'></div>
<script type='text/javascript'>
    jwplayer('playerDFQjhyvHZjum').setup({
        file: 'rtmp://195.195.131.195:80/raveLive/webcast.flv',
        image: 'http://live.seanmehmet.com/tds/FashionSlate.png',
        width: '100%',
        aspectratio: '16:9',
       	aboutlink: 'http://www.seanmehmet.com',
        skin: "five",
        ga: {},
        primary: 'flash'
    });
  
    jwplayer().onError(function(event) {
_gaq.push(['_trackEvent', 'Errors', 'Error Encountered']);
});

jwplayer().onFullscreen(function(event) {
_gaq.push(['_trackEvent', 'FullScreen', 'User is Watching Fullscreen']);
});

jwplayer().onSetupError(function(event) {
_gaq.push(['_trackEvent', 'Setup Error', 'User has an error loading player']);
});
</script>

<section class="article content-pad container-fluid">

	<div class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="col-md-12">

			<article id="post-<?php the_ID(); ?>">

				<?php #the_content(); ?>

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
