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
				<li class="active">
					<a href="/rehabilitate/introduce/">병원소개</a>
				</li>
				<li>
					<a href="#">의료/치료진</a>
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
		<section class="src-hospital"><!-- 페이지명 -->
			<div class="section-header">
				<div class="container">
					<div class="page-title">
						<h2>병원소개</h2>
					</div>
				</div>
			</div>
			<div class="section-content">
				<article class="seoul">
					<div class="container">
						<div class="article-header">
							<h3>SRC병원 부설의원(서울)</h3>
							<p>서울 보라매에 위치한 또 하나의 SRC, SRC병원 부설의원</p>
						</div>
						<div class="article-content">
							<p>
								SRC만의 전문재활의료에서 핵심적인 재활치료를 특화시켜 환자와 보호자에게 이용은 쉽고 편하게, 효과는 높고 빠르도록 <br>
								의료서비스를 제공하고 있습니다.<br>
								특히 소아재활의 효과적인 치료를 도모하기 위한 지역내 유일의 소아 낮병동을 운영하고 있으며,  아동에게 최적화된 <br>
								치료환경과 체계적인 평가를 갖춘 독립적인 치료병동을 갖추고 있습니다. <br>
								특히 성인과 소아 치료 공간을 분리하여 보다 전문적이고 집중된 재활치료를 실시하고 있습니다.  <br>
								뿐만 아니라  다양한 프로그램(언어심리상담센터,  스포츠센터, 특수학교)을 함께 운영하여SRC의 특화된 <br>
								통합재활서비스를 제공합니다.   
							</p>
						</div>
					</div>
				</article>
				<article class="others">
					<div class="container">
						<ol>
							<li class="gwangju">
								<figure></figure>
								<div class="details">
									<h3></h3>
								</div>
							</li>
							<li class="child"></li>
							<li class="remedial"></li>
						</ol>
					</div>
				</article>
			</div>
		</section>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
</body>
</html>