<div id="side" role="complementary">

	<div class="inner">
		
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/ico-cross.png" alt="close navigation" class="ico-close navtoggle">

		<nav role="navigation">
			<?php bones_main_nav(); ?>
		</nav>

		<ul class="social-buttons">
			<li><a href="https://www.facebook.com/thedegreeshow" class="ico-fb" target="blank" title="Facebook">Facebook</a></li>
			<li><a href="https://twitter.com/thedegreeshow" class="ico-tw" target="blank" title="Twitter">Twitter</a></li>
			<li><a href="http://instagram.com/thedegreeshow" class="ico-in" target="blank" title="Instagram">Instagram</a></li>
			<li><a href="https://www.youtube.com/user/thedegreeshow14" class="ico-yt" target="blank" title="YouTube">YouTube</a></li>
		</ul>

		<!-- If you want sidebar widgets to be visible, uncomment the below: -->
		<?php 
			// if ( is_active_sidebar( 'sidebar1' ) ) :
			// 	dynamic_sidebar( 'sidebar1' );
			// else : 
			// 	// no widgets
			// endif; 
		?>

	</div>
</div>