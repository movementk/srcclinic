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
					
				</div>
			</div>
		</section>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/rehabilitate/inc/docfoot.php'); ?>
</body>
</html>