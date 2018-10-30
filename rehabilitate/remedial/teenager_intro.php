<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/dochead.php'); ?>
<link rel="stylesheet" href="/rehabilitate/assets/css/sub.css">
<link rel="stylesheet" href="/rehabilitate/assets/css/remedial.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body class="remedial teenager"> <!-- 폴더명 -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/header.php'); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/rehabilitate/inc/sub_quick.php"); ?>
	
	<!-- page-link -->
	<nav class="page-link">
		<div class="container">
			<ul class="nav">
				<li>
					<a href="/rehabilitate/remedial/child_physical.php">소아</a>
				</li>
				<li class="active">
					<a href="/rehabilitate/remedial/teenager_intro.php">청소년</a>
				</li>
				<li>
					<a href="/rehabilitate/remedial/adult_physical.php">성인</a>
				</li>
			</ul>
		</div>
	</nav>
	<!--페이지 인트로-->
	<div class="page-intro">
		<div class="summary">
			<div class="container">
				<h3>청소년 재활치료</h3>
				<p>
					팔 다리 신체기능에 장애가 발생한 경우 운동장애를 가진 환우분들에게 <br>
					전문과정을 이수한 전문치료사들이 1:1로 다양하고 정확한 평가 후 치료를 실시합니다.
				</p>
			</div>
		</div>
		<nav class="intro-tab">
			<div class="container">
				<ul class="menu">
					<li class="on"><a href="/rehabilitate/remedial/teenager_intro.php">SRC청소년치료실 소개</a></li>
					<li><a href="/rehabilitate/remedial/teenager_physical.php">물리치료</a></li>
					<li><a href="/rehabilitate/remedial/teenager_occupational.php">작업치료</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<!-- Content -->
	<main id="content" class="teenager-info"><!-- 페이지명 -->
		<div class="container">
			<article class="reason">
                <div class="row">
                    <div class="col-7 offset-5">
                        <div class="summary">
			                <h4>
			                    <img src="/rehabilitate/assets/images/remedial/img_teenager_intro_logo.png" alt="">청소년 치료실이 
			                    <strong>필요한 <i>이유</i></strong>
			                </h4>
			                <p>
			                    소아·성인만으로 구분하여 치료하는 병원은 많으나, 성장기의 청소년을 위한 세팅도구와<br>
			                    장비로 차별성과 전문성이 있는 치료를 하는 병원은 전무한 실정입니다.<br>
			                    특히 연령에 따른 적절한 치료를 위한 공간의 분리와 학교생활과 관련한 치료적 접근은 <br>
			                    반드시 필요합니다. 가령 치료의 접근성이 부족해지거나 휠체어 생활의 시간이 늘어나는 <br>
			                    청소년기에 관절 변형 및 관절 구축, 또한 기능 저하 등 2차적 문제가 현저히 늘어나 <br>
			                    이에 맞는 전문적인 치료적 접근이 필요합니다,
			                </p>
			             </div>
			        </div>
			    </div>
			</article>
			<article class="advantag">
			    <div class="row">
                    <div class="col-7">
                        <div class="summary">
                            <h4>
                                <img src="/rehabilitate/assets/images/remedial/img_teenager_intro_logo.png" alt="">청소년 치료실만의 
                                <strong><i>장점</i></strong>
                            </h4>
                            <p>
                                소아치료실에서 성인치료실로 전환되는 과정에서 소아치료에 대한 경험이 부족한<br>
                                성인치료사들이 소아치료에서 진행되어 온 치료 접근 관점 및 방법과 다른 경우가 많습니다.<br>
                                본 원의 청소년 치료실은 소아치료에 대한 풍부한 경험과 소아치료실과의 원활한 소통으로<br>
                                치료의 연계성을 가지고 성인치료까지 이어갑니다.<br><br>
                                독립된 공간에서 대상자의 집중력을 증진시킬 수 있으며,<br>
                                소아·청소년·성인치료실이 한 건물에 위치하여 치료의 단절없이 연속성있게 진행됩니다.<br>
                                뿐만 아니라 언어, 음악, 미술, 수영 등의 다양한 프로그램도 함께 진행할 수 있다는<br>
                                <b>장점</b>도 있습니다.

                            </p>
			             </div>
			        </div>
			    </div>
			</article>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>