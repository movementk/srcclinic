(function($){
	// scroll event
	$(window).load(function(){
		setInterval(function(){
			$('.icon-scroll').toggleClass('on');
		}, 500);
	});

	// full page 사용
	$(document).ready(function() {
		$('#fullpage').fullpage({
			autoScrolling: true,
			scrollHorizontally: true,
			onLeave: function(origin, destination, direction){
				changeUrl('test',"/index.php?scrollPage="+destination);
				if(destination == 2 && !$(".introduce").hasClass("on")){
					$(".introduce").addClass("on");
				}
			},
			afterLoad: function(anchorLink, index){
			}
			/*navigation: true*/
		});
	});
	/*
	// introduce 효과
	$("html, body").on("mousewheel DOMMouseScroll", function(e){
		$(".introduce").addClass("on");
	});
	*/

	$(document).on("click", ".firstpage", function(){
		$.fn.fullpage.moveTo(2);
	});

	// slick slider
	$(document).ready(function(){ 
		$('.jumbotron ul').slick({
			dots: false,
			infinite: true,
			fade: true,
			autoplaySpeed: 6000,
			autoplay: true,
			cssEase: 'ease'
			/*cssEase: 'linear'*/
		});	
	});
	$('.jumbotron ul').on('init', function(event,slick){
		setTimeout(function(){ 
			$('.slick-slide').addClass('action'); 
		});
	});

})(jQuery);

function changeUrl(title, url){
	if(typeof(history.pushState) != "undefined"){
		var obj = { Title: title, ChangeUrl: url };
		history.pushState(obj, obj.Title, obj.ChangeUrl);
	}
}