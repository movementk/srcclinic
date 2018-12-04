<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/dochead.php'); ?>
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
				<li>
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
				<li class="active">
					<a href="/pain/introduce/partners.php">협력기관</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<!-- Content -->
	<main id="content">
		<div class="container">
			<section class="partners"><!-- 페이지명 -->
				<div class="section-header">
					<div class="page-title">
						<h2>협력기관</h2>
						<!--p>SRC병원 부설의원의 주요협력기관 입니다.</p-->
					</div>
				</div>
				<div class="section-content">
					<ul class="row">
						<li class="col-3">
							<div class="details">
								<div class="partner-logo">
									<figure>
										<img src="/pain/assets/images/introduce/img_partner_logo01.jpg" alt="">
									</figure>
								</div>
								<h3>보라매공원</h3>
							</div>
						</li>
						<li class="col-3">
							<div class="details">
								<div class="partner-logo">
									<figure>
										<img src="/pain/assets/images/introduce/img_partner_logo02.jpg" alt="">
									</figure>
								</div>
								<h3>중앙대학교병원</h3>
							</div>
						</li>
						<li class="col-3">
							<div class="details">
								<div class="partner-logo">
									<figure>
										<img src="/pain/assets/images/introduce/img_partner_logo03.jpg" alt="">
									</figure>
								</div>
								<h3>카톨릭대학교 서울성모병원</h3>
							</div>
						</li>
						<li class="col-3">
							<div class="details">
								<div class="partner-logo">
									<figure>
										<img src="/pain/assets/images/introduce/img_partner_logo04.jpg" alt="">
									</figure>
								</div>
								<h3>연세 세브란스 병원</h3>
							</div>
						</li>
						<li class="col-3">
							<div class="details">
								<div class="partner-logo">
									<figure>
										<img src="/pain/assets/images/introduce/img_partner_logo05.jpg" alt="">
									</figure>
								</div>
								<h3>분당서울대학교병원</h3>
							</div>
						</li>
						<li class="col-3">
							<div class="details">
								<div class="partner-logo">
									<figure>
										<img src="/pain/assets/images/introduce/img_partner_logo06.jpg" alt="">
									</figure>
								</div>
								<h3>서울대학교 병원</h3>
							</div>
						</li>
						<li class="col-3">
							<div class="details">
								<div class="partner-logo">
									<figure>
										<img src="/pain/assets/images/introduce/img_partner_logo07.jpg" alt="">
									</figure>
								</div>
								<h3>분당차병원</h3>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/docfoot.php'); ?>
</body>
</html>