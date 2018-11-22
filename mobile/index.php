<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SRC 병원 부설의원 재활</title>
        <link rel="stylesheet" href="/mobile/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/mobile/assets/fontello/css/fontello.css">
        <link rel="stylesheet" href="/mobile/assets/fullpage/fullpage.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="/mobile/assets/css/default.css">
    </head>
    <body>
        <div id="fullpage">
            <!-- page-intro -->
            <section class="section page-intro">
                <h1 class="logo">
                    <a href="/mobile/">
                        <img src="/mobile/assets/images/logo.png" alt="">
                    </a>
                </h1>
                <div class="jumbotron">
                    <ul class="intro-slider">
                        <li class="visual-list" style="background-image: url(/mobile/assets/images/img_intro_slide01.jpg);">
                            <div class="slogan">
                                <h2>
                                    지난 60여년간<br>
                                    <strong>오직 한길만을 걸어온<br><i>SRC병원</i></strong>
                                </h2>
                                <p>
                                    건강한 삶과 일상으로의 복귀를 위해<br>
                                    함께 걸어가겠습니다.<br>
                                    지금부터 SRC만의 특화된 치료체계 및<br>
                                    환자 중심의 감동서비스를 경험하십시오.
                                </p>
                            </div>
                        </li>
                        <li class="visual-list" style="background-image: url(/mobile/assets/images/img_intro_slide02.jpg);">
                            <div class="slogan">
                                <h2>
                                    지난 60여년간<br>
                                    <strong>오직 한길만을 걸어온<br><i>SRC병원</i></strong>
                                </h2>
                                <p>
                                    건강한 삶과 일상으로의 복귀를 위해<br>
                                    함께 걸어가겠습니다.<br>
                                    지금부터 SRC만의 특화된 치료체계 및<br>
                                    환자 중심의 감동서비스를 경험하십시오.
                                </p>
                            </div>
                        </li>
                        <li class="visual-list" style="background-image: url(/mobile/assets/images/img_intro_slide03.jpg);">
                            <div class="slogan">
                                <h2>
                                    지난 60여년간<br>
                                    <strong>오직 한길만을 걸어온<br><i>SRC병원</i></strong>
                                </h2>
                                <p>
                                    건강한 삶과 일상으로의 복귀를 위해<br>
                                    함께 걸어가겠습니다.<br>
                                    지금부터 SRC만의 특화된 치료체계 및<br>
                                    환자 중심의 감동서비스를 경험하십시오.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            
            <!-- pain -->
            <section class="section pain">
                <div class="container">
                    <div class="summary">
                        <small>독일 도수치료, 수술 후 재활치료, 비수술 척추 통증 치료</small>
                        <h3>
                            <img src="/mobile/assets/images/pain_title.png" class="img-fluid" alt="">
                        </h3>
                        <div class="btn-area">
                            <a href="#" class="btn btn-default" role="button">통증 클리닉 바로가기</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- pain -->
            <section class="section rehabilitate">
                <div class="container">
                    <div class="summary">
                        <small>소아재활 낮병동, 청소년 재활치료, 감각통합치료, 언어치료</small>
                        <h3>
                            <img src="/mobile/assets/images/rehabilitate_title.png" class="img-fluid" alt="">
                        </h3>
                        <div class="btn-area">
                            <a href="#" class="btn btn-default" role="button">재활 클리닉 바로가기</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <footer class="section footer">
                <div class="container">
                    <p class="copyright">
                        (C) 2018 SRC병원 부설의원. ALL RIGHT RESERVED. <br>
                        SITE BY <a href="http://movementk.co.kr/" target="_blank">MOVEMENT K GROUP.</a>
                    </p>
                    <div class="dropdown family-site">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            FAMILY SITE
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">site 1</a>
                            <a class="dropdown-item" href="#">site 2</a>
                            <a class="dropdown-item" href="#">site 3</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- scroll-down -->
        <div class="scroll-down">
            <p>SCROLL</p>
            <img src="/mobile/assets/images/icon_scroll.png" alt="SCROLL">
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="/mobile/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            (function($){
                // full page 사용
                $(document).ready(function() {
                    $('#fullpage').fullpage({
                        autoScrolling: true,
                        scrollHorizontally: true
                    });
                });
                
                // intro slider
                $(document).ready(function(){
                    $('.intro-slider').slick({
                        autoplay: true,
                        autoplaySpeed: 8000,
                        arrows: false,
                        dots: false
                    });
                });
                $('.intro-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
                    $('.slick-active.visual-list').removeClass('action');
                    setTimeout(function (){ 
                        $('.slick-active.visual-list').addClass('action'); 
                    });
                });
                $('.intro-slider').on('init', function(event,slick){
                    setTimeout(function (){ 
                        $('.slick-active.visual-list').addClass('action'); 
                    });
                });
                
                // scroll down effect
                $(window).load(function(){
                    setInterval(function(){
                        $('.scroll-down').toggleClass('on');
                    }, 500);
                });
            })(jQuery);
        </script>
    </body>
</html>