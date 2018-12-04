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
                <h3>SRC 뉴스레터</h3>
                <p>SRC병원 부설의원의 src뉴스레터를 알려드립니다.</p>
            </div>
        </div>
        <article class="news-letter">
            <div class="container">
                <div class="article-content">
                    <ul class="row">
                        <li class="col-6">
                            <a href="#">
                                <figure>
                                    <img src="/mobile/pain/assets/images/notice/img_news_letter01.jpg" class="img-fluid" alt="">
                                    <figcaption>SRC News Letter.36호 (2018년 3월 발행)</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-6">
                            <a href="#">
                                <figure>
                                    <img src="/mobile/pain/assets/images/notice/img_news_letter02.jpg" class="img-fluid" alt="">
                                    <figcaption>SRC News Letter.36호 (2018년 3월 발행)</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-6">
                            <a href="#">
                                <figure>
                                    <img src="/mobile/pain/assets/images/notice/img_news_letter03.jpg" class="img-fluid" alt="">
                                    <figcaption>SRC News Letter.36호 (2018년 3월 발행)</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-6">
                            <a href="#">
                                <figure>
                                    <img src="/mobile/pain/assets/images/notice/img_news_letter04.jpg" class="img-fluid" alt="">
                                    <figcaption>SRC News Letter.36호 (2018년 3월 발행)</figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="first">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left">
                                        <span class="sr-only">처음페이지</span>
                                    </i>
                                </a>
                            </li>
                            <li class="prev">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left">
                                        <span class="sr-only">이전페이지</span>
                                    </i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li class="next">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right">
                                        <span class="sr-only">다음페이지</span>
                                    </i>
                                </a>
                            </li>
                            <li class="last">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right">
                                        <span class="sr-only">마지막페이지</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </article>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/docfoot.php'); ?>
</body>
</html>