$(document).ready(function () {
	$('.mobile-menu').click(function () {
		$('.site-header ul').slideToggle('fast');
	})


	$(window).scroll(function () {
		if ($(this).scrollTop() >= 300){
			$('.site-header').addClass('fix-it');
		}else{
			$('.site-header').removeClass('fix-it');
		}
	});



});
