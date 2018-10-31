<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/dochead.php'); ?>
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
				<li class="active">
					<a href="/rehabilitate/introduce/doctors.php">의료/치료진</a>
				</li>
				<li>
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
			<section class="care-team">
				<div class="section-header">
					<div class="page-title">
						<h2>의료/치료진</h2>
						<p>SRC병원 부설의원의 의료/치료진을 소개합니다.</p>
					</div>
					<nav class="page-tab">
						<ul>
							<li><a href="/rehabilitate/introduce/doctors.php">의료진</a></li>
							<li class="on"><a href="/rehabilitate/introduce/care_team.php">치료진</a></li>
						</ul>
					</nav>
				</div>
				<div class="section-content">
					<div class="sub-title">
						<h3>소아전담 치료진</h3>
					</div>
					<article class="member">
						<ul class="row">
							<li class="col-3">
								<figure>
									<img src="/rehabilitate/assets/images/introduce/care_list03.png" alt="">
									<figcaption>
										<h3>박 정 미 <span>팀장</span></h3>
										<p>물리치료실 / 물리치료사</p>
									</figcaption>
								</figure>
							</li>
							<li class="col-3">
								<figure>
									<img src="/rehabilitate/assets/images/introduce/care_list06.png" alt="">
									<figcaption>
										<h3>이 지 예</h3>
										<p>물리치료실 / 물리치료사</p>
									</figcaption>
								</figure>
							</li>
							<li class="col-3">
								<figure>
									<img src="/rehabilitate/assets/images/introduce/care_list02.png" alt="">
									<figcaption>
										<h3>김 선 우</h3>
										<p>물리치료실 / 물리치료사</p>
									</figcaption>
								</figure>
							</li>
							<li class="col-3">
								<figure>
									<img src="/rehabilitate/assets/images/introduce/care_list04.png" alt="">
									<figcaption>
										<h3>방 은 지</h3>
										<p>작업치료실 / 작업치료사</p>
									</figcaption>
								</figure>
							</li>
							<li class="col-3">
								<figure>
									<img src="/rehabilitate/assets/images/introduce/care_list05.png" alt="">
									<figcaption>
										<h3>이 은 경</h3>
										<p>작업치료실 / 작업치료사</p>
									</figcaption>
								</figure>
							</li>
							<li class="col-3">
								<figure>
									<img src="/rehabilitate/assets/images/introduce/care_list01.png" alt="">
									<figcaption>
										<h3>고 은 별</h3>
										<p>언어치료실 / 언어치료사</p>
									</figcaption>
								</figure>
							</li>
						</ul>
					</article>
					<div class="sub-title">
						<h3>성인 치료진</h3>
					</div>
					<article class="member">
						<ul class="row">
							<li class="col-3">
								<figure>
									<img src="/rehabilitate/assets/images/introduce/care_list07.png" alt="">
									<figcaption>
										<h3>전 양 희</h3>
										<p>물리치료실 / 물리치료사</p>
									</figcaption>
								</figure>
							</li>
							<li class="col-3">
								<figure>
									<img src="/rehabilitate/assets/images/introduce/care_list08.png" alt="">
									<figcaption>
										<h3>최 지 혜</h3>
										<p>작업치료실 / 작업치료사</p>
									</figcaption>
								</figure>
							</li>
						</ul>
					</article>
				</div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
</body>
</html>