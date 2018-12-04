(function($){
    // header scroll
    $(window).on('scroll', function(){
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });

    // Site map Event
    $(document).on('click','#header .btn-nav', function(){
        $('body').addClass('opened');
    });
    $(document).on('click','#site-map .backdrop', function(){
        $('body').removeClass('opened');
    });
})(jQuery);