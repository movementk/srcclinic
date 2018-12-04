<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/dochead.php'); ?>
<link rel="stylesheet" href="/pain/assets/css/sub.css">
<link rel="stylesheet" href="/pain/assets/css/ache.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body class="sub ache spine">
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
					<li>
						<a href="/pain/ache/injection_treatment.php">주사치료</a>
					</li>
					<li class="active">
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
					<h3>척추 중재술</h3>
					<p>
					    본원에서는 영상유도 척추 중재술을 시행하여<br>
					    경막외 차단술, 후관절 차단술 등을 시행하고 있습니다.
					</p>
				</div>
			</div>
		</div>
		<section class="spine-intervention">
		    <div class="container">
		        <div class="section-header">
                    <div class="sub-title">
                        <h3>척추 중재술</h3>
                    </div>
					<p>
						추간판(디스크) 탈출증이나 후관절증후군처럼 도수치료 또는 일반적인 주사치료로 치료되지 않는 질병의 경우 척추 중재술을 시행할 수 있습니다.<br>
						본원에서는 영상유도 척추 중재술을 시행하여 경막외 차단술, 후관절 차단술 등을 시행하고 있습니다.
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