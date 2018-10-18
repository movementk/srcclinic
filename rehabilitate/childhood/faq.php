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
					<!--<div class="panel-group faq-list" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="pannel-header" role="tab" id="faqTwo">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-2" aria-expanded="false" aria-controls="faq-list-2">
									기부금의 용도를 지정할수 있습니까?
								</a>
							</div>
							<div id="faq-list-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqTwo" aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									일반발전기금 및 지정발전기금 중에서 지정하실 수 있습니다.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="pannel-header" role="tab" id="faqThree">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-3" aria-expanded="false" aria-controls="faq-list-3">
									기부를 하려면 어떻게 해야 합니까?
								</a>
							</div>
							<div id="faq-list-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqThree" aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									전화나 이메일, 게시판에 문의를 주시거나 온라인으로 직접 약정 후 기부가 가능합니다.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="pannel-header" role="tab" id="faqFour">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-4" aria-expanded="false" aria-controls="faq-list-4">
									금액이 적어도 기부를 할 수 있습니까?
								</a>
							</div>
							<div id="faq-list-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqFour" aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									10,000원 이상의 금액부터 기부가 가능합니다.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="pannel-header" role="tab" id="faqFive">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-5" aria-expanded="false" aria-controls="faq-list-5">
									기부금 납부시 약정서를 작성해야만 합니까?
								</a>
							</div>
							<div id="faq-list-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqFive" aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									약정서 작성 후 기부금 납입을 하셔야 기부금영수증을 받으실 수 있습니다.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="pannel-header" role="tab" id="faqSix">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-6" aria-expanded="false" aria-controls="faq-list-6">
									기부자에 대한 혜택이 있습니까?
								</a>
							</div>
							<div id="faq-list-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqSix" aria-expanded="false">
								<div class="panel-body">
									누적 기부금액에 따라 다양한 혜택이 있습니다. 홈페이지 상단의 [기부자-기부자예우]에서 확인하실 수 있습니다.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="pannel-header" role="tab" id="faqSeven">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-7" aria-expanded="false" aria-controls="faq-list-7">
									기부금 영수증은 받을 수 있습니까?
								</a>
							</div>
							<div id="faq-list-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqSeven" aria-expanded="false">
								<div class="panel-body">
									무기명 기부를 제외하고는 담당자의 기부금 납입 확인 후 홈페이지 상단의 [마이페이지-기부내역조회-영수증 출력]에서 출력하실 수 있으며, 홈페이지 출력이 어려우신 경우에는 전화 문의 주시면 우편, e-mail, 팩스 등 원하시는 방법으로 보내드립니다.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="pannel-header" role="tab" id="faqSeven">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-8" aria-expanded="false" aria-controls="faq-list-8">
									개인정보 변경 시 어떻게 해야 합니까?
								</a>
							</div>
							<div id="faq-list-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqSeven" aria-expanded="false">
								<div class="panel-body">
									홈페이지 상단의 [마이페이지-개인정보변경] 에서 변경 가능하시며, 주소 및 연락처와 같은 정보의 변경이 있으실 경우 수정을 해주셔야만 기부자예우의 혜택을 받으실 수 있습니다.
								</div>
							</div>
						</div>
					</div>-->
					<div class="accordion" id="accordionExample">
						<div class="card active">
							<div class="card-header" id="headingOne">
								<h5>
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="ture" aria-controls="collapseOne">
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
	<script>
		(function($) {
			$(document).on('click', function() {

				/*if ($(this).parent().hasClass('active')) {
					$(this).parent().removeClass('active');
				} else {
					$(this).parent().siblings('active').removeClass('active');
					$(this).parent().addClass('active');
				}*/
			});
		})(jQuery);
		
		/*(function($) {
			$(document).on('click', '.pannel-header a', function() {
				if ($(this).parent().hasClass('active')) {
					$(this).parent().removeClass('active');
				} else {
					$(this).parent().siblings('active').removeClass('active');
					$(this).parent().addClass('active');
				}
			});
		})(jQuery);*/
	</script>
</body>
</html>