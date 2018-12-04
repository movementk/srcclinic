<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/dochead.php'); ?>
<link rel="stylesheet" href="/pain/assets/css/sub.css">
<link rel="stylesheet" href="/pain/assets/css/introduce.css">  
</head>
<body class="introduce"> <!-- 폴더명 -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/header.php'); ?>
	
	<!-- page-link -->
	<nav class="page-link">
		<div class="container">
			<ul class="nav">
				<li>
					<a href="/pain/introduce/introduction.php">병원소개</a>
				</li>
				<li>
					<a href="/pain/introduce/doctors.php">의료/치료진</a>
				</li>
				<li>
					<a href="/pain/introduce/facility.php">시설안내</a>
				</li>
				<li>
					<a href="/pain/introduce/business_number.php">부서별 전화번호</a>
				</li>
				<li>
					<a href="/pain/introduce/location.php">오시는길</a>
				</li>
				<li class="active">
					<a href="/pain/introduce/certificate.php">증명서 발급</a>
				</li>
				<li>
					<a href="/pain/introduce/sum_list.php">비급여 안내</a>
				</li>
				<li>
					<a href="/pain/introduce/partners.php">협력기관</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<!-- Content -->
	<main id="content">
		<div class="container">
			<section class="certificate"><!-- 페이지명 -->
				<div class="section-header">
					<div class="page-title">
						<h2>제증명서 발급안내</h2>
						<!--p>제증명서 발급방법을 안내해 드립니다.</p-->
					</div>
				</div>
				<div class="section-content">
					<article class="outpatient">
						<div class="sub-title">
							<h3>증명서 발급 절차안내 (외래환자)</h3>
						</div>
						<ul class="step">
							<li>
								<div class="item">
									<p>STEP 01</p>
									<figure>
										<img src="/pain/assets/images/introduce/img_outpatient_list_01.jpg" alt="">
									</figure>
								</div>
								<h4>외래접수</h4>
							</li>
							<li>
								<div class="item">
									<p>STEP 02</p>
									<figure>
										<img src="/pain/assets/images/introduce/img_outpatient_list_02.jpg" alt="">
									</figure>
								</div>
								<h4>주치의 상담</h4>
							</li>
							<li>
								<div class="item">
									<p>STEP 03</p>
									<figure>
										<img src="/pain/assets/images/introduce/img_outpatient_list_03.jpg" alt="">
									</figure>
								</div>
								<h4>원무부 발급 신청</h4>
							</li>
							<li>
								<div class="item">
									<p>STEP 04</p>
									<figure>
										<img src="/pain/assets/images/introduce/img_outpatient_list_04.jpg" alt="">
									</figure>
								</div>
								<h4>수납 후 발행</h4>
							</li>
						</ul>
					</article>
					<article class="inpatient">
						<div class="sub-title">
							<h3>증명서 발급 절차안내 (입원환자)</h3>
						</div>
						<ul class="step">
							<li>
								<div class="item">
									<p>STEP 01</p>
									<figure>
										<img src="/pain/assets/images/introduce/img_outpatient_list_01.jpg" alt="">
									</figure>
								</div>
								<h4>병동 신청</h4>
							</li>
							<li>
								<div class="item">
									<p>STEP 02</p>
									<figure>
										<img src="/pain/assets/images/introduce/img_outpatient_list_03.jpg" alt="">
									</figure>
								</div>
								<h4>원무부 발급</h4>
							</li>
							<li>
								<div class="item">
									<p>STEP 03</p>
									<figure>
										<img src="/pain/assets/images/introduce/img_inpatient_list03.jpg" alt="">
									</figure>
								</div>
								<h4>
									원무부 수령<br>
									<i>(발급비용은 입원료에 포함)</i>
								</h4>
							</li>
						</ul>
					</article>
					<article class="document">
						<div class="sub-title">
							<h3>제증명 및 진료기록 사본발급 및 열람 신청시 필요 구비서류</h3>
							<p>보건복지가족부령 제 158호(의료법 제13조의2 기록열람등의요건)에 의거하여 아래의 경우에만 사본발급 및 열람이 가능함을 알려드립니다.</p>
						</div>
						<div class="table-wrap">
							<table class="table type-1">
								<colgroup>
									<col style="width : 25%">
									<col style="width : 25%">
									<col style="width : 25%">
									<col style="width : 25%">
								</colgroup>
								<thead>
									<tr>
										<th>신청자</th>
										<th>환자가 만 17세 이상</th>
										<th>환자가 만 14세 이상 ~ 만 17세 이상</th>
										<th>환자가 만 14세 미만</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>환자본인</td>
										<td>
											환자 본인의 신분증<br>
											(주민등록증, 운전면허증, 여권)
										</td>
										<td>학생증</td>
										<td>
											<ol class="circle-list">
												<li>
													<span>1</span>
													법정대리인 신분증
												</li>
												<li>
													<span>2</span>
													가족관계증명서, 등본 등 법정<br>
													대리인을 증명할 수 있는 서류
													<p class="attention">
														의료보험증은 인정안됨
													</p>
												</li>
											</ol>
										</td>
									</tr>
									<tr>
										<td>
											환자의 친족<br>
											배우자, 직계존속ㆍ비속,<br>
											배우자의 직계존속
										</td>
										<td>
											<ol class="circle-list">
												<li>
													<span>1</span>
													환자의 신분증 사본
												</li>
												<li>
													<span>2</span>
													신청자의 신분증 사본
												</li>
												<li>
													<span>3</span>
													가족관계증명서, 등본 등 친족<br>
													관계를 확인할 수 있는 서류
												</li>
												<li>
													<span>4</span>
													환자 자필서명 동의서
												</li>
											</ol>
										</td>
										<td>
											<ol class="circle-list">
												<li>
													<span>1</span>
													환자의 신분증 사본(학생증)
												</li>
												<li>
													<span>2</span>
													신청자의 신분증 사본
												</li>
												<li>
													<span>3</span>
													가족관계증명서, 등본 등 친족<br>
													관계를 확인할 수 있는 서류
												</li>
												<li>
													<span>4</span>
													환자 자필서명 동의서
												</li>
											</ol>
										</td>
										<td>
											<ol class="circle-list">
												<li>
													<span>1</span>
													법정대리인 신분증
												</li>
												<li>
													<span>2</span>
													가족관계증명서, 등본 등 법정<br>
													친족 관계을 확인할 수 있는 서류
													<p class="attention">
														의료보험증은 인정안됨
													</p>
												</li>
											</ol>
										</td>
									</tr>
									<tr>
										<td>제 3자(대리인)</td>
										<td>
											<ol class="circle-list">
												<li>
													<span>1</span>
													환자의 신분증 사본
												</li>
												<li>
													<span>2</span>
													신청자의 신분증 사본
												</li>
												<li>
													<span>3</span>
													환자 자필서명 동의서
												</li>
												<li>
													<span>4</span>
													환자 자필서명 위임장
												</li>
											</ol>
										</td>
										<td>
											<ol class="circle-list">
												<li>
													<span>1</span>
													환자의 신분증 사본(학생증)
												</li>
												<li>
													<span>2</span>
													신청자의 신분증 사본
												</li>
												<li>
													<span>3</span>
													환자 자필서명 동의서
												</li>
												<li>
													<span>4</span>
													환자 자필서명 위임장
												</li>
											</ol>
										</td>
										<td>
											<ol class="circle-list">
												<li>
													<span>1</span>
													법정대리인 신분증 사본
												</li>
												<li>
													<span>2</span>
													신청자의 신분증 사본
												</li>
												<li>
													<span>3</span>
													가족관계증명서, 주민등록등본등<br>
													친족관계를 확인할 수 있는 서류<br>
													(법정대리인 확인서류)
													<p class="attention">
														의료보험증은 인정안됨
													</p>
												</li>
												<li>
													<span>4</span>
													법정대리인 자필서명 동의서
												</li>
												<li>
													<span>5</span>
													법정대리인 자필서명 위임장
												</li>
											</ol>
										</td>
									</tr>
									<tr>
										<td>환자가 군복무중인 경우<br>(친족)</td>
										<td>
											<ol class="circle-list">
												<li>
													<span>1</span>
													신청인의 신분증
												</li>
												<li>
													<span>2</span>
													가족관계 증명서, 등본 등 <br>
													친족관계를 확인할 수 있는 서류
												</li>
												<li>
													<span>3</span>
													병적증명서 또는 복무확인서
												</li>
											</ol>
										</td>
										<td colspan="2">해당사항 없음 </td>
									</tr>
									<tr>
										<td>환자가 사망한 경우</td>
										<td colspan="3">
											<ol class="circle-list">
												<li>
													<span>1</span>
													신청자의 신분증
												</li>
												<li>
													<span>2</span>
													가족관계증명서, 등본 등 친족관계를 확인할 수 있는 서류
												</li>
												<li>
													<span>3</span>
													사망진단서 또는 제적등본
												</li>
											</ol>
										</td>
									</tr>
									<tr>
										<td>
											환자가 의식불명 또는 의식불명은<br>
											아니지만 중증의 질환·부상으로 자필서명을<br>
											할 수 없는 경우
										</td>
										<td colspan="3">
											<ol class="circle-list">
												<li>
													<span>1</span>
													신청자의 신분증
												</li>
												<li>
													<span>2</span>
													가족관계증명서, 주민등록등본 등 친족관계를 확인할 수 있는 서류
												</li>
												<li>
													<span>3</span>
													주민등록등본, 법원의 실종선고 결정문 사본 등 행방불명사실을 확인할 수 있는 서류
												</li>
											</ol>
										</td>
									</tr>
									<tr>
										<td>환자가 행방불명인 경우</td>
										<td colspan="3">
											<ol class="circle-list">
												<li>
													<span>1</span>
													신청자의 신분증
												</li>
												<li>
													<span>2</span>
													가족관계증명서, 주민등록등본 등 친족관계를 확인할 수 있는 서류
												</li>
												<li>
													<span>3</span>
													주민등록등본, 법원의 실종선고 결정문 사본 등 행방불명사실을 확인할 수 있는 서류
												</li>
											</ol>
										</td>
									</tr>
									<tr>
										<td>환자가 의사무능력자인 경우</td>
										<td colspan="3">
											<ol class="circle-list">
												<li>
													<span>1</span>
													신청자의 신분증
												</li>
												<li>
													<span>2</span>
													가족관계증명서, 주민등록등본 등 친족관계를 확인할 수 있는 서류
												</li>
												<li>
													<span>3</span>
													법원의 금치산 선고 결정문 사본 또는 의사무능력자임을 증명하는 정신과 전문의의 진단서
												</li>
											</ol>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="btn-area">
								<p>
									<a href="#" class="btn btn-md" role="button">위임장 다운로드</a>
									<a href="#" class="btn btn-md btn-blue" role="button">동의서 다운로드</a>
								</p>
							</div>
						</div>
					</article>
					<article class="expense">
						<div class="sub-title">
							<h3>제증명 종류 및 비용안내</h3>
						</div>
						<div class="table-wrap">
							<table class="table type-1">
								<colgroup>
									<col style="width : 33.33%">
									<col style="width : 33.33%">
									<col style="width : 33.33%">
								</colgroup>
								<thead>
									<tr>
										<th>종류</th>
										<th colspan="2">가격 (단위 : 원)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td rowspan="2">일반진단서</td>
										<td>한글</td>
										<td>20,000</td>
									</tr>
									<tr>
										<td>영문</td>
										<td>10,000</td>
									</tr>
									<tr>
										<td rowspan="2">의사소견서</td>
										<td>한글</td>
										<td>10,000</td>
									</tr>
									<tr>
										<td>영문</td>
										<td>20,000</td>
									</tr>
									<tr>
										<td>의무기록사본복사 (기본 5장까지)</td>
										<td colspan="2">2,000</td>
									</tr>
									<tr>
										<td>의무기록사본복사 (6매부터 추가 1장당)</td>
										<td colspan="2">200</td>
									</tr>
									<tr>
										<td>CD 복사</td>
										<td colspan="2">10,000</td>
									</tr>
									<tr>
										<td>입, 퇴원 확인서</td>
										<td colspan="2">3,000</td>
									</tr>
									<tr>
										<td>진단확인서</td>
										<td colspan="2">20,000</td>
									</tr>
								</tbody>
							</table>
						</div>
					</article>
				</div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/pain/inc/docfoot.php'); ?>
</body>
</html>