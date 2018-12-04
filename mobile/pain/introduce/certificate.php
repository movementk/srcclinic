<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/pain/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/pain/assets/css/introduce.css">
</head>
<body class="introduce">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/header.php'); ?>
    
    <!-- Content Start -->
    <main id="content">
        <div class="page-header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/introduce/_lnb_list.php'); ?>
            <div class="page-intro">
                <h3>제증명서 발급안내</h3>
                <p>제증명서 발급방법을 안내해 드립니다.</p>
            </div>
        </div>
        <section class="certificate">
            <div class="container">
                <div class="section-content">
                    <article class="outpatient">
                        <h4 class="sub-title">증명서 발급 절차안내 (외래환자)</h4>
                        <ol class="row">
                            <li class="col-6">
                                <div class="icon-img">
                                    <h5>STEP 01</h5>
                                    <img src="/mobile/pain/assets/images/introduce/icon_outpatient01.jpg" alt="">
                                </div>
                                <p>외래 접수</p>
                            </li>
                            <li class="col-6">
                                <div class="icon-img">
                                    <h5>STEP 02</h5>
                                    <img src="/mobile/pain/assets/images/introduce/icon_outpatient02.jpg" alt="">
                                </div>
                                <p>주치의 상담</p>
                            </li>
                            <li class="col-6">
                                <div class="icon-img">
                                    <h5>STEP 03</h5>
                                    <img src="/mobile/pain/assets/images/introduce/icon_outpatient03.jpg" alt="">
                                </div>
                                <p>원무부 발급 신청</p>
                            </li>
                            <li class="col-6">
                                <div class="icon-img">
                                    <h5>STEP 04</h5>
                                    <img src="/mobile/pain/assets/images/introduce/icon_outpatient04.jpg" alt="">
                                </div>
                                <p>수납 후 발행</p>
                            </li>
                        </ol>
                    </article>
                    <article class="inpatient">
                        <h4 class="sub-title">증명서 발급 절차안내 (입원환자)</h4>
                        <ol class="row">
                            <li class="col-4">
                                <div class="icon-img">
                                    <h5>STEP 01</h5>
                                    <img src="/mobile/pain/assets/images/introduce/icon_outpatient01.jpg" alt="">
                                </div>
                                <div class="details">
                                    <p>병동신청</p>
                                </div>
                            </li>
                            <li class="col-4">
                                <div class="icon-img">
                                    <h5>STEP 02</h5>
                                    <img src="/mobile/pain/assets/images/introduce/icon_outpatient03.jpg" alt="">
                                </div>
                                <div class="details">
                                    <p>원무부 발급</p>
                                </div>
                            </li>
                            <li class="col-4">
                                <div class="icon-img">
                                    <h5>STEP 03</h5>
                                    <img src="/mobile/pain/assets/images/introduce/icon_outpatient05.jpg" alt="">
                                </div>
                                <div class="details">
                                    <p>원무부 수령</p>
                                    <small>발급비용은 입원료에 포함</small>
                                </div>
                            </li>
                        </ol>
                    </article>
                    <article class="required-documents">
                        <h4 class="sub-title">제증명 및 진료기록 사본발급 및 열람 신청시 필요 구비서류</h4>
                        <p class="summary">
                            보건복지가족부령 제 158호(의료법 제13조의2 기록열람등의 요건)에 의거하여 아래의 경우에만 사본발급 및 열람이 가능함을 알려드립니다.
                        </p>
                        <div class="table-responsive">
                            <table class="table">
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
												<li>법정대리인 신분증</li>
												<li>
													가족관계증명서, 등본 등 법정 대리인을 증명할 수 있는 서류
													<p class="attention">의료보험증은 인정안됨</p>
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
												<li>환자의 신분증 사본</li>
												<li>신청자의 신분증 사본</li>
												<li>가족관계증명서, 등본 등 친족 관계를 확인할 수 있는 서류</li>
												<li>환자 자필서명 동의서</li>
											</ol>
										</td>
										<td>
											<ol class="circle-list">
												<li>환자의 신분증 사본(학생증)</li>
												<li>신청자의 신분증 사본</li>
												<li>가족관계증명서, 등본 등 친족 관계를 확인할 수 있는 서류</li>
												<li>환자 자필서명 동의서</li>
											</ol>
										</td>
										<td>
											<ol class="circle-list">
												<li>법정대리인 신분증</li>
												<li>
												    가족관계증명서, 등본 등 법정 친족 관계을 확인할 수 있는 서류
													<p class="attention">의료보험증은 인정안됨</p>
												</li>
											</ol>
										</td>
									</tr>
									<tr>
										<td>제 3자(대리인)</td>
										<td>
											<ol class="circle-list">
												<li>환자의 신분증 사본</li>
												<li>신청자의 신분증 사본</li>
												<li>환자 자필서명 동의서</li>
												<li>환자 자필서명 위임장</li>
											</ol>
										</td>
										<td>
											<ol class="circle-list">
												<li>환자의 신분증 사본(학생증)</li>
												<li>신청자의 신분증 사본</li>
												<li>환자 자필서명 동의서</li>
												<li>환자 자필서명 위임장</li>
											</ol>
										</td>
										<td>
											<ol class="circle-list">
												<li>법정대리인 신분증 사본</li>
												<li>신청자의 신분증 사본</li>
												<li>
													가족관계증명서, 주민등록등본등 친족관계를 확인할 수 있는 서류 (법정대리인 확인서류)
													<p class="attention">의료보험증은 인정안됨</p>
												</li>
												<li>법정대리인 자필서명 동의서</li>
												<li>법정대리인 자필서명 위임장</li>
											</ol>
										</td>
									</tr>
									<tr>
										<td>환자가 군복무중인 경우<br>(친족)</td>
										<td>
											<ol class="circle-list">
												<li>신청인의 신분증</li>
												<li>가족관계 증명서, 등본 등 친족관계를 확인할 수 있는 서류</li>
												<li>병적증명서 또는 복무확인서</li>
											</ol>
										</td>
										<td colspan="2">해당사항 없음</td>
									</tr>
									<tr>
										<td>환자가 사망한 경우</td>
										<td colspan="3">
											<ol class="circle-list">
												<li>신청자의 신분증</li>
												<li>가족관계증명서, 등본 등 친족관계를 확인할 수 있는 서류</li>
												<li>사망진단서 또는 제적등본</li>
											</ol>
										</td>
									</tr>
									<tr>
										<td>
											환자가 의식불명 또는 의식불명은 아니지만 중증의 질환·부상으로 자필서명을 할 수 없는 경우
										</td>
										<td colspan="3">
											<ol class="circle-list">
												<li>신청자의 신분증</li>
												<li>가족관계증명서, 주민등록등본 등 친족관계를 확인할 수 있는 서류</li>
												<li>주민등록등본, 법원의 실종선고 결정문 사본 등 행방불명사실을 확인할 수 있는 서류</li>
											</ol>
										</td>
									</tr>
									<tr>
										<td>환자가 행방불명인 경우</td>
										<td colspan="3">
											<ol class="circle-list">
												<li>신청자의 신분증</li>
												<li>가족관계증명서, 주민등록등본 등 친족관계를 확인할 수 있는 서류</li>
												<li>주민등록등본, 법원의 실종선고 결정문 사본 등 행방불명사실을 확인할 수 있는 서류</li>
											</ol>
										</td>
									</tr>
									<tr>
										<td>환자가 의사무능력자인 경우</td>
										<td colspan="3">
											<ol class="circle-list">
												<li>신청자의 신분증</li>
												<li>가족관계증명서, 주민등록등본 등 친족관계를 확인할 수 있는 서류</li>
												<li>법원의 금치산 선고 결정문 사본 또는 의사무능력자임을 증명하는 정신과 전문의의 진단서</li>
											</ol>
										</td>
									</tr>
								</tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-md btn-gray" role="button">위임장 다운로드</a>
                                <a href="#" class="btn btn-md btn-green" role="button">동의서 다운로드</a>
                            </p>
                        </div>
                    </article>
                    <article class="expense-guide">
                        <h4 class="sub-title">제증명 종류 및 비용안내</h4>
                        <div class="table-wrap type-1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>종류</th>
										<th colspan="2">가격 (단위 : 원)</th>
                                    </tr>
                                </thead>
                                <tbody>
									<tr class="bg-gr">
										<td rowspan="2" class="td-title">일반진단서</td>
										<td>한글</td>
										<td>20,000</td>
									</tr>
									<tr class="bg-gr">
										<td>영문</td>
										<td>10,000</td>
									</tr>
									<tr>
										<td rowspan="2" class="td-title">의사소견서</td>
										<td>한글</td>
										<td>10,000</td>
									</tr>
									<tr>
										<td>영문</td>
										<td>20,000</td>
									</tr>
									<tr class="bg-gr">
										<td class="td-title">의무기록 사본복사 (기본 5장까지)</td>
										<td colspan="2">2,000</td>
									</tr>
									<tr>
										<td class="td-title">의무기록 사본복사 (6매부터 추가 1장당)</td>
										<td colspan="2">200</td>
									</tr>
									<tr class="bg-gr">
										<td class="td-title">CD 복사</td>
										<td colspan="2">10,000</td>
									</tr>
									<tr>
										<td class="td-title">입, 퇴원 확인서</td>
										<td colspan="2">3,000</td>
									</tr>
									<tr class="bg-gr">
										<td class="td-title">진단확인서</td>
										<td colspan="2">20,000</td>
									</tr>
								</tbody>
                            </table>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/docfoot.php'); ?>
</body>
</html>