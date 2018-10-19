<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/dochead.php'); ?>
<link rel="stylesheet" href="/rehabilitate/assets/css/sub.css">
<link rel="stylesheet" href="/rehabilitate/assets/css/childhood.css">  
</head>
<body class="childhood"> <!-- 폴더명 -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/header.php'); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/rehabilitate/inc/sub_quick.php"); ?>
	
	<!-- page-link -->
	<nav class="page-link">
		<div class="container">
			<ul class="nav">
				<li><a href="#">낮병동소개</a></li>
				<li>
					<a href="/rehabilitate/childhood/hospital.php">입원안내</a>
				</li>
				<li>
					<a href="/rehabilitate/childhood/treatment.php">치료/평가항목</a>
				</li>
				<li class="active">
					<a href="/rehabilitate/childhood/faq.php">자주하시는 질문</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<!-- Content -->
	<main id="content">
		<section class="faq"><!-- 페이지명 -->
			<div class="container">
				<div class="section-header">
					<div class="page-title">
						<h2>자주하시는 질문</h2>
					</div>
				</div>
				<div class="section-content">
					<div class="accordion" id="accordionExample">
						<div class="card active">
							<div class="card-header" id="headingOne">
								<h5>
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										낮병동이란 무엇인가요?
									</button>
								</h5>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									1
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5>
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										낮병동 접수절차는 어떻게 진행되나요?
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									접수절차는 다음과 같습니다. 전화문의 → 주치의진료 → 낮병동 대기 → 스케줄 가능시 연락
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5>
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										낮병동 접수 절차 중 주치의 진료시 필요 서류는 무엇인가요?
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									3
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFour">
								<h5>
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										낮병동 출석률 관리를 따로 하시나요?
									</button>
								</h5>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
								<div class="card-body">
									4
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFive">
								<h5>
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										낮병동 입원시 식사 제공이 되나요?
									</button>
								</h5>
							</div>
							<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
								<div class="card-body">
									5
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingSix">
								<h5>
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
										우리 아동의 치료 상태나 평가내용을 주기적으로 알고 싶습니다.
									</button>
								</h5>
							</div>
							<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
								<div class="card-body">
									6
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingSeven">
								<h5>
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
										치료 중 응급상황이 발생하면 절차가 어떻게 되나요?
									</button>
								</h5>
							</div>
							<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
								<div class="card-body">
									7
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingEight">
								<h5>
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
										진단서 및 소견서 등의 발급 절차는 무엇인가요?
									</button>
								</h5>
							</div>
							<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
								<div class="card-body">
									8
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingNine">
								<h5>
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
										낮병동 입원시간에 타병원 진료도 가능한가요?
									</button>
								</h5>
							</div>
							<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
								<div class="card-body">
									9
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
</body>
</html>