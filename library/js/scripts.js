/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

var navManager = new function () {
	this.height = 900;
	var t = this;

	this.calculateHeight = function() {

		// Calculage the height
		t.height = jQuery('.hero').height() + 38;
		// console.log(t.height + 'Who am I? ');
	}

	this.onScroll = function() {
		var currentScroll = window.pageYOffset;

		if (currentScroll < t.height) {
			// apply class
			jQuery('#header-nav').removeClass('docked');
		} else {
			// remove class
			jQuery('#header-nav').addClass('docked');
		}
	}

	
}

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
	window.getComputedStyle = function(el, pseudo) {
		this.el = el;
		this.getPropertyValue = function(prop) {
			var re = /(\-([a-z]){1})/g;
			if (prop == 'float') prop = 'styleFloat';
			if (re.test(prop)) {
				prop = prop.replace(re, function () {
					return arguments[2].toUpperCase();
				});
			}
			return el.currentStyle[prop] ? el.currentStyle[prop] : null;
		}
		return this;
	}
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

	navManager.calculateHeight();

	// window.onscroll = navManager.onScroll;
	// 
	// function(){
	// 	if (window.pageYOffset > 526) {
	// 		jQuery('#header-nav').addClass('docked');
	// 	} else {
	// 		jQuery('#header-nav').removeClass('docked');
	// 	}
		
	// }

	/*
	Responsive jQuery is a tricky thing.
	There's a bunch of different ways to handle
	it, so be sure to research and find the one
	that works for you best.
	*/
	
	/* getting viewport width */
	var responsive_viewport = $(window).width();
	
	/* if is below 481px */
	if (responsive_viewport < 481) {
	
	} /* end smallest screen */
	
	/* if is larger than 481px */
	if (responsive_viewport > 481) {
	
	} /* end larger than 481px */
	
	/* if is above or equal to 768px */
	if (responsive_viewport >= 768) {
	
		/* load gravatars */
		$('.comment img[data-gravatar]').each(function(){
			$(this).attr('src',$(this).attr('data-gravatar'));
		});
		
	}
	
	/* off the bat large screen actions */
	if (responsive_viewport > 1030) {
	
	}
	
	
	// add all your scripts here

	/*
		NAVIGATION TOGGLE
	*/
	$('.navtoggle').click(function(){
		var wrapper = $('#wrapper');
		var view = wrapper.position();

		if (view.left === 0) {

			// navbar is closed, open it
			wrapper.animate(
				{ left:'-' + $('#side').width() + 'px' },
				{ duration: 200, queue: false }
			);
			// sticky nav was glitching in chrome, so move it all by itself.
			$('#header-nav').animate(
				{ left:'-' + $('#side').width() + 'px' },
				{ duration: 200, queue: false }
			);

		} else {

			// navbar is open, close it
			wrapper.animate(
				{ left: '0px' },
				{ duration: 200, queue: false }
			);
			// sticky nav was glitching in chrome, so move it all by itself.
			$('#header-nav').animate(
				{ left: '0px' },
				{ duration: 200, queue: false }
			);

		}
		
	})


	/*
		SEARCH TOGGLE
	*/
	$('.searchtoggle').click(function(){
		// $('#search').fadeToggle(500);
		$('#search').slideToggle(500);
	});

	$('.cat-nav-toggle').click(function(){
		// $('#search').fadeToggle(500);
		$('.cat-nav-container').slideToggle(500);
		$(this).toggleClass('rotate');
	});

	/*
		SCROLL TO TOP
	*/
	$count = 0;
	jQuery('.backtotop').click(function(){
		scrollTo('#wrapper');
		$count++;
		if ($count%2 == 0){
			$("#whee")[0].play();
		};
	});

	jQuery('#rave').click(function(){
		scrollTo('#location');
	});


	jQuery('.team-web-team h1').click(function(){
		var myface = 'http://thedegreeshow.com/wp-content/uploads/2014/04/degreeshowselfie.png';
		var alexface = 'http://thedegreeshow.com/wp-content/uploads/2014/04/Selfie_Alex.jpg';

		scrollTo('.content');
		jQuery('#wrapper').each(function(i) {
			$(this).css({ "position": "relative" });
			for (var x = 1; x <= 3; x++) {
				$(this).animate({ left: -25 }, 10).animate({ left: 0 }, 50).animate({ left: 25 }, 10).animate({ left: 0 }, 50);
			}
		});
		jQuery('footer').css('width', '50px');
		jQuery('.row').css('margin-top', '-400px');
		jQuery('#header-nav').css('width', '200px');
		jQuery('.the_team').each(function(){this.style.webkitTransform = 'skew(5deg)';	});
		jQuery('.the_team:nth-of-type(2)').each(function() { this.style.webkitTransform = 'skew(-10deg)'; });
		jQuery('.the_team:nth-of-type(2) .wp-post-image').attr('src', myface);
		jQuery('.the_team:nth-of-type(3) .wp-post-image').attr('src', alexface);

		jQuery('#weberror').delay(200).slideDown();
	});

	jQuery('#weberror').click(function(){
		location.reload(true);
	});

	/*
		DOCKING NAV
	*/
	// docknav();
	// $( window ).scroll(function() {
	// 	docknav();
	// });

	/*
		HOMEPAGE MAP
	*/
	// http://snazzymaps.com/
	// When the window has finished loading create our google map below
	google.maps.event.addDomListener(window, 'load', init);

	jQuery('.map-toggle').click(function(){
		var info = jQuery('.address');
		var infotop = info.css('top');
		var infomargin = '180px';

		var docked = jQuery('.location').height() - jQuery('.map-toggle.arrow').height() - 180;

		console.log(docked);

		if(infotop <= infomargin){
			jQuery(this).addClass('up');
			jQuery(info).animate({
				top: docked,
			});
		} else {
			jQuery(this).removeClass('up');
			jQuery(info).animate({
				top: '0px',
			});
		}

		// jq.animate(jQuery('.address').css('top', '80%'));
	});
}); /* end of as page load scripts */

