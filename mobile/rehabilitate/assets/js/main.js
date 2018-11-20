(function($){
    // main visual slider
    $(document).ready(function(){
        $('.jumbotron > ul').slick({
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 6000,
        });
    });

    // benefit-list
    $(window).on('load', function(){
        $('.benefit-list').mCustomScrollbar({
            horizontalScroll: true
        });
    });
})(jQuery);