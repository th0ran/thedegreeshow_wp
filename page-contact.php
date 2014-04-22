<?php
/*
Template Name: Contact Form Template
*/
?>

<?php get_header(); ?>

<section class="contact container-fluid">

	<div class="row intro">
		<div class="col-md-12">
			<p>The Degree Show 2014 will be hosted at <a href="http://www.ravensbourne.ac.uk/" class="rave" target="_blank">Ravensbourne</span></a>

			<p>Located on the Greenwich Digital Peninsula, London's newest digital community, just 20 minutes away from Tech City, the capital's fast-growing media and technology hub.</p>

			<p>If you want to give us a call you can, for general questions dial 0203 040 3836 or for marketing purposes dail 0203 040 3637.</p>
		</div>
	</div>

</section><!-- article -->

<section class="bg-map contact-form container-fluid">

	<div class="address row">

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

</section>


<?php get_footer(); ?>
