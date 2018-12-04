<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/dochead.php'); ?>
<link rel="stylesheet" href="/pain/assets/css/sub.css">
<link rel="stylesheet" href="/pain/assets/css/ache.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body class="sub ache operation">
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
					<li class="active">
						<a href="/pain/ache/operation_rehabilitation.php">수술 후 재활</a>
					</li>
					<li>
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
					<h3>수술 후 재활</h3>
					<p>
					    SRC병원 부설의원에서는 수술 후 빠른 회복과 일상생활 복귀를 위해<br>
					    환자의 부상과 체력수준 등 개인적 특성을 고려하여 재활치료를 진행합니다.
					</p>
				</div>
			</div>
		</div>
		<section class="operation-rehabilitation">
		    <div class="container">
		        <div class="section-header">
                    <div class="sub-title">
                        <h3>수술 후 재활</h3>
                    </div>
					<p>
						수술 이후에 근력은 쉽게 약해지고 관절의 가동범위도 줄어들어 회복에 오랜 시간이 소요되는 경우가 많습니다. <br>
						수술 후 재활치료를 시행하면 수술 부위의 치유가 촉진되며 상처조직이 최소화되고 관절과 근육의 기능이 회복이 보다 빠르게 진행됩니다.<br><br>
						SRC병원 부설의원에서는 수술 후 빠른 회복과 일상생활 복귀를 위해 환자의 부상과 체력수준 등 개인적 특성을 고려하여 재활치료를 진행합니다.
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