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
            <div class="qna-write">
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
                        <div class="write-form">
                            <form action="#">
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <colgroup>
                                            <col>
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <th><label for="s-select">상담유형</label></th>
                                                <td>
                                                    <select id="s-select" class="form-control">
                                                        <option>선택하세요</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="subject">제목</label></th>
                                                <td><input type="text" id="subject" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th><label for="file">첨부파일</label></th>
                                                <td class="file">
                                                    <input type="file" id="file" class="form-control">
                                                    <label for="file">
                                                        <i class="icon-upload">
                                                            <span class="sr-only">파일올리기</span>
                                                        </i>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-content">내용<br><i>(0자/2000자)</i></label></th>
                                                <td><textarea id="u-content"></textarea></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <button type="submit" class="btn btn-sm btn-gray">등록</button>
                                        <a href="#" class="btn btn-sm btn-white" role="button">취소</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/docfoot.php'); ?>
</body>
</html>