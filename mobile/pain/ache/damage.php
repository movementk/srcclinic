<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/mobile/pain/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/pain/assets/css/ache.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/header.php'); ?>
    
    <!-- Content Start -->
    <main id="content" class="ache special-clinic">
        <!-- include 별도 -->
        <div class="page-header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/ache/_lnb_list.php'); ?>
            <div class="page-intro">
                <h3>특수클리닉</h3>
                <p>
                    독일근골격의학회(die Deutsche Gesellschaft für <br>Muskuloskeletale Medizin; DGMSM)는 <br>60년 이상의 전통을 자랑하는 학회로 도수의학의 발원지인 <br>독일에서 가장 권위있는 도수의학회입니다.
                </p>
            </div>
        </div>
        <article class="damage">
            <div class="container">
                <div class="article-header">
                    <div class="tab-menu">
                        <ul>
                            <li><a href="/mobile/pain/ache/chronic_pain.php">만성통증</a></li>
                            <li class="active"><a href="/mobile/pain/ache/damage.php">스포츠손상</a></li>
                            <li><a href="/mobile/pain/ache/childbirth_rehabilitation.php">출산 후 골반관리</a></li>
                            <li><a href="/mobile/pain/ache/breast_cancer.php">유방암 치료 후 재활</a></li>
                        </ul>
                    </div>
                </div>
                <div class="article-content">
                    <div class="details">
                        <figure>
                            <img src="/mobile/pain/assets/images/ache/img_damage.png" class="img-fluid" alt="">
                            <figcaption>
                                <small>대한스포츠의학회 인증 전문의의</small>
                                <h4><i>정확한 진단</i> 을 통한 재활치료 및 <i>재손상 예방</i> 시행</h4>
                                <hr>
                                <p>
                                    이영상 과장님은 대한스포츠의학회 스포츠의학 인증 전문의이며 다양한 엘리트 스포츠 선수들의 의무지원 경력을 갖고 있습니다.<br>
                                    이를 바탕으로 SRC 병원 부설의원은 운동선수와 동호인을 위한 정확한 진단을 통한 스포츠 손상의 급성치료에서부터 재활치료, 그리고 재손상 예방까지 시행하고 있습니다.
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="content-slide">
                        <ul class="facility-slide">
                            <li>
                                <figure>
                                    <img src="/mobile/pain/assets/images/introduce/img_facility_slide01.jpg" class="img-fluid" alt="">
                                </figure>
                                <!--<div class="details">
                                    <h4>SRC 부설의원1</h4>
                                    <p>SRC부설의원 관련 내용 설명이 필요하다면<br> 2줄까지 노출됩니다.</p>
                                </div>-->
                            </li>
                            <li>
                                <figure>
                                    <img src="/mobile/pain/assets/images/introduce/img_facility_slide02.jpg" class="img-fluid" alt="">
                                </figure>
                                <!--<div class="details">
                                    <h4>SRC 부설의원1</h4>
                                    <p>SRC부설의원 관련 내용 설명이 필요하다면<br> 2줄까지 노출됩니다.</p>
                                </div>-->
                            </li>
                            <li>
                                <figure>
                                    <img src="/mobile/pain/assets/images/introduce/img_facility_slide01.jpg" class="img-fluid" alt="">
                                </figure>
                                <!--<div class="details">
                                    <h4>SRC 부설의원1</h4>
                                    <p>SRC부설의원 관련 내용 설명이 필요하다면<br> 2줄까지 노출됩니다.</p>
                                </div>-->
                            </li>
                            <li>
                                <figure>
                                    <img src="/mobile/pain/assets/images/introduce/img_facility_slide02.jpg" class="img-fluid" alt="">
                                </figure>
                                <!--<div class="details">
                                    <h4>SRC 부설의원1</h4>
                                    <p>SRC부설의원 관련 내용 설명이 필요하다면<br> 2줄까지 노출됩니다.</p>
                                </div>-->
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