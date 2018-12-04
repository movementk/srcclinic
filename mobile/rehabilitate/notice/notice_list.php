<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/rehabilitate/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/rehabilitate/assets/css/sub.css">
<link rel="stylesheet" href="/mobile/rehabilitate/assets/css/notice.css">
</head>
<body class="notice">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/rehabilitate/inc/header.php'); ?>
    
    <!-- Content Start -->
    <main id="content">
        <div class="page-header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/rehabilitate/notice/_lnb_list.php'); ?>
            <div class="page-intro">
                <h3>공지사항</h3>
                <p>SRC병원 부설의원의 공지사항을 알려드립니다.</p>
            </div>
        </div>
        <article class="common-board-list notice-list">
            <div class="container">
                <div class="article-header">
                    <div class="search-form">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>제목</option>
                                </select>
                                <input type="text" id="search" class="form-control">
                                <label for="search" class="sr-only">검색영역</label>
                                <button type="submit" class="btn btn-search">
                                    <i class="icon-search">
                                        <span class="sr-only">검색버튼</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="article-content">
                    <ul class="default-board-list">
                        <li>
                            <a href="/mobile/rehabilitate/notice/notice_view.php">
                                <h5>SRC병원 부설의원 국내 유일의 독일 도수의학 클리닉</h5>
                                <ul class="board-info">
                                    <li class="date">2018.01.08</li>
                                    <li class="count">16677</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="/mobile/rehabilitate/notice/notice_view.php">
                                <h5>SRC병원 부설의원 국내 유일의 독일 도수의학 클리닉</h5>
                                <ul class="board-info">
                                    <li class="date">2018.01.08</li>
                                    <li class="count">16677</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="/mobile/rehabilitate/notice/notice_view.php">
                                <h5>SRC병원 부설의원 국내 유일의 독일 도수의학 클리닉</h5>
                                <ul class="board-info">
                                    <li class="date">2018.01.08</li>
                                    <li class="count">16677</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="/mobile/rehabilitate/notice/notice_view.php">
                                <h5>SRC병원 부설의원 국내 유일의 독일 도수의학 클리닉</h5>
                                <ul class="board-info">
                                    <li class="date">2018.01.08</li>
                                    <li class="count">16677</li>
                                </ul>
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
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/rehabilitate/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/rehabilitate/inc/docfoot.php'); ?>
</body>
</html>