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
})(jQuery);