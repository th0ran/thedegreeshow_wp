<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/holding.js"></script>
		<meta name="viewport" content="width=device-width" />
		<style type="text/css">
			/*
Theme Name: wp-bootstrap
Theme URI: http://320press.com/wpbs
Description: A simple responsive theme based on the Bootstrap framework. Includes multiple page templates, two different sidebars and a theme options panel.
Version: 3.0
Author: 320press
Author URI: http://320press.com
Tags: black, white, one-column, two-columns, flexible-width, custom-background, custom-colors, custom-menu, full-width-template, theme-options
License: GNU General Public License v2.0 & Apache License 2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html http://www.apache.org/licenses/LICENSE-2.0
*/

/* HEADS UP: Everything that you will normally find here can be found in the library/less/wp.less */

@import url("http://fnt.webink.com/wfs/webink.css/?project=D0D5D8F6-AAEA-4A39-90D3-AF24444E1FCF&fonts=8749A8B6-5CBC-CD3F-0D15-D2854FAF6F76:f=InterFace-Italic,D966CD02-BD7F-6FC2-49D6-AEB64C86FE41:f=InterFace-BoldItalic,F053CF28-AC3D-675F-0F59-439B2A498BD8:f=InterFace-Bold,12A466A5-0B5B-214C-6B4F-5298692C6FE8:f=InterFaceLight-Regular,E3C2DF14-8822-F4F9-5189-8DB2C6F87ABE:f=InterFace-Regular,B987AEAF-D251-6DF0-AE79-D058EBCA2A1B:f=InterFace-LightItalic");

body {
	/*background-image: url('images/gplaypattern.png'); */
	font-family: InterFace-Regular; 
	/*text-shadow: white 1px 1px 0px;*/
}
	
h1 { font-family: InterFace-Bold; font-weight: bold; margin-top: 44px; }
h5 { font-family: InterFace-Regular; font-weight: lighter; margin-top: 11px; margin-bottom: 44px; }

#main article { border: none; }

body, html {
	background: url(images/fashion-1.jpg) 0 0 repeat;
	margin: 0;
	padding: 0;

	background: url(images/fashion-1.jpg) 0 0 repeat;
}

#copy { 
	width: 400px;
	max-width: 95%;
	margin-top: 55px;
	line-height: 1.5;
	font-size: 15px;
}
	
#newsletter { 
	width: 230px;
	max-width: 95%;
	margin-top: 22px;
	line-height: 1.5;
	font-size: 15px;
}

.newsletter-submit { 
	display: inline-block;
	margin-bottom: 0;
	font-weight: 400;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	background-image: none;
	border: 1px solid transparent;
	white-space: nowrap;
	padding: 6px 12px;
	font-size: 14px;
	line-height: 1.42857143;
	border-radius: 4px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none; 
	color: #fff;
	background-color: #99CCCC;
	border-color: #99CCCC;
	margin-top: 11px;
	width: 100px;
}

.newsletter-email {
	font-family: "InterFace-Regular";
	border: none;
	padding: 5px;
	background: #F9F9F9;
}

.newsletter-email:focus {
	outline: none;
}

.feature {
	/*background: url(images/fashion-1.jpg) 0 0 repeat;*/
	background-size: cover;
	height: 690px;
	display: block;
	color: white;
	
}

.feature .content {
	padding-top: 1px;
}

.overlay {
	/*height: 700px;*/
	height: 100%;
	width: 100%;
	background: #000;
	/*background: #cc6699;*/
	/*background: #cc6699;*/
	/*background: #99cccc;*/
	opacity:0.2;
	/*margin-top: -700px;*/
	position: fixed;
	z-index: 7;
}

.feature .content {
	height: 700px;
	z-index: 20;
	position: relative; 
}

.feature .title {
	color: white;
	font-size: 70px;
	text-align: center;
	padding-top: 0px;
}

input.title[type=text] {
	color: white;
	font-size: 90px;
	text-align: left;
	display:block;
	margin:auto;
	border:none;
	background:transparent;
	font-family: 'InterFace-Regular';
}

input.title[type=text]:focus {
	outline: none;
}

.feature .first, .feature .second, .feature .third {
	padding-top: 100px;
}

.feature .description {
	text-align: center;	
	margin-top: 10px;
	font-size: 19px;

}

.feature .logo {
	background: url(images/logo-1.png);
	width: 150px;
	height: 180px;
	image-rendering: crisp-edges;
	float: none;
	
	
	margin:0  auto;
    		margin-top: 60px;

}

button {
	/*background: #5ba4e5;*/
	background: #77aaaa;
	color: white;
	text-transform: uppercase;
	padding: 10px;
	border: none;
	border-radius: 3px;
	letter-spacing: 1px;
	/*border: rgba(0,0,0,0.05) 0.1em solid;*/
	font-family: "InterFace-Regular";

}	

button.news {
	width: 125px;
	margin: auto;
	display: block;
	margin-top: 40px;
}

footer {
	position: fixed;
	width: 100%;
	display: none;
	background: #FFF;
	bottom: -0;
	z-index: 90;
}

@media only screen 
    and (max-device-width : 480px)
    {

    }


@media only screen 
	and (max-device-width : 959px) 
	{
		.feature input[type=text] {
    		font-size: 30px;
    	}
	} 

@media only screen 
	and (max-width:959px)
	{
		.feature .logo {
    		float: none;
    		margin: auto;
    		margin-top: 30px;
    	}

    	.feature .title {
    		padding-top: 0px;
    	}

    	.feature input[type=text] {
    		font-size: 30px;
    	}
	}
		</style>
	</head>
	<body>
		<div class="overlay"></div>
		<div class="feature">
			<div class="content">
				<div class="logo"></div>
				<div class="first">
					<div class="title">
						The Degree Show
					</div>
					<div class="description">
						16th - 20th June 2014
					</div>
					<div class="newsletter">
						<button class="news" onclick="app.signUp()">Sign up for news</button>
					</div>
				</div>
				<div class="second">
					<form action="" method="post" onsubmit="app.completeSignUp(); return false;">
						<input class="title _email" type="text" placeholder="" ></input>
						<div class="description">
							&uarr; Type your email &uarr; 
						</div>
						<div class="newsletter">
							<button class="news" onclick="">Sign up</button>
						</div>
					</form>
				</div>
				<div class="third">
					<div class="title">
						Thank You
					</div>
					<div class="description">
						Watch this space.
					</div>
				</div>
			</div>
			
		</div>
		<footer>
		
		</footer>
	</body>
</html>
