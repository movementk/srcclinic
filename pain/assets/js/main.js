(function($){
    // slick slider
    $(document).ready(function(){ 
		$('.jumbotron ul').slick({
			dots: true,
			autoplaySpeed: 3000,
			autoplay: true,
            arrows: false
			/*prevArrow: '<button class="slick-prev" type="button"><i class="icon-left-open-big"></i></button>',
			nextArrow: '<button class="slick-next" type="button"><i class="icon-right-open-big"></i></button>'*/
		});	
	});

    // 동일도수치료 장점4가지
    $(document).ready(function(){
        $('.advantage-slider').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.slider-nav',
            arrows: false
        });
        $('.slider-nav').slick({
            asNavFor: '.advantage-slider',
            arrows: false,
            slidesToShow: 4,
            focusOnSelect: true
        });
    });

    // text 효과 관련
    $(window).on('scroll', function() {
        $('.news, .service, .program').each(function(index, elem) {
            if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.5)) {
                $(elem).addClass('action');  
            }
        });
    });
})(jQuery);