<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/rehabilitate/assets/css/sub.css">
<link rel="stylesheet" href="/rehabilitate/assets/css/introduce.css">  
</head>
<body class="introduce"> <!-- 폴더명 -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/header.php'); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/rehabilitate/inc/sub_quick.php"); ?>
	
	<!-- page-link -->
	<nav class="page-link">
		<div class="container">
			<ul class="nav">
				<li>
					<a href="/rehabilitate/introduce/introduction.php">병원소개</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/doctors.php">의료/치료진</a>
				</li>
				<li class="active">
					<a href="/rehabilitate/introduce/facility.php">시설안내</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/business_number.php">부서별 전화번호</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/location.php">오시는길</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/certificate.php">증명서 발급</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/sum_list.php">비급여 안내</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/partners.php">협력기관</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<!-- Content -->
	<main id="content">
		<div class="container">
			<section class="facility-saerom"><!-- 페이지명 -->
				<div class="section-header">
					<div class="page-title">
						<h2>시설안내</h2>
						<!--p>SRC병원 부설의원의 주요시설안내 입니다.</p-->
					</div>
					<nav class="page-tab">
						<ul>
							<li><a href="/rehabilitate/introduce/facility.php">SRC 부설의원</a></li>
							<li><a href="/rehabilitate/introduce/facility_speech.php">SRC 언어심리상담센터</a></li>
							<li><a href="/rehabilitate/introduce/facility_sports.php">SRC 스포츠센터</a></li>
							<!--<li class="on"><a href="/rehabilitate/introduce/facility_saerom.php">SRC 새롬학교</a></li>-->
						</ul>
					</nav>
				</div>
				<div class="section-content">
					<div class="facility-slider">
						<ul class="facility-img">
							<li>
								<figure>
									<img src="/rehabilitate/assets/images/introduce/img_facility_slider01.jpg" class="img-fluid" alt="">
									<figcaption>
										<h4>SRC 새롬학교1</h4>	
										<p>유치원, 초등학교, 중학교, 순회학급으로 구성된 지체장애특수학교입니다.</p>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="/rehabilitate/assets/images/introduce/img_facility_slider02.jpg" class="img-fluid" alt="">
									<figcaption>
										<h4>SRC 새롬학교2</h4>	
										<p>유치원, 초등학교, 중학교, 순회학급으로 구성된 지체장애특수학교입니다.</p>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="/rehabilitate/assets/images/introduce/img_facility_slider01.jpg" class="img-fluid" alt="">
									<figcaption>
										<h4>SRC 새롬학교3</h4>	
										<p>유치원, 초등학교, 중학교, 순회학급으로 구성된 지체장애특수학교입니다.</p>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="/rehabilitate/assets/images/introduce/img_facility_slider02.jpg" class="img-fluid" alt="">
									<figcaption>
										<h4>SRC 새롬학교4</h4>	
										<p>유치원, 초등학교, 중학교, 순회학급으로 구성된 지체장애특수학교입니다.</p>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="/rehabilitate/assets/images/introduce/img_facility_slider01.jpg" class="img-fluid" alt="">
									<figcaption>
										<h4>SRC 새롬학교5</h4>	
										<p>유치원, 초등학교, 중학교, 순회학급으로 구성된 지체장애특수학교입니다.</p>
									</figcaption>
								</figure>
							</li>
						</ul>
						<nav class="facility-nav-2">
							<ul>
								<li><img src="/rehabilitate/assets/images/introduce/img_facility_nav03.jpg" class="img-fluid" alt=""></li>
								<li><img src="/rehabilitate/assets/images/introduce/img_facility_nav01.jpg" class="img-fluid" alt=""></li>
								<li><img src="/rehabilitate/assets/images/introduce/img_facility_nav02.jpg" class="img-fluid" alt=""></li>
								<li><img src="/rehabilitate/assets/images/introduce/img_facility_nav04.jpg" class="img-fluid" alt=""></li>
								<li><img src="/rehabilitate/assets/images/introduce/img_facility_nav05.jpg" class="img-fluid" alt=""></li>
								<li><img src="/rehabilitate/assets/images/introduce/img_facility_nav05.jpg" class="img-fluid" alt=""></li>
							</ul>
						</nav>
					</div>
				</div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		(function($){
            $('.facility-img').slick({
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