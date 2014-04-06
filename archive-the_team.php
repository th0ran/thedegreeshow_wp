<?php get_header(); ?>


<?php 

	$teams = get_terms("custom_cat");

	foreach ( $teams as $team ) {

		echo '<section class="team-' . $team->slug . ' container-fluid">';
		echo '<div class="row">';

		echo '<h1 class="col-md-12 text-center">' . $team->name . '</h1>';

		query_posts('posts_per_page=2&custom_cat=' . $team->slug);

		if (have_posts()) : while (have_posts()) : the_post();

			include 'the_team-person.php';

		endwhile;

		echo '</div></section>';

		else :
			echo '<p>Post not found</p>';
		endif;

	}

?>

<?php get_footer(); ?>
