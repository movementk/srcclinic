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
					<a href="#">병원소개</a>
				</li>
				<li>
					<a href="#">의료/치료진</a>
				</li>
				<li>
					<a href="#">시설안내</a>
				</li>
				<li class="active">
					<a href="/rehabilitate/introduce/business_number.php">부서별 전화번호</a>
				</li>
				<li>
					<a href="#">오시는길</a>
				</li>
				<li>
					<a href="#">증명서 발급</a>
				</li>
				<li>
					<a href="#">비급여 안내</a>
				</li>
				<li>
					<a href="#">협력기관</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<!-- Content -->
	<main id="content">
		<div class="container">
			<section class="business-number"><!-- 페이지명 -->
				<div class="section-header">
					<div class="page-title">
						<h2>부서별 전화번호</h2>
						<p>SRC부서별 전화 번호입니다. 문의사항시 문의해 주세요.</p>
					</div>
				</div>
				<div class="section-content">
					<div class="sub-title">
						<h3>SRC병원 부설의원 전화번호 안내입니다.</h3>
						<p>SRC 부설의원에 대한 문의사항이 있으시면 아래번호로 연락을 주시기 바랍니다.</p>
					</div>
				</div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
</body>
</html>