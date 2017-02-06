<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="qna">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li><a href="/ko/mypage/my_page.php">MYPAGE</a></li>
                    <li class="active">Q&amp;A</li>
                </ol>
            </div>
            <div class="qna-list">
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <div class="lnb">
                            <h2 class="visible-lg">MY PAGE</h2>
                            <ul>
                                <li><a href="/ko/mypage/order_list.php">ORDERS</a></li>
                                <li><a href="/ko/mypage/basket.php">CART</a></li>
                                <li><a href="#">PROFILE</a></li>
                                <li><a href="/ko/mypage/point.php">POINT</a></li>
                                <li><a href="/ko/mypage/point.php">COUPON</a></li>
                                <li class="active"><a href="/ko/mypage/qna_list.php">Q&amp;A</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <div class="page-header mypage-header">
                            <h2>Q&amp;A</h2>
                            <p>
                                폴휴먼과 관련된 궁금한 사항은 무엇이든 물어보세요<br>
                                고객님의 소중한 의견을 남겨주시면 접수후 빠른 대응을 하도록 하겠습니다.
                            </p>
                        </div>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>번호</th>
                                        <th>제목</th>
                                        <th>이름</th>
                                        <th>날짜</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="count">1</td>
                                        <td class="subject"><a href="#">안녕하세요.</a></td>
                                        <td>123</td>
                                        <td class="date">2016-10-06</td>
                                    </tr>
                                    <tr>
                                        <td class="count">2</td>
                                        <td class="subject"><a href="#">이벤트 관련 문의드립니다.</a></td>
                                        <td>paul</td>
                                        <td class="date">2016-10-06</td>
                                    </tr>
                                    <tr>
                                        <td class="count">3</td>
                                        <td class="subject"><a href="#">안녕하세요!@^^</a></td>
                                        <td>paul</td>
                                        <td class="date">2016-10-06</td>
                                    </tr>
                                    <tr>
                                        <td class="count">4</td>
                                        <td class="subject"><a href="#">연락부탁드립니다.</a></td>
                                        <td>paul</td>
                                        <td class="date">2016-10-06</td>
                                    </tr>
                                    <tr>
                                        <td class="count">5</td>
                                        <td class="subject"><a href="#">멤버쉽 서비스에 대하여 문의드립니다.</a></td>
                                        <td>paul</td>
                                        <td class="date">2016-10-06</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="/ko/mypage/qna_write.php" class="btn btn-xs btn-gray" role="button">글쓰기</a>
                            </p>
                        </div>
                        <nav aria-label="Page navigation" class="paging">
                            <ul class="pagination">
                               <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="icon-angle-double-left"></i></span>
                                    </a>
                                </li>
                                <li class="icon-left">
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="icon-angle-left"></i></span>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="icon-right">
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="icon-angle-right"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="icon-angle-double-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/docfoot.php'); ?>
</body>
</html>