<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/dochead.php'); ?>
<link rel="stylesheet" href="/rehabilitate/assets/css/sub.css">
<link rel="stylesheet" href="/rehabilitate/assets/css/introduce.css">  
</head>
<body class="introduce"> <!-- 폴더명 -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/header.php'); ?>
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/rehabilitate/inc/sub_quick.php"); ?>
	
	<!-- page-link -->
	<nav class="page-link">
		<div class="container">
			<ul class="nav">
				<li>
					<a href="/rehabilitate/introduce/introduction.php">병원소개</a>
				</li>
				<li class="active">
					<a href="/rehabilitate/introduce/doctors.php">의료/치료진</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/facility.php">시설안내</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/business_number.php">부서별 전화번호</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/location.php">오시는길</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/certificate.php">증명서 발급</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/sum_list.php">비급여 안내</a>
				</li>
				<li>
					<a href="/rehabilitate/introduce/partners.php">협력기관</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<!-- Content -->
	<main id="content">
		<div class="container">
			<section class="doctors">
				<div class="section-header">
					<div class="page-title">
						<h2>의료/치료진</h2>
                        <p>SRC병원 부설의원의 의료/치료진을 소개합니다.</p>
					</div>
					<nav class="page-tab">
						<ul>
							<li class="on"><a href="/rehabilitate/introduce/doctors.php">의료진</a></li>
							<li><a href="/rehabilitate/introduce/care_team.php">치료진</a></li>
						</ul>
					</nav>
				</div>
				<div class="section-content">
                    <article class="doctors-information">
                        <div class="article-header">
                            <small>재활의학과 전문의</small>
                            <h3>이영상 원장</h3>
                        </div>
                        <div class="article-content">
                            <h4>학력</h4>
                            <ul>
                                <li>연세대학교 의과대학 졸업</li>
                                <li>세브란스병원 재활의학과 전공의 수료</li>
                                <li>연세대학교 대학원 의학과 석사</li>
                                <li>스포츠의학 분과전분의</li>
                            </ul>
                            <h4>경력</h4>
                            <ul>
                                <li>대한 재활의학회 정회원</li>
                                <li>대한 스포츠의학회 정회원</li>
                                <li>한국기능도수치료학회 자문의사</li>
                                <li>전 국립소록도병원 재활의학과 과장</li>
                                <li>전 국립재활원 재활의학과 과장</li>
                                <li>전 솔병원 재활의학과 과장</li>
                                <li>전 한국여자프로골프협회 (KLPGA) 의무지원</li>
                                <li>전 대한빙상경기연맹 의무지원</li>
                            </ul>
                            <h4>학술활동</h4>
                            <ul>
                                <li>독일 근골격의학회 (die Deutsche Gesellschaft für Muskuloskeletale Medizin) 도수의학 (Manuelle Medizin/Chirotherapie) 분과 전문의</li>
                                <li>독일 근골격의학회 도수치료 강의 (Manipulationskurs)</li>
                                <li>독일 근골격의학회 마스터코스 주요부위 흉곽상구 및 림프계의 도수의학적 치료 (Obere Thoraxapertur und manualmedizinische Behandlung des Lymphsystems)</li>
                                <li>독일 근골격의학회 마스터코스 신경역동학과 요통에서 시행하는 움직임 조절 검사 (Movement Control for Lower Back Pain and Neurodynamics)</li>
                                <li>독일 근골격의학회 마스터코스 의학적 운동치료 (Medizinische Trainingstherapie)</li>
                                <li>독일 오스테오파시의학회 (die Deutsche Gesellschaft für Osteopathische Medizin) 오스테오파시 의학 교육과정</li>
                                <li>독일 하이델베르크 의과대학 정형외과병원 (Orthopädische Universitätsklinik Heidelberg) 연수</li>
                                <li>독일 바트 퓌씽 정형외과병원(Orthopädie-Zentrum Bad Füssing) 연수</li>
                                <li>독일 상트 고아 로렐라이 병원 (Loreley-Klinik St. Goar) 연수</li>
                            </ul>
                        </div>
                    </article>
				</div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
</body>
</html>