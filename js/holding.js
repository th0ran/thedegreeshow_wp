var app = new function() {

	$(document).ready(function(){
		$('.second').hide();
		$('.third').hide();
		$('.second .description').css('opacity', 0)
	});

	this.signUp = function() {
		$('._email').focus();
		$('.first').fadeOut(500);

		setTimeout(function(){
			$('.second').fadeIn(500);

			setTimeout(function(){
				$('._email').focus();
				$('.second .description').animate({ 
					opacity: 1,
				}, 500);
			}, 500);
		}, 500);
	}

	this.completeSignUp = function() {
		$('.second .description').fadeOut(500);

		console.log('Signing user up... ' + $('.title._email').val())

		$.post('/wp-content/plugins/newsletter/do/subscribe.php', {
			ne: $('.title._email').val(),
		}, function(data){
			console.log('the data is...');
			console.log(data);
		});

		setTimeout(function(){
			$('.newsletter').fadeOut(400);
		}, 100);

		setTimeout(function(){
			$('.title ._email').fadeOut(400);
		}, 300);

		setTimeout(function(){
			$('.second').fadeOut(400);
		}, 300);

		setTimeout(function(){
			$('.third').fadeIn(500);
		}, 700)
	}
}