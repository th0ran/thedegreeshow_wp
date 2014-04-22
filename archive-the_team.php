<?php get_header(); ?>

<p id="weberror">Something has gone terribly wrong. <a>Please contact the Web Team immediately.</a></p>

<?php 

	$teams = get_terms("custom_cat");

	foreach ( $teams as $team ) {

		echo '<section class="team-' . $team->slug . ' container-fluid">';
		echo '<div class="row">';

		echo '<h1 class="col-md-12 text-center">' . $team->name . '</h1>';

		query_posts('custom_cat=' . $team->slug);

		// split into rows
		$post_counter = 0;

		if (have_posts()) : while (have_posts()) : the_post();

		if($post_counter%3 == 0){ // after 2 posts start a new row
			echo "</div><div class='row'>";
		}

			include 'the_team-person.php';

		$post_counter ++;
		endwhile;

		echo '</div></section>';

		else :
			echo '<p>Post not found</p>';
		endif;

	}

?>

<?php get_footer(); ?>
