<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/dochead.php'); ?>
<link rel="stylesheet" href="/rehabilitate/assets/css/sub.css">
<link rel="stylesheet" href="/rehabilitate/assets/css/notice.css">  
</head>
<body class="notice"> <!-- 폴더명 -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/header.php'); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/rehabilitate/inc/sub_quick.php"); ?>
	
	<!-- page-link -->
	<nav class="page-link">
		<div class="container">
			<ul class="nav">
				<li>
					<a href="/rehabilitate/notice/notice_list.php">공지사항</a>
				</li>
				<li>
					<a href="/rehabilitate/notice/news_letter.php">SRC뉴스레터</a>
				</li>
				<li>
					<a href="#">사회공헌사업</a>
				</li>
				<li class="active">
					<a href="/rehabilitate/notice/health_list.php">재활/건강정보</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<!-- Content -->
	<main id="content">
		<section class="health-list"><!-- 페이지명 -->
			<div class="container">
				<div class="section-header">
					<div class="page-title">
						<h2>재활/건강정보</h2>
						<!--p>SRC병원 부설의원의 재활/건강정보를 알려드립니다.</p-->
					</div>
					<div class="search-form">
						<form action="#">
							<div class="form-group">
								<select class="form-control">
									<option>전체</option>
								</select>
							</div>
							<div class="form-group">
								<input type="text" id="board-search" class="form-control">
								<label for="board-search" class="sr-only">검색어 입력</label>
							</div>
							<p class="btn-search">
								<button type="submit" class="btn btn-default">
									<i class="icon-search"></i>
								</button>
							</p>
						</form>
					</div>
				</div>
				<div class="section-content">
					<div class="board-list">
						<ul>
							<li>
								<a href="/rehabilitate/notice/health_view.php">
									<figure>
										<img src="/rehabilitate/assets/images/notice/img_health_list01.jpg" class="img-fluid" alt="">
									</figure>
									<div class="details">
										<h3>[건강정보] 뒷통수, 뒷목, 어깨가 뻣뻣하나요? 통증이 심한가요? - 일자목과 거북목증후군</h3>
										<ul class="icon-list">
											<li class="icon-calendar">2018.01.08</li>
											<li class="icon-eye">1677</li>
										</ul>
										<p>척추는 목에서부터 경추, 흉추, 요추, 천골로 이루어져있습니다.<br> 척추에서 맨 위에 위치하는 경추는 옆에서 봤을 때 그림과 같이 c자형 곡선을 이루며 머리 무게에 의한 압력을 분산시켜주는 역활을 합니다.</p>
									</div>
								</a>
							</li>
							<li>
								<a href="/rehabilitate/notice/health_view.php">
									<figure>
										<img src="/rehabilitate/assets/images/notice/img_health_list02.jpg" class="img-fluid" alt="">
									</figure>
									<div class="details">
										<h3>[건강정보] 근골격계질환 - 체외충격파치료</h3>
										<ul class="icon-list">
											<li class="icon-calendar">2017.05.18</li>
											<li class="icon-eye">677</li>
										</ul>
										<p>체외충격파치료는 요로 결석을 제거하는 체외충격파 쇄석술(eswl)로 처음 사용 되었으나 체외충격파가 가관절 또는 골절의 지연 유합에 효과가 있음이 입증되면서 정형의학 질환에 처음 사용되었다.</p>
									</div>
								</a>
							</li>
							<li>
								<a href="/rehabilitate/notice/health_view.php">
									<figure>
										<img src="/rehabilitate/assets/images/notice/img_board_none.jpg" class="img-fluid" alt="">
									</figure>
									<div class="details">
										<h3>[건강정보] 오십견 - 유착성 견관절염의 치료</h3>
										<ul class="icon-list">
											<li class="icon-calendar">2018.01.08</li>
											<li class="icon-eye">123</li>
										</ul>
										<p>특별한 원인 없이 어깨관절의 통증과 수동 및 능동 운동 장애를 특징으로 하는 질환으로 흔히 동결견 또는 오십견이라 불린다.</p>
									</div>
								</a>
							</li>
							<li>
								<a href="/rehabilitate/notice/health_view.php">
									<figure>
										<img src="/rehabilitate/assets/images/notice/img_health_list04.jpg" class="img-fluid" alt="">
									</figure>
									<div class="details">
										<h3>[건강정보] 당신의 척추는 안녕하신가요?</h3>
										<ul class="icon-list">
											<li class="icon-calendar">2016.12.20</li>
											<li class="icon-eye">124</li>
										</ul>
										<p>젊은이들 외에도 여전히 성인들과 어르신들의 경부통 및 요통 유병율은 여전히 높으며, 나이가 든 만큼 그 원인도 더욱 다양하다.  </p>
									</div>
								</a>
							</li>
							<li>
								<a href="/rehabilitate/notice/health_view.php">
									<figure>
										<img src="/rehabilitate/assets/images/notice/img_health_list05.jpg" class="img-fluid" alt="">
									</figure>
									<div class="details">
										<h3>[건강정보] 체형 및 자세분석의 필요성</h3>
										<ul class="icon-list">
											<li class="icon-calendar">
											2018.01.08</li>
											<li class="icon-eye">123</li>
										</ul>
										<p>병원에서 일하다 보면 허리나 목, 무릎 등이 만성적으로 아프신 분들을 많이 만나게 된다.</p>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<nav class="paging">
						<ol class="pagination">
							<li class="">
								<a href="#">
									<i class="icon-angle-double-left"></i>
									<span class="sr-only">첫 페이지</span>
								</a>
							</li>
							<li class="prev">
								<a href="#">
									<i class="icon-angle-left"></i>
									<span class="sr-only">이전 페이지</span>
								</a>
							</li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">5</a>
							</li>
							<li>
								<a href="#">6</a>
							</li>
							<li>
								<a href="#">7</a>
							</li>
							<li>
								<a href="#">8</a>
							</li>
							<li>
								<a href="#">9</a>
							</li>
							<li>
								<a href="#">10</a>
							</li>
							<li class="next">
								<a href="#">
									<i class="icon-angle-right"></i>
									<span class="sr-only">다음 페이지</span>
								</a>
							</li>
							<li class="last">
								<a href="#">
									<i class="icon-angle-double-right"></i>
									<span class="sr-only">마지막 페이지</span>
								</a>
							</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
</body>
</html>