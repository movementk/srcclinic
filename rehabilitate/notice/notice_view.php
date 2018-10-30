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
					<a href="/rehabilitate/notice/social_contribution.php">사회공헌사업</a>
				</li>
				<li>
					<a href="/rehabilitate/notice/health_list.php">재활/건강정보</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<!-- Content -->
	<main id="content">
		<section class="notice-view"><!-- 페이지명 -->
			<div class="container">
				<div class="section-header">
					<div class="page-title">
						<h2>공지사항</h2>
						<!--p>SRC병원 부설의원의 공지사항을 알려드립니다.</p-->
					</div>
				</div>
				<div class="section-content">
					<article class="board-view">
						<div class="article-header">
							<h3>[서울/SRC병원 부설의원] 국내 유일의 독일 도수의학 클리닉</h3>
							<ul class="icon-list">
								<li class="icon-calendar">2018.01.08</li>
								<li class="icon-eye">1677</li>
							</ul>
						</div>
						<div class="article-content">
							<div class="items">
								<img src="/rehabilitate/assets/images/sub/img_board_view.jpg" alt="">
							</div>
						</div>
						<dl class="attach">
							<dt>첨부파일</dt>
							<dd>
								<ul>
									<li><a href="#">첨부파일</a></li>
								</ul>
							</dd>
						</dl>
					</article>
					<!-- 게시판 페이지 링크 -->
					<ul class="board-page-link">
						<li class="prev-link">
							<dl>
								<dt>이전글</dt>
								<dd>
									<a href="#">이전글 제목이 노출되는 영역입니다.</a>
								</dd>
							</dl>
						</li>
						<li class="next-link">
							<dl>
								<dt>다음글</dt>
								<dd>
									<a href="#">다음글 제목이 노출되는 영역입니다.</a>
								</dd>
							</dl>
						</li>
					</ul>
					<div class="btn-area">
						<p>
							<a href="/rehabilitate/notice/notice_list.php" class="btn btn-green">목록 보기</a>
						</p>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
</body>
</html>