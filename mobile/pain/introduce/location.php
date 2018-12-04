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
                <h3>오시는 길</h3>
                <p>SRC병원 부설의원으로 오시는길을 알려드립니다.</p>
            </div>
        </div>
        <article class="location">
            <div class="container">
                <div class="article-header">
                    <div class="tab-menu">
                        <ul>
                            <li class="active"><a href="/mobile/pain/introduce/location.php">오시는 길</a></li>
                            <li><a href="#">빠른 길찾기</a></li>
                        </ul>
                    </div>
                </div>
                <div class="article-content">
                    <h4 class="sub-title">SRC병원 부설의원</h4>
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>주소안내</th>
                                    <td>
                                        <address>서울특별시 관악구 보라매로 44 SRC서울센터 (08709)</address>
                                    </td>
                                </tr>
                                <tr>
                                    <th>전화번호</th>
                                    <td><a href="tel:028713636">02-871-3636</a></td>
                                </tr>
                                <tr>
                                    <th>FAX</th>
                                    <td>02-876-3202</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="maps">
                        <figure>
                            <img src="/mobile/pain/assets/images/introduce/img_maps.jpg" class="img-fluid" alt="지도">
                        </figure>
                    </div>
                </div>
            </div>
        </article>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/docfoot.php'); ?>
</body>
</html>