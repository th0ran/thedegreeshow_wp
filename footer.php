
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
			<p>&copy; <?php echo date('Y'); ?> | <?php bloginfo( 'name' ); ?><br><a href="http://thedegreeshow.com/privacy-cookie-policy/" title="Cookie Policy">Privacy/Cookie Policy</a></p>
		</div>
		<div class="col-md-6 text-right light">
			<p>Site by the <a href="http://thedegreeshow.com/the_team">Web Team</a></p>
			<ul class="footer-social-buttons">
				<li><a href="https://www.facebook.com/thedegreeshow" class="ico-fb" target="blank" title="Facebook"></a></li>
				<li><a href="https://twitter.com/thedegreeshow" class="ico-tw" target="blank" title="Twitter"></a></li>
				<li><a href="http://instagram.com/thedegreeshow" class="ico-in" target="blank" title="Instagram"></a></li>
				<li><a href="https://www.youtube.com/user/thedegreeshow14" class="ico-yt" target="blank" title="YouTube"></a></li>
			</ul>
		</div>

	</div>

</footer>

</div> <!-- /content -->

</div> <!-- /wrapper -->



<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50043459-2', 'thedegreeshow.com');
  ga('send', 'pageview');

</script>

</body>

</html>
