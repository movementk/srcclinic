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
					<a href="/rehabilitate/introduce/facility.php">시설안내</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/business_number.php">부서별 전화번호</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/location.php">오시는길</a>
				</li>
				<li>
					<a href="#">증명서 발급</a>
				</li>
				<li class="active">
					<a href="/rehabilitate/introduce/sum_list.php">비급여 안내</a>
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
			<section class="sum-list"><!-- 페이지명 -->
				<div class="section-header">
					<div class="page-title">
						<h2>비급여 안내</h2>
						<p>SRC병원 부설의원의 주요협력기관 입니다.</p>
					</div>
				</div>
				<div class="section-content">
					<article class="basic">
						<div class="sub-title">
							<h3>기본항목 1</h3>
						</div>
						<div class="table-wrap">
							<table class="table type-1">
								<thead>
									<tr>
										<th>구분</th>
										<th>기본항목</th>
										<th>가격 (단위 : 원)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>검사</td>
										<td>초음파 검사 - 1 부위</td>
										<td>80,000</td>
									</tr>
									<tr>
										<td>검사</td>
										<td>초음파 검사 - 2 부위</td>
										<td>120,000</td>
									</tr>
									<tr>
										<td>검사</td>
										<td>초음파 검사 - 3 부위 이상</td>
										<td>160,000</td>
									</tr>
									<tr>
										<td>통증치료</td>
										<td>도수치료 - 10분</td>
										<td>30,000</td>
									</tr>
									<tr>
										<td>통증치료</td>
										<td>도수치료 - 40분</td>
										<td>80,000</td>
									</tr>
									<tr>
										<td>통증치료</td>
										<td>도수치료 - 80분</td>
										<td>160,000</td>
									</tr>
									<tr>
										<td>통증치료</td>
										<td>체외충격파 치료 - 1부위</td>
										<td>80,000</td>
									</tr>
									<tr>
										<td>통증치료</td>
										<td>체외충격파 치료 - 2부위</td>
										<td>120,000</td>
									</tr>
									<tr>
										<td>통증치료</td>
										<td>체외충격파 치료 - 3부위 이상</td>
										<td>160,000</td>
									</tr>
									<tr>
										<td>통증치료</td>
										<td>플라센텍스주</td>
										<td>100,000</td>
									</tr>
									<tr>
										<td>통증치료</td>
										<td>증식치료 (prolotherapy) - 사지관절부위</td>
										<td>50,000</td>
									</tr>
									<tr>
										<td>통증치료</td>
										<td>증식치료 (prolotherapy) - 척추관절부위</td>
										<td>100,000</td>
									</tr>
									<tr>
										<td>통증치료</td>
										<td>이온토포레시스</td>
										<td>15,000</td>
									</tr>
									<tr>
										<td>통증치료</td>
										<td>Hylase 150u</td>
										<td>27,000</td>
									</tr>
									<tr>
										<td>통증치료</td>
										<td>Hylase 1500u</td>
										<td>88,000</td>
									</tr>
								</tbody>
							</table>
						</div>
					</article>
					<article class="proof">
						<div class="sub-title">
							<h3>제증명료</h3>
						</div>
						<div class="table-wrap">
							<table class="table type-1">
								<thead>
									<tr>
										<th>구분</th>
										<th>기본항목</th>
										<th>가격 (단위 : 원)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>제증명료</td>
										<td>일반진단서 - 원본</td>
										<td>20,000</td>
									</tr>
									<tr>
										<td>제증명료</td>
										<td>의사 소견서</td>
										<td>10,000</td>
									</tr>
									<tr>
										<td>제증명료</td>
										<td>소견서 (영문)</td>
										<td>20,000</td>
									</tr>
									<tr>
										<td>제증명료</td>
										<td>진단서 (영문)</td>
										<td>40,000</td>
									</tr>
									<tr>
										<td>제증명료</td>
										<td>의무기록사본복사 (기본 5장까지)</td>
										<td>2,000</td>
									</tr>
									<tr>
										<td>제증명료</td>
										<td>의무기록사본복사 (6매부터 추가 1장당)</td>
										<td>200</td>
									</tr>
									<tr>
										<td>제증명료</td>
										<td>CD 복사</td>
										<td>10,000</td>
									</tr>
									<tr>
										<td>제증명료</td>
										<td>입, 퇴원 확인서</td>
										<td>3,000</td>
									</tr>
									<tr>
										<td>제증명료</td>
										<td>진단확인서</td>
										<td>20,000</td>
									</tr>
								</tbody>
							</table>
						</div>
					</article>
				</div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
</body>
</html>