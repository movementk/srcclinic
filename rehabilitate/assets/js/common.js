(function($){
	// 퀵탑
	$(document).on('click', '.quick-top .btn-top', function(e) {
		$('html, body').stop().animate({
			scrollTop: 0
		});
		e.preventDefault();
	});
})(jQuery);