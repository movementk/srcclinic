<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>SRC 병원 부설의원 재활</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="/mobile/rehabilitate/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/mobile/rehabilitate/assets/fontello/css/fontello.css">
        <link rel="stylesheet" href="/mobile/rehabilitate/assets/css/default.css">
    </head>
    <body>
        <!-- Header -->
        <header id="header">
            <div class="quick-link">
                <a href="#">SRC병원 부설의원 통증치료 바로가기</a>
            </div>
            <div class="head-wrap">
                <div class="container">
                    <h1 class="logo">
                        <a href="/mobile/rehabilitate/">
                            <img src="/mobile/rehabilitate/assets/images/logo.png" alt="logo">
                        </a>
                    </h1>
                    <button type="button" class="btn btn-nav">
                        <i class="sr-only">메뉴 버튼</i>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                </div>
            </div>
        </header>
        
        <!-- Content -->
        <main id="content">
            <div class="container">
                
            </div>
        </main>
        
        <!-- Footer -->
        <footer id="footer">
            <div class="contact">
                <div class="container">
                    <h2>SRC병원 부설의원</h2>
                    <a href="tel:028713636"><strong>02-871-3636</strong></a>
                    <address>서울특별시 관악구 보라매로  44(봉천동722-19) SRC병원 부설의원</address>
                    <ul>
                        <li>
                            <dl>
                                <dt>팩스번호</dt>
                                <dd>02-876-3202</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>센터장</dt>
                                <dd>민병일</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>사업자등록번호</dt>
                                <dd>233-82-00339</dd>
                            </dl>
                        </li>
                    </ul>
                    <h2>진료시간</h2>
                </div>
            </div>
            <div class="foot-info">
                <div class="container">
                    <p class="copyright">
                        (C) 2018 SRC병원 부설의원. ALL RIGHT RESERVED. <br>
                        <a href="http://movementk.co.kr/" target="_blank">SITE BY MOVEMENT K GROUP</a>.
                    </p>
                    <div class="dropdown family-site">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        FAMILY SITE
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">SITE #1</a>
                        <a class="dropdown-item" href="#">SITE #2</a>
                        <a class="dropdown-item" href="#">SITE #3</a>
                    </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="/mobile/rehabilitate/assets/bootstrap/js/bootstrap.min.js"></script>
        <script>
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
            })(jQuery);
        </script>
    </body>
</html>