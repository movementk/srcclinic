<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/dochead.php'); ?>
<link rel="stylesheet" href="/pain/assets/css/sub.css">
<link rel="stylesheet" href="/pain/assets/css/ache.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body class="sub ache injection">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/header.php'); ?>
	<!-- Main Content -->
	<main id="content">
    	<!-- 페이지 링크 -->
		<nav class="page-link">
			<div class="container">
				<ul class="nav">
					<li>
						<a href="/pain/ache/germany_medicine.php">독일도수의학</a>
					</li>
					<li>
						<a href="/pain/ache/chronic_pain.php">특수클리닉</a>
					</li>
					<li>
						<a href="/pain/ache/operation_rehabilitation.php">수술 후 재활</a>
					</li>
					<li class="active">
						<a href="/pain/ache/injection_treatment.php">주사치료</a>
					</li>
					<li>
						<a href="/pain/ache/spine_intervention.php">척추중재술</a>
					</li>
					<li>
						<a href="/pain/ache/shock_wave.php">체외충격파치료</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="page-intro">
			<div class="summary">
				<div class="container">
					<h3>주사치료</h3>
					<p>
					    기본적인 통증 유발점 주사나 연골주사부터 조직의 재생을 촉진시키는<br>
					    증식치료나 PDRN 주사(DNA 주사)까지 다양한 주사치료를 시행합니다.
					</p>
				</div>
			</div>
		</div>
		<section class="injection-treatment">
		    <div class="container">
		        <div class="section-header">
                    <div class="sub-title">
                        <h3>주사치료</h3>
                    </div>
					<p>
						기본적인 통증 유발점 주사나 연골주사부터 조직의 재생을 촉진시키는 증식치료나 PDRN 주사(DNA 주사)까지 다양한 주사치료를 시행합니다.<br><br>
						증식치료는 인대와 힘줄등 약해진 뼈 조직의 약화로 퇴행성 관절질환, 오십견, 디스크 등의 병이 나타나는데 증식치료로 새로운 세포 조직의 생성을 자극해 <br>불완전한 조직을 재생시키는 치료입니다.<br><br>PDRN 주사요법은 DNA 조각을 손상부위에 주사하여 손상된 조직의 세포 성장을 촉진시켜 통증을 감소시켜주기 때문에 손상된 인대, 근육, 힘줄, 연골 치료에 효과적인 치료입니다.
					</p>
		        </div>
		        <div class="section-content">
		            <article class="slider">
                        <ul class="slider-main">
                            <li style="background-image: url(/rehabilitate/assets/images/sub/img_slider_list01.jpg);"></li>
                            <li style="background-image: url(/rehabilitate/assets/images/sub/img_slider_list01.jpg);"></li>
                            <li style="background-image: url(/rehabilitate/assets/images/sub/img_slider_list01.jpg);"></li>
                            <li style="background-image: url(/rehabilitate/assets/images/sub/img_slider_list01.jpg);"></li>
                            <li style="background-image: url(/rehabilitate/assets/images/sub/img_slider_list01.jpg);"></li>
                            <li style="background-image: url(/rehabilitate/assets/images/sub/img_slider_list01.jpg);"></li>
                            <li style="background-image: url(/rehabilitate/assets/images/sub/img_slider_list01.jpg);"></li>
                            <li style="background-image: url(/rehabilitate/assets/images/sub/img_slider_list01.jpg);"></li>
                        </ul>
                        <nav class="slider-nav-2">
                            <ul>
                                <li><img src="/rehabilitate/assets/images/sub/img_slider_nav_01.jpg" class="img-fluid" alt=""></li>
                                <li><img src="/rehabilitate/assets/images/sub/img_slider_nav_02.jpg" class="img-fluid" alt=""></li>
                                <li><img src="/rehabilitate/assets/images/sub/img_slider_nav_03.jpg" class="img-fluid" alt=""></li>
                                <li><img src="/rehabilitate/assets/images/sub/img_slider_nav_04.jpg" class="img-fluid" alt=""></li>
                                <li><img src="/rehabilitate/assets/images/sub/img_slider_nav_05.jpg" class="img-fluid" alt=""></li>
                                <li><img src="/rehabilitate/assets/images/sub/img_slider_nav_06.jpg" class="img-fluid" alt=""></li>
                                <li><img src="/rehabilitate/assets/images/sub/img_slider_nav_07.jpg" class="img-fluid" alt=""></li>
                                <li><img src="/rehabilitate/assets/images/sub/img_slider_nav_08.jpg" class="img-fluid" alt=""></li>
                            </ul>
                        </nav>
                    </article>
		        </div>
		    </div>
		</section>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/docfoot.php'); ?>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		(function($){
            $('.slider-main').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: true,
                prevArrow: '<button class="slick-prev"><i class="icon-left-open"></i></button>',
                nextArrow: '<button class="slick-next"><i class="icon-right-open"></i></button>'
            });
		})(jQuery);
	</script>
</body>
</html>