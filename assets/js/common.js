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
            scrollHorizontally: true
            /*navigation: true*/
        });
    });

    // introduce 효과
    $("html, body").on("mousewheel DOMMouseScroll", function(e){
        $(".introduce").addClass("on");
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
		