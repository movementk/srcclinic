<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/pain/assets/css/sub.css">
<link rel="stylesheet" href="/pain/assets/css/introduce.css">  
</head>
<body class="introduce"> <!-- 폴더명 -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/header.php'); ?>
	
	<!-- page-link -->
	<nav class="page-link">
		<div class="container">
			<ul class="nav">
				<li>
					<a href="/pain/introduce/introduction.php">병원소개</a>
				</li>
				<li>
					<a href="/pain/introduce/doctors.php">의료/치료진</a>
				</li>
				<li class="active">
					<a href="/pain/introduce/facility.php">시설안내</a>
				</li>
				<li>
					<a href="/pain/introduce/business_number.php">부서별 전화번호</a>
				</li>
				<li>
					<a href="/pain/introduce/location.php">오시는길</a>
				</li>
				<li>
					<a href="/pain/introduce/certificate.php">증명서 발급</a>
				</li>
				<li>
					<a href="/pain/introduce/sum_list.php">비급여 안내</a>
				</li>
				<li>
					<a href="/pain/introduce/partners.php">협력기관</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<!-- Content -->
	<main id="content">
		<div class="container">
			<section class="facility">
				<div class="section-header">
					<div class="page-title">
						<h2>시설안내</h2>
					</div>
					<nav class="page-tab">
						<ul>
							<li class="on"><a href="/pain/introduce/facility.php">SRC 부설의원</a></li>
							<li><a href="/pain/introduce/facility_sports.php">SRC 스포츠센터</a></li>
							<li><a href="/pain/introduce/facility_speech.php">SRC 언어심리상담센터</a></li>
						</ul>
					</nav>
				</div>
				<div class="section-content">
					<div class="facility-slider">
						<ul class="facility-img">
							<li>
								<figure>
									<img src="/pain/assets/images/introduce/img_facility_slider01.jpg" class="img-fluid" alt="">
									<figcaption>
										<h4>SRC 부설의원1</h4>	
										<p>SRC부설의원 관련 내용 설명 </p>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="/pain/assets/images/introduce/img_facility_slider02.jpg" class="img-fluid" alt="">
									<figcaption>
										<h4>SRC 부설의원2</h4>	
										<p>SRC부설의원 관련 내용 설명 </p>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="/pain/assets/images/introduce/img_facility_slider01.jpg" class="img-fluid" alt="">
									<figcaption>
										<h4>SRC 부설의원3</h4>	
										<p>SRC부설의원 관련 내용 설명 </p>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="/pain/assets/images/introduce/img_facility_slider02.jpg" class="img-fluid" alt="">
									<figcaption>
										<h4>SRC 부설의원4</h4>	
										<p>SRC부설의원 관련 내용 설명 </p>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="/pain/assets/images/introduce/img_facility_slider01.jpg" class="img-fluid" alt="">
									<figcaption>
										<h4>SRC 부설의원5</h4>	
										<p>SRC부설의원 관련 내용 설명 </p>
									</figcaption>
								</figure>
							</li>
						</ul>
						<nav class="facility-nav-2">
							<ul>
								<li><img src="/pain/assets/images/introduce/img_facility_nav03.jpg" class="img-fluid" alt=""></li>
								<li><img src="/pain/assets/images/introduce/img_facility_nav01.jpg" class="img-fluid" alt=""></li>
								<li><img src="/pain/assets/images/introduce/img_facility_nav02.jpg" class="img-fluid" alt=""></li>
								<li><img src="/pain/assets/images/introduce/img_facility_nav04.jpg" class="img-fluid" alt=""></li>
								<li><img src="/pain/assets/images/introduce/img_facility_nav05.jpg" class="img-fluid" alt=""></li>
							</ul>
						</nav>
					</div>
				</div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/docfoot.php'); ?>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		(function($){
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
		})(jQuery);
	</script>
</body>
</html>