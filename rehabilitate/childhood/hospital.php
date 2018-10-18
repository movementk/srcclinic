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
				<li class="active">
					<a href="/rehabilitate/childhood/hospital.php">입원안내</a>
				</li>
				<li>
					<a href="/rehabilitate/childhood/treatment.php">치료/평가항목</a>
				</li>
				<li>
					<a href="/rehabilitate/childhood/faq.php">자주하시는 질문</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<!-- Content -->
	<main id="content">
		<section class="hospital"><!-- 페이지명 -->
			<div class="container">
				<div class="section-header">
					<div class="page-title">
						<h2>입원안내</h2>
					</div>
				</div>
				<div class="section-content">
					<div class="sub-title">
						<h3>필수 안내사항</h3>
					</div>
					<div class="table-wrap">
						<table class="table type-1">
							<colgroup>
								<col style="width : 25%">
								<col style="width : 75%">
							</colgroup>
							<thead>
								<tr>
									<th>구분</th>
									<th>상세내용</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>선정기준</td>
									<td>
										<ol class="circle-list">
											<li><span>1</span>기존 치료중인 소아는 출석률을 반영하여 낮병동 연장 여부 결정</li>
											<li><span>2</span>소아별 처방이나 외래 소아 변동에 따라 탄력적 조정</li>
										</ol>
									</td>
								</tr>
								<tr>
									<td>의견소견서</td>
									<td>
										<ol class="circle-list">
											<li><span>1</span>대기자수에 따라서 입원일이 변동될 수 있으며 확정시 사전 개별통보</li>
											<li><span>2</span>운영기간 : 주 5일 / 1일 6시간 기준</li>
											<li>
												<span>3</span>운영시간 : 매일 오전 09:00 ~ 15:30 ( 점심시간 1시간 포함, 개인별 입퇴원 시간 체크)
											</li>
											<li><span>4</span>검사항목 : 운동평가: 관절가동범위 및 도수근력 평가 작업평가: 시지각평가, 손기능평가,<br> 덴버발달평가, 일상생활평가, 베일리 검사, 섭식평가</li>
											<li><span>5</span>준비물품 : 입원 및 낮병동 시 필요한 개인물품</li>
											<li><span>6</span>퇴원안내 : 퇴원예정 최소 1주일 전 간호사실에 신청</li>
										</ol>
									</td>
								</tr>
								<tr>
									<td>치료관련</td>
									<td>
										<ol class="circle-list">
											<li><span>1</span>모든 치료는 1:1 독립적으로 시행되며, 전담치료사가 진행합니다.</li>
											<li><span>2</span>아동별 발달 상태에 맞는 프로세스를 통해 집중재활치료가 진행됩니다.</li>
											<li>
												<span>3</span>치료사를 임의로 변경하거나 치료중 특정(다른) 치료사를 지정하실 수 없습니다.
											</li>
										</ol>
									</td>
								</tr>
								<tr>
									<td>결석관리</td>
									<td>
										<ol class="circle-list">
											<li><span>1</span>정기외진, 타 병원 입원을 제외한 기타 개인사유로 인한 미출은 출석률에 모두 포함<br>
											(외진 및 입원 영수증 확인 시 출석률 반영제외)</li>
										</ol>
									</td>
								</tr>
								<tr>
									<td>식사시간</td>
									<td>
										<ol class="circle-list">
											<li><span>1</span>
												소아식(다진반찬) 제공<br>
												점심 : 낮 12시 ∼ 13시<br>
												<i>보호자 식사 신청 (간호사 데스크 문의)</i>
											</li>
										</ol>
									</td>
								</tr>
								<tr>
									<td>입원실 배정</td>
									<td>
										<ol class="circle-list">
											<li><span>1</span>연령에 따라 입원실이 구분되어 배정됩니다.</li>
											<li><span>2</span>아동 1명 - 보호자 1인 상주를 원칙으로 하며, 타인의 입실은 제한됩니다.</li>
											<li>
												<span>3</span>불편사항 또는 문의사항은 재활치료실( 02-871-3651 ) 통해 문의하실 수 있습니다.  
											</li>
										</ol>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
</body>
</html>