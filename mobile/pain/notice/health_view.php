<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/pain/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/pain/assets/css/notice.css">
</head>
<body class="notice">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/header.php'); ?>
    
    <!-- Content Start -->
    <main id="content">
        <div class="page-header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/notice/_lnb_list.php'); ?>
            <div class="page-intro">
                <h3>공지사항</h3>
                <p>SRC병원 부설의원의 공지사항을 알려드립니다.</p>
            </div>
        </div>
        <article class="common-board-view health-view">
            <div class="container">
                <div class="article-content">
                    <div class="default-board-view">
                        <div class="view-head">
                            <h5>[서울/SRC병원 부설의원] 국내 유일의 독일 도수의학 클리닉</h5>
                            <ul class="board-info">
                                <li class="date">2018.01.08</li>
                                <li class="count">16677</li>
                            </ul>
                        </div>
                        <div class="view-content">
                            게시판 상세내용
                        </div>
                        <dl class="attach">
                            <dt>첨부파일</dt>
                            <dd>
                                <a href="#">test.pdf</a>
                                <a href="#">test.pdf</a>
                                <a href="#">test.pdf</a>
                            </dd>
                        </dl>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-blue" role="button">목록보기</a>
                        </p>
                    </div>
                    <ul class="board-page-link">
                        <li class="prev">
                            <a href="#">
                                <dl>
                                    <dt>이전글</dt>
                                    <dd>멀티링크 문의드립니다.멀티링크 문의드립니다.</dd>
                                </dl>
                            </a>
                        </li>
                        <li class="next">
                            <a href="#">
                                <dl>
                                    <dt>다음글</dt>
                                    <dd>문의드립니다.</dd>
                                </dl>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/docfoot.php'); ?>
</body>
</html>