// HOMEPAGE MAP
function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        
	    scrollwheel: false,
        zoom: 16,

		disableDefaultUI: true,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(51.501673,0.00575),

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{stylers:[{hue:'#99cccc'},{saturation:-30}]},{featureType:'all',elementType:'geometry',stylers:[{lightness:50},{visibility:'simplified'}]},{featureType:'road',elementType:'labels',stylers:[{visibility:'off'}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);
}

// DOCKING NAV FUNCTION
function docknav(){
	if( isScrolledIntoView(jQuery('header.hero')) === true ){
		// console.log('true');
		jQuery('#header-nav').removeClass('docked');
	} else {
		// console.log('false');
		jQuery('#header-nav').addClass('docked');

	}
};

/* modified from : http://stackoverflow.com/questions/487073/check-if-element-is-visible-after-scrolling */
function isScrolledIntoView(elem)
{
    var docViewTop = jQuery(window).scrollTop();
    var docViewBottom = docViewTop + jQuery(window).height();

    var elemTop = jQuery(elem).offset().top;
    var elemBottom = elemTop + jQuery(elem).height();

    return ((elemBottom <= docViewBottom) && (jQuery(elem).height() >= docViewTop));
}

// Smooth scrollin
function scrollTo(anchor){
	jQuery('html, body').animate({ scrollTop: jQuery(anchor).offset().top }, 200);
	return false;
}

/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
	var doc = w.document;
	if( !doc.querySelector ){ return; }
	var meta = doc.querySelector( "meta[name=viewport]" ),
		initialContent = meta && meta.getAttribute( "content" ),
		disabledZoom = initialContent + ",maximum-scale=1",
		enabledZoom = initialContent + ",maximum-scale=10",
		enabled = true,
		x, y, z, aig;
	if( !meta ){ return; }
	function restoreZoom(){
		meta.setAttribute( "content", enabledZoom );
		enabled = true; }
	function disableZoom(){
		meta.setAttribute( "content", disabledZoom );
		enabled = false; }
	function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
		if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );