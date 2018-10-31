<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/dochead.php'); ?>
<link rel="stylesheet" href="/rehabilitate/assets/css/sub.css">
<link rel="stylesheet" href="/rehabilitate/assets/css/connection.css">
</head>
<body class="sub connection">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/header.php'); ?>
	<!-- Main Content -->
	<main id="content">
    	<!-- 페이지 링크 -->
		<nav class="page-link">
			<div class="container">
				<ul class="nav">
					<li><a href="/rehabilitate/connection/speech.php">SRC언어심리상담센터</a></li>
					<li class="active"><a href="/rehabilitate/connection/sportscenter.php">SRC스포츠센터</a></li>
				</ul>
			</div>
		</nav>
		<section class="sportscenter">
		    <div class="header">
		        <div class="container">
		            <small>스포츠 관련 서비스 전문기관</small>
		            <h2>SRC 스포츠 센터</h2>
		        </div>
		    </div>
		    <div class="section-content">
		        <div class="container">
		            <p>
		                SRC스포츠센터는 차별화된 재활프로그램을 연구·개발하는 스포츠 관련 서비스 전문기관으로서<br>
		                신체발달균형을 위한 엄마와 아이가 함께하는 수중운동 프로그램 및 각 영역별 장애에 맞는 맞춤형 프로그램 등 재활치료에 연계하여 운영하고 있습니다.
		            </p>
		            <ul class="row">
		                <li class="col-6">
		                    <figure>
		                        <img src="/rehabilitate/assets/images/connection/icon_program01.png" alt="">
		                        <figcaption>수영 프로그램</figcaption>
		                    </figure>
		                    <ul>
		                        <li>직장인, 주부, 어린이, 노인 건강 수영교실 별도 운영 </li>
		                        <li>초등학교 및 방학 특강  수영 교실 </li>
		                        <li>장애 영역별 맞춤형 수영 프로그램  </li>
		                    </ul>
		                </li>
		                <li class="col-6">
		                    <figure>
		                        <img src="/rehabilitate/assets/images/connection/icon_program02.png" alt="">
		                        <figcaption>수중운동 프로그램</figcaption>
		                    </figure>
		                    <ul>
		                        <li>어르신과 몸이 불편한 분을 위한 수중 운동 프로그램  </li>
		                        <li>신체발달 균형을 위한 엄마와 아이가 함께하는 수중 운동 프로그램 </li>
		                        <li>아쿠아로빅 프로그램 </li>
		                    </ul>
		                </li>
		            </ul>
		        </div>
		    </div>
		</section>
		<section class="service">
			<div class="section-header">
				<h3>
					SRC병원 부설의원만의
					<strong>ALL-IN-ONE SERVICE</strong>
				</h3>
				<p>건물 내 언어심리상담센터 및 스포츠센터가 위치하여 치료가 용이합니다.</p>
			</div>
			<div class="section-content">
				<article class="speech">
					<div class="details">
						<h4>SRC 언어·심리상담센터</h4>
							<p>
								건물 내 SRC언어·심리상담센터와 연계되어<br>
								놀이, 인지, 미술, 심리 외 기타 치료가 가능합니다
							</p>
							<div class="btn-area">
								<p>
									<a href="http://speech.srchospital.com" target="_blank" class="btn btn-default" role="button">사이트 바로가기</a>
								</p>
							</div>
					</div>
					<figure>
						<img src="/rehabilitate/assets/images/img_speech.png" class="img-fluid" alt="">
					</figure>
				</article>
				<article class="sports">
					<div class="details">
						<h4>SRC 스포츠센터</h4>
						<p>
							건물 내 SRC스포츠센터(수영장)와 연계되어<br>
							각종 체육활동 및 재활체육 치료가 가능합니다
						</p>
						<div class="btn-area">
							<p>
								<a href="http://www.srcsportscenter.com/" target="_blank" class="btn btn-default" role="button">사이트 바로가기</a>
							</p>
						</div>
					</div>
					<figure>
						<img src="/rehabilitate/assets/images/img_sports.png" class="img-fluid" alt="">
					</figure>
				</article>
			</div>
		</section>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/rehabilitate/inc/sub_quick.php"); ?>
</body>
</html>