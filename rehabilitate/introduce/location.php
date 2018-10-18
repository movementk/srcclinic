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
				<li class="active">
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
			<section class="location"><!-- 페이지명 -->
				<div class="section-header">
					<div class="page-title">
						<h2>오시는길</h2>
						<!--p>SRC병원 부설의원으로 오시는길을 알려드립니다.</p-->
					</div>
					<nav class="page-tab">
						<ul>
							<li class="on"><a href="/rehabilitate/introduce/location.php">오시는길</a></li>
							<li><a href="#">빠른 길찾기</a></li>
						</ul>
					</nav>
				</div>
				<div class="section-content">
					<article class="clinic">
						<div class="sub-title">
							<h3>SRC병원 부설의원</h3>
						</div>
						<div class="table-wrap">
							<table class="table">
								<tbody>
									<tr>
										<th>주소안내</th>
										<td>서울특별시 관악구 보라매로 44 SRC서울센터 (08709)</td>
									</tr>
									<tr>
										<th>전화번호</th>
										<td>02-871-3636</td>
									</tr>
									<tr>
										<th>FAX</th>
										<td>02-876-3202</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="maps">
							<img src="/rehabilitate/assets/images/introduce/img_maps.jpg" class="img-fluid" alt="">
						</div>
					</article>
					<article class="traffic">
						<div class="sub-title">
							<h3>상세 교통편 안내</h3>
							<p>
								패션 문화의 거리로 직진하셔서 당곡사거리 방향으로 오시면 보라매 공원이 보이며 맞은편 건물입니다.<br> 신림역이나 신림사거리 정류장 하차 신림역 7번 출구 방면으로 300m 이동후 지선버스, 혹은 간선버스 이용후 1정거장 지나서 하차.<br> 롯데관악점을 경우하는 지선버스는 2정거장 지나서 하차.
							</p>
						</div>
						<div class="table-wrap">
							<table class="table">
								<tbody>
									<tr>
										<th>지하철</th>
										<td>
											<ul class="details">
												<li>
													<span class="line-7">7호선</span>
													7호선 신대방삼거리역 2번출구
												</li>
												<li>
													<span class="line-2">2호선</span>
													2호선 신림역 7번 출구
												</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>버스</th>
										<td>
											<ul class="details">
												<li>
													<span class="green-bus">지선버스</span>
													5516. 5518, 5525, 5529, 5614,5711, 6513, 6514
												</li>
												<li>
													<span class="blue-bus">간선버스</span>
													152, 500, 504, 461
												</li>
											</ul>
										</td>
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