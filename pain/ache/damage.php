<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/dochead.php'); ?>
<link rel="stylesheet" href="/pain/assets/css/sub.css">
<link rel="stylesheet" href="/pain/assets/css/ache.css">
</head>
<body class="sub ache special-clinic">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/header.php'); ?>
	<!-- Main Content -->
	<main id="content">
    	<!-- 페이지 링크 -->
		<nav class="page-link">
			<div class="container">
				<ul class="nav">
					<li>
						<a href="/pain/ache/germany_medicine.php">독일도수의학</a>
					</li>
					<li class="active">
						<a href="/pain/ache/chronic_pain.php">특수클리닉</a>
					</li>
					<li>
						<a href="/pain/ache/operation_rehabilitation.php">수술 후 재활</a>
					</li>
					<li>
						<a href="/pain/ache/injection_treatment.php">주사치료</a>
					</li>
					<li>
						<a href="/pain/ache/spine_intervention.php">척추중재술</a>
					</li>
					<li>
						<a href="/pain/ache/shock_wave.php">체외충격파치료</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="page-intro">
			<div class="summary">
				<div class="container">
					<h3>특수클리닉</h3>
					<p>
						독일근골격의학회(die Deutsche Gesellschaft für Muskuloskeletale Medizin; DGMSM)는<br>
						60년 이상의 전통을 자랑하는 학회로 도수의학의 발원지인 독일에서 가장 권위있는 도수의학회입니다
					</p>
				</div>
			</div>
			<nav class="intro-tab">
				<div class="container">
					<ul class="menu">
						<li><a href="/pain/ache/chronic_pain.php">만성통증</a></li>
						<li class="on"><a href="/pain/ache/damage.php">스포츠손상</a></li>
						<li><a href="/pain/ache/childbirth_rehabilitation.php">출산후 골반관리</a></li>
						<li><a href="/pain/ache/breast_cancer.php">유방암 치료 후 재활</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<section class="damage">
		    <div class="container">
		        <div class="section-header">
                    <div class="sub-title">
                        <h3>스포츠 손상</h3>
                    </div>
		        </div>
		        <div class="section-content">
		            <div class="row">
		                <div class="col-6">
		                    <div class="details">
		                        <small>대한스포츠의학회 인증 전문의의</small>
		                        <h4><i>정확한 진단</i> 을 통한 재활치료 및 <i>재손상 예방</i>시행</h4>
		                        <hr>
		                        <p>
		                            이영상 과장님은 대한스포츠의학회 스포츠의학 인증 전문의이며 다양한 엘리트 스포츠 선수들의 의무지원 경력을 갖고 있습니다.<br>
		                            이를 바탕으로 SRC 병원 부설의원은 운동선수와 동호인을 위한 정확한 진단을 통한 스포츠 손상의 급성치료에서부터 재활치료, 그리고 재손상 예방까지 시행하고 있습니다.
		                        </p>
		                    </div>
		                </div>
		                <div class="col-6">
		                    <figure>
		                        <img src="/pain/assets/images/ache/img_damage.png" class="img-fluid" alt="">
		                    </figure>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/docfoot.php'); ?>
</body>
</html>