(function($){
    // Site map Event
    $(document).on('click','#header .btn-nav', function(){
        $('body').addClass('opened');
    });
    $(document).on('click','#site-map .backdrop', function(){
        $('body').removeClass('opened');
    });
	// 퀵탑
	$(document).on('click', '.quick-top .btn-top', function(e) {
		$('html, body').stop().animate({
			scrollTop: 0
		});
		e.preventDefault();
	});
})(jQuery);