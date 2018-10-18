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
				<li class="active">
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
		<section class="news-letter"><!-- 페이지명 -->
			<div class="container">
				<div class="section-header">
					<div class="page-title">
						<h2>SRC뉴스레터</h2>
						<!--p>SRC병원 부설의원의 SRC뉴스레터를 알려드립니다.</p-->
					</div>
				</div>
				<div class="section-content">
					<div class="news-letter">
						<div class="news-list">
							<a href="#">
								<div class="items">
									<img src="/rehabilitate/assets/images/notice/img_new_letter01.jpg" class="img-fluid" alt="">
								</div>
								<h4>SRC News Letter.36호(2018년 3월 발행)</h4>
							</a>
						</div>
						<div class="news-list">
							<a href="#">
								<div class="items">
									<img src="/rehabilitate/assets/images/notice/img_new_letter02.jpg" class="img-fluid" alt="">
								</div>
								<h4>SRC News Letter.35호(2018년 2월 발행)</h4>
							</a>
						</div>
						<div class="news-list">
							<a href="#">
								<div class="items">
									<img src="/rehabilitate/assets/images/notice/img_new_letter03.jpg" class="img-fluid" alt="">
								</div>
								<h4>SRC News Letter.34호(2018년 1월 발행)</h4>
							</a>
						</div>
						<div class="news-list">
							<a href="#">
								<div class="items">
									<img src="/rehabilitate/assets/images/notice/img_new_letter04.jpg" class="img-fluid" alt="">
								</div>
								<h4>SRC News Letter.33호(2017년 12월 발행)</h4>
							</a>
						</div>
						<div class="news-list">
							<a href="#">
								<div class="items">
									<img src="/rehabilitate/assets/images/notice/img_new_letter05.jpg" class="img-fluid" alt="">
								</div>
								<h4>SRC News Letter.32호(2017년 11월 발행)</h4>
							</a>
						</div>
						<div class="news-list">
							<a href="#">
								<div class="items">
									<img src="/rehabilitate/assets/images/notice/img_new_letter06.jpg" class="img-fluid" alt="">
								</div>
								<h4>SRC News Letter.31호(2017년 10월 발행)</h4>    
							</a>
						</div>
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