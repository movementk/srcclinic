(function($){
    // gnb open event
    $(document).on('click', '#header .btn-nav', function(){
        $(this).addClass('nav-close');
        $('body').addClass('opened');
    });
    $(document).on('click', '#header .nav-close', function(){
        $(this).removeClass('nav-close');
        $('body').removeClass('opened');
    });

    // gnb menu event
    $(document).on('click', '.gnb-menu > ul > li > a', function() {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
    });
    $(document).on('click', '.gnb-menu > ul > li > ul > li > a', function() {
        if ($(this).parent().hasClass('on')) {
            $(this).parent().removeClass('on');
        } else {
            $(this).parent().siblings('.on').removeClass('on');
            $(this).parent().addClass('on');
        }
    });
})(jQuery);