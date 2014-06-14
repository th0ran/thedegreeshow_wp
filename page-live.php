<?php
/*
Template Name: Live Template
*/
?>

<?php get_header(); ?>

<style type="text/css">
	.video-wrap {
		width: 950px;
		margin: 0 auto;
		margin-top: 40px;
		/*height: 400px;*/
		margin-bottom: 100px;
		padding-top: 30px;
	}

	@media all and (max-width: 950px) {
		.video-wrap {
			width: 100%;
		}

		html body .thirds, html body .social {
			width: 90% !important;
			padding: 0 5% 0 5%;
		}

		html body .live-intro {
			width: 90% !important;
			padding: 0 5% 0 5%;
			margin: 0 auto;
		}
	}

	.video-wrap > div object {
		border: 1px solid #DDD; 
	}

	html body h3, html body h2 {
		text-align: center;
		font-family: "interfacelight";
	}

	html body h2 {
		margin-top: 30px;
	}

	html body h3 {
		margin-top: -0px;
		margin-bottom: 10px;
	}

	html body .header-intro {
		margin-top: 70px;
	}



	html body .hero {
		padding-bottom: 120px;
	}

	html body .thirds {
		width: 950px;
		margin: auto;
		text-align: center;
		font-family: "interfacelight";
	}

	.thirds .one, .thirds .two, .thirds .three {
		width: 50%;
		float: left;
		height: 100px;

		text-align: center;
	}

	.clear {
		clear: both;
	}

	html body div.spacer {
		display: inline;
		width: 1px;
		height: 10px;
		background: #66cccc;
	}

	#header-nav .logo img {
		height: 70px;
	}

	html body .social {
		width: 950px;
		margin: 0 auto;

	}

	html body .social ul {
		padding: 0;
		list-style: none;
		margin-bottom: 30px;
	}

	html body .social ul li {
		display: inline-block;
	}

	html body .social ul li a {
		padding: 8px 13px 8px 13px;
		background: #cc6699;
		color: white;
		font-family: "interfacelight";
		display: block;
		width: 280px;
		margin: auto;
		display: none;
	}
	
</style>




<div class="live-intro">
	<h2>Ravensbourne Graduate Fashion Show</h2>
	<h3>2014</h3>
</div>
<div class="thirds">
	<p>
		This is a showcase of the year's best graduate collections; an insight into the work of tomorrow's designers. 
	</p>
	<div class="clear"></div>
</div>



<div class="video-wrap">
	<div id='playerDFQjhyvHZjum' class="video"></div>
</div>

<div class="social">
	<ul>
		<li>
			<a href="http://2014.thedegreeshow.com/course/10">View 2014 Fashion Design Graduates</a>
		</li>
	</ul>
</div>



<script>jwplayer.key='5XXb+w0txH2+cnkwOtAOWXU39zFQbZ6VT9mOA6R83tk='</script>

<script type='text/javascript'>
    jwplayer('playerDFQjhyvHZjum').setup({
 		sources: [{ 
            file: "rtmp://195.195.131.195/raveLive/FashionHD.flv"
        },{
            file: "http://195.195.131.222/rave/FashionHD/player.m3u8"
        }],
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

<?php get_footer(); ?>
