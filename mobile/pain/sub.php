<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/pain/assets/css/sub.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/header.php'); ?>
    
    <!-- Content Start -->
    <main id="content">
        <!-- include 별도 -->
        <div class="page-header">
            <nav class="lnb-list">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="lnbMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        병원소개
                    </button>
                    <div class="dropdown-menu" aria-labelledby="lnbMenuButton">
                        <a class="dropdown-item" href="#">menu1</a>
                        <a class="dropdown-item" href="#">menu2</a>
                        <a class="dropdown-item" href="#">menu3</a>
                        <a class="dropdown-item" href="#">menu4</a>
                        <a class="dropdown-item" href="#">menu5</a>
                    </div>
                </div>
            </nav>
            <div class="page-intro">
                <h3>병원소개</h3>
                <p>SRC병원 부설의원을 소개합니다.</p>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="section-content">
                    <!-- tab-menu -->
                    <p class="ex-title">tab-menu</p>
                    <div class="tab-menu">
                        <ul>
                            <li><a href="#">menu1</a></li>
                            <li><a href="#">menu2</a></li>
                            <li class="active"><a href="#">menu3</a></li>
                            <li><a href="#">menu4</a></li>
                        </ul>
                    </div>

                    <br><br>
                    
                    <!-- sub-title -->
                    <p class="ex-title">sub-title</p>
                    <h4 class="sub-title">학력</h4>
                    
                    <br><br>
                    
                    <!-- square-title -->
                    <p class="ex-title">square-title</p>
                    <h4 class="square-title">SRC서울센터</h4>
                    
                    <br><br>
                    
                    <!-- dot-list -->
                    <p class="ex-title">dot-list</p>
                    <ul class="dot-list">
                        <li>연세대학교 의과대학 졸업</li>
                        <li>세브란스병원 재활의학과 전공의 수료</li>
                        <li>연세대학교 대학원 의학과 석사</li>
                        <li>스포츠의학 분과전분의</li>
                    </ul>
                    
                    <br><br>
                    
                    <!-- circle-list -->
                    <p class="ex-title">circle-list</p>
                    <ul class="circle-list">
                        <li>중추신경게 및 근골격계 장애를 가진 아동들의 대상으로 신체 재활치료를 실시하고 있습니다. <br>개별 아동의 신체기능 평가를 통하여 해당 아동의 문제점을 질적으로 연구 분석하고 그에 따라신경발달적 접근치료법을 사용하기 때문에 매우 효과적입니다</li>
                        <li>중추신경게 및 근골격계 장애를 가진 아동들의 대상으로 신체 재활치료를 실시하고 있습니다. <br>개별 아동의 신체기능 평가를 통하여 해당 아동의 문제점을 질적으로 연구 분석하고 그에 따라신경발달적 접근치료법을 사용하기 때문에 매우 효과적입니다</li>
                    </ul>
                    
                    <br><br>
                    
                    <!-- contact-list -->
                    <p class="ex-title">contact-list</p>
                    <ul class="contact-list">
                        <li>
                            <dl>
                                <dt>전화번호</dt>
                                <dd><a href="tel:">02-871-3651</a><span>직통</span></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>FAX</dt>
                                <dd>02-876-8234</dd>
                            </dl>
                        </li>
                    </ul>
                    
                    <br><br>
                    
                    <!-- default table -->
                    <p class="ex-title">basic table</p>
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <tbody>
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
                    
                    <br><br>
                    
                    <!-- table type-1 -->
                    <p class="ex-title">table type-1</p>
                    <div class="table-wrap type-1">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>치료병</th>
                                    <th>치료목적 및 효과</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>중추신경계<br>발달치료</td>
                                    <td>아동의 근육 긴장도를 정상화시키며, 원시반사를 억제, 자발적 반응을 촉진시키는 치료</td>
                                </tr>
                                <tr>
                                    <td>GAIT</td>
                                    <td>아동의 관절가동범위와 근육길이를 정상화시키고, 연습과 반복을 통해 보행 패턴을 교정하는 치료</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <br><br>
                    
                    <!-- search-form -->
                    <p class="ex-title">search-form</p>
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
                    
                    <br><br>
                    
                    <!-- board-list -->
                    <p class="ex-title">board-list</p>
                    <ul class="default-board-list">
                        <li>
                            <a href="#">
                                <h5>SRC병원 부설의원 국내 유일의 독일 도수의학 클리닉</h5>
                                <ul class="board-info">
                                    <li class="date">2018.01.08</li>
                                    <li class="count">16677</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <h5>SRC병원 부설의원 국내 유일의 독일 도수의학 클리닉</h5>
                                <ul class="board-info">
                                    <li class="date">2018.01.08</li>
                                    <li class="count">16677</li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                    
                    
                    <br><br>
                    
                    <!-- board-view -->
                    <p class="ex-title">board-view</p>
                    <article class="default-board-view">
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
                    </article>
                    
                    <br><br>
                    
                    <!-- board-page-link -->
                    <p class="ex-title">board-page-link</p>
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
                    
                    <br><br>
                    
                    <!-- paging -->
                    <p class="ex-title">paging</p>
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
        </section>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/pain/inc/docfoot.php'); ?>
</body>
</html>