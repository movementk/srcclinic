(function($){
	// slick slider
	$(document).ready(function(){ 
		$('.jumbotron ul').slick({
			dots: true,
			infinite: true,
			speed: 300,
			autoplay: true,
			prevArrow: '<button class="slick-prev" type="button"><i class="icon-left-open-big"></i></button>',
			nextArrow: '<button class="slick-next" type="button"><i class="icon-right-open-big"></i></button>'
		});	
	});

	// benefit scroll bar
	$(window).on('load',function(){
		$('.benefit .benefit-content').mCustomScrollbar({
			horizontalScroll: true
		});
	});

	// header scroll
	$(window).on('scroll', function(){
		if ($(this).scrollTop() > 0) {
			$('body').addClass('scrolled');
		} else {
			$('body').removeClass('scrolled');
		}
	});

	// 퀵탑
	$(document).on('click', '.quick-top .btn-top', function(e) {
		$('html, body').stop().animate({
			scrollTop: 0
		});
		e.preventDefault();
	});

	// text 효과 관련
	$(window).on('scroll', function() {
		$('.benefit').each(function(index, elem) {
			if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.5)) {
				$(elem).addClass('action');  
			}
		});
		 $('.rehabilitate').each(function(index, elem) {
			if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.6)) {
				$(elem).addClass('action');  
			}
		});
		$('.news').each(function(index, elem) {
			if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.6)) {
				$(elem).addClass('action');  
			}
		});
		$('.service').each(function(index, elem) {
			if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
				$(elem).addClass('action');  
			}
		});
	});
})(jQuery);