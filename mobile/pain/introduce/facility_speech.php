<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/mobile/pain/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/pain/assets/css/introduce.css">
</head>
<body class="introduce">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/header.php'); ?>
    
    <!-- Content Start -->
    <main id="content">
        <div class="page-header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/introduce/_lnb_list.php'); ?>
            <div class="page-intro">
                <h3>시설안내</h3>
                <p>SRC병원 부설의원의 주요시설안내 입니다.</p>
            </div>
        </div>
        <article class="facility-speech common-facility">
            <div class="container">
                <div class="article-header">
                    <div class="tab-menu facility-tab">
                        <ul>
                            <li><a href="/mobile/pain/introduce/facility.php">SRC 부설의원</a></li>
                            <li><a href="/mobile/pain/introduce/facility_sports.php">SRC스포츠센터</a></li>
                            <li class="active"><a href="/mobile/pain/introduce/facility_speech.php">SRC 언어심리상담센터</a></li>
                        </ul>
                    </div>
                </div>
                <div class="article-content">
                    <ul class="facility-slide">
                        <li>
                            <figure>
                                <img src="/mobile/pain/assets/images/introduce/img_facility_slide01.jpg" class="img-fluid" alt="">
                            </figure>
                            <div class="details">
                                <h4>SRC 부설의원1</h4>
                                <p>SRC부설의원 관련 내용 설명이 필요하다면<br> 2줄까지 노출됩니다.</p>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/pain/assets/images/introduce/img_facility_slide02.jpg" class="img-fluid" alt="">
                            </figure>
                            <div class="details">
                                <h4>SRC 부설의원2</h4>
                                <p>SRC부설의원 관련 내용 설명이 필요하다면<br> 2줄까지 노출됩니다.</p>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/pain/assets/images/introduce/img_facility_slide01.jpg" class="img-fluid" alt="">
                            </figure>
                            <div class="details">
                                <h4>SRC 부설의원3</h4>
                                <p>SRC부설의원 관련 내용 설명이 필요하다면<br> 2줄까지 노출됩니다.</p>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <img src="/mobile/pain/assets/images/introduce/img_facility_slide02.jpg" class="img-fluid" alt="">
                            </figure>
                            <div class="details">
                                <h4>SRC 부설의원4</h4>
                                <p>SRC부설의원 관련 내용 설명이 필요하다면<br> 2줄까지 노출됩니다.</p>
                            </div>
                        </li>
                    </ul>
                    <nav class="slider-nav-2">
                        <ul class="row">
                            <li class="col-6">
                                <figure>
                                    <img src="/mobile/pain/assets/images/introduce/img_facility_slide01.jpg" class="img-fluid" alt="">
                                </figure>
                            </li>
                            <li class="col-6">
                                <figure>
                                    <img src="/mobile/pain/assets/images/introduce/img_facility_slide02.jpg" class="img-fluid" alt="">
                                </figure>
                            </li>
                            <li class="col-6">
                                <figure>
                                    <img src="/mobile/pain/assets/images/introduce/img_facility_slide01.jpg" class="img-fluid" alt="">
                                </figure>
                            </li>
                            <li class="col-6">
                                <figure>
                                    <img src="/mobile/pain/assets/images/introduce/img_facility_slide02.jpg" class="img-fluid" alt="">
                                </figure>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </article>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/docfoot.php'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        (function($){
            $(document).ready(function(){
                $('.facility-slide').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoPlay: true,
                    autoplaySpeed: 6000,
                    prevArrow: '<button class="slick-prev slick-arrow" type="button"><i class="icon-left-open-big"></i></button>',
                    nextArrow: '<button class="slick-next slick-arrow" type="button"><i class="icon-right-open-big"></i></button>'
                });
            });
        })(jQuery);
    </script>
</body>
</html>