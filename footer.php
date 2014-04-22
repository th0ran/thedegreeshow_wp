
<a class="backtotop">
	<img src="<?php echo get_template_directory_uri(); ?>/library/images/arrow-up.png" alt="Back to top">
</a>

<audio id="whee">
	<source src="<?php echo get_template_directory_uri(); ?>/library/fonts/whee.mp3"></source>
	<source src="<?php echo get_template_directory_uri(); ?>/library/fonts/whee.ogg"></source>
</audio>

<footer class="container-fluid footer" role="contentinfo">

	<div class="row">

		<div class="col-md-6 light">
			<p>&copy; <?php echo date('Y'); ?> | <?php bloginfo( 'name' ); ?><br><a href="http://thedegreeshow.com/privacy-cookie-policy/" title="Cookie Policy">Cookie Policy</a></p>
		</div>
		<div class="col-md-6 text-right light">
			<p>Site by the <a href="http://thedegreeshow.com/the_team">Web Team</a></p>
		</div>

	</div>

</footer>

</div> <!-- /content -->

</div> <!-- /wrapper -->

<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>

</body>

</html>
