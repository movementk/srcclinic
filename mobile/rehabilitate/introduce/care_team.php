<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/rehabilitate/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/rehabilitate/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/rehabilitate/assets/css/introduce.css">
</head>
<body class="introduce">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/rehabilitate/inc/header.php'); ?>
    
    <!-- Content Start -->
    <main id="content">
        <div class="page-header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/rehabilitate/introduce/_lnb_list.php'); ?>
            <div class="page-intro">
                <h3>의료/치료진</h3>
            </div>
        </div>
        <section class="care-team">
            <div class="container">
                <div class="section-header">
                    <div class="tab-menu">
                        <ul>
                            <li><a href="/mobile/rehabilitate/introduce/doctors.php">의료진</a></li>
                            <li class="active"><a href="/mobile/rehabilitate/introduce/care_team.php">치료진</a></li>
                        </ul>
                    </div>
                </div>
                <div class="section-content">
                    
                </div>
            </div>
        </section>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/rehabilitate/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/rehabilitate/inc/docfoot.php'); ?>
</body>
</html>