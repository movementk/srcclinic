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
				<li class="active">
					<a href="/rehabilitate/notice/notice_list.php">공지사항</a>
				</li>
				<li>
					<a href="/rehabilitate/notice/news_letter.php">SRC뉴스레터</a>
				</li>
				<li>
					<a href="#">사회공헌사업</a>
				</li>
				<li>
					<a href="/rehabilitate/notice/health_list.php">재활/건강정보</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<!-- Content -->
	<main id="content">
		<section class="notice-list"><!-- 페이지명 -->
			<div class="container">
				<div class="section-header">
					<div class="page-title">
						<h2>공지사항</h2>
						<!--p>SRC병원 부설의원의 공지사항을 알려드립니다.</p-->
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
								<a href="/rehabilitate/notice/notice_view.php">
									<figure>
										<img src="/rehabilitate/assets/images/notice/img_board_list01.jpg" class="img-fluid" alt="">
									</figure>
									<div class="details">
										<h3>[서울/SRC병원 부설의원] 국내 유일의 독일 도수의학 클리닉
										</h3>
										<ul class="icon-list">
											<li class="icon-calendar">2018.01.08</li>
											<li class="icon-eye">1677</li>
										</ul>
										<p>국내 유일의 독일 도수의학 클리닉을 운영하고 있는 SRC병원 부설의원에는 독일근골격의학회(DGMSM)의 도수의학·도수치료 자격을 취득한 전문가들이 작은 통증까지 세심하게 치료하고 있습니다. 또한 출산 후 골반관리와 유방암 수술 및 방사선 치료 후 발생하는 어깨 통증 및 구축을 위한 전문여성치료사가 있습니다.</p>
									</div>
								</a>
							</li>
							<li>
								<a href="/rehabilitate/notice/notice_view.php">
									<figure>
										<img src="/rehabilitate/assets/images/notice/img_board_list02.jpg" class="img-fluid" alt="">
									</figure>
									<div class="details">
										<h3>[공지] [서울/SRC병원 부설의원] 이디야커피 제휴 할인
										</h3>
										<ul class="icon-list">
											<li class="icon-calendar">2017.05.18</li>
											<li class="icon-eye">677</li>
										</ul>
										<p>이디야커피(보라매중앙점)가 서울센터 이용자분들에게 제휴할인을 해드립니다.</p>
									</div>
								</a>
							</li>
							<li>
								<a href="/rehabilitate/notice/notice_view.php">
									<figure>
										<img src="/rehabilitate/assets/images/notice/img_board_none.jpg" class="img-fluid" alt="">
									</figure>
									<div class="details">
										<h3>[서울/SRC병원 부설의원] 독일 도수의학 클리닉 의료진 소개
										</h3>
										<ul class="icon-list">
											<li class="icon-calendar">2018.01.08</li>
											<li class="icon-eye">123</li>
										</ul>
										<p>안녕하세요.<br>SRC병원 부설의원은 '국내 유일의 독일 도수의학 클리닉'을 운영하고 있습니다</p>
									</div>
								</a>
							</li>
							<li>
								<a href="/rehabilitate/notice/notice_view.php">
									<figure>
										<img src="/rehabilitate/assets/images/notice/img_board_list04.jpg" class="img-fluid" alt="">
									</figure>
									<div class="details">
										<h3>[공지] [서울/SRC병원 부설의원] 도수치료 실손보험관련 안내
										</h3>
										<ul class="icon-list">
											<li class="icon-calendar">2016.12.20</li>
											<li class="icon-eye">124</li>
										</ul>
										<p>도수치료로 인한 실손보험이 거절당한 사례가 언론에 보도된 이후 많은 환자분들이 걱정하시고 계신 것 같아 알려드립니다. SRC병원은 늘 최고의 치료를 해드릴 것을 약속드립니다. 고맙습니다. </p>
									</div>
								</a>
							</li>
							<li>
								<a href="/rehabilitate/notice/notice_view.php">
									<figure>
										<img src="/rehabilitate/assets/images/notice/img_board_list05.jpg" class="img-fluid" alt="">
									</figure>
									<div class="details">
										<h3>[소식] [서울/SRC병원 부설의원] SRC 창립 65주년 기념 사진 공모전
										</h3>
										<ul class="icon-list">
											<li class="icon-calendar">
											2018.01.08</li>
											<li class="icon-eye">123</li>
										</ul>
										<p>힘든 하루하루 속에서 우리를 미소짓게하는 소소한 행복들.<br>그곳에 src가 함께 했습니다.</p>
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