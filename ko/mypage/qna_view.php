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
            <div class="qna-view">
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
                        <div class="view">
                            <h4 class="title">상품에 대하여 문의드립니다</h4>
                            <div class="view-content">
                                안녕하세요. 문의드립니다<br>
                                ABCD-231 썬글라스 제고에 대해서 문의드리고 교환하고 싶은데 빠른 답변 부탁드립니다.
                            </div>
                            <div class="write-info">
                                <ul>
                                    <li>
                                        <dl>
                                            <dt>등록일</dt>
                                            <dd>2016-12-14</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>작성자</dt>
                                            <dd>paul</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>조회수</dt>
                                            <dd>3</dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>
                            <div class="file-info">
                                <dl>
                                    <dt>첨부파일</dt>
                                    <dd><a href="#">abcd.hwp</a></dd>
                                </dl>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-xs btn-gray" role="button">글쓰기</a>
                                    <a href="#" class="btn btn-xs btn-white btn-none" role="button">수정하기</a>
                                    <a href="#" class="btn btn-xs btn-white btn-none" role="button">삭제하기</a>
                                    <a href="#" class="btn btn-xs btn-color" role="button">목록보기</a>
                                </p>
                            </div>
                            <div class="reply">
                                <div class="reply-form">
                                    <form action="#">
                                        <div class="reply-write">
                                            <div class="form-group">
                                                <label for="u-reply" class="sr-only">댓글달기</label>
                                                <input type="text" id="u-reply" class="form-control" placeholder="댓글을 입력하세요.">
                                            </div>
                                            <p class="reply-btn">
                                                <button type="button" class="btn btn-identify">확인</button>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                                <ul class="reply-list">
                                    <li>
                                        <h5 class="u-name">Paul hueman <i class="date">2016.10.10</i></h5>
                                        <ul class="modify-btn">
                                            <li><a href="#">답글</a></li>
                                            <li><a href="#">수정</a></li>
                                            <li><a href="#">삭제</a></li>
                                        </ul>
                                        <div class="reply-content">
                                            댓글을 입력하세요. 댓글을 입력하세요. 댓글을 입력하세요. 
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <h5 class="u-name">Paul hueman <i class="date">2016.10.10</i></h5>
                                        <ul class="modify-btn">
                                            <li><a href="#">답글</a></li>
                                            <li><a href="#">수정</a></li>
                                            <li><a href="#">삭제</a></li>
                                        </ul>
                                        <div class="reply-content">
                                            댓글을 입력하세요. 댓글을 입력하세요. 댓글을 입력하세요. 
                                        </div>
                                    </li>
                                    <li>
                                        <h5 class="u-name">Paul hueman <i class="date">2016.10.10</i></h5>
                                        <ul class="modify-btn">
                                            <li><a href="#">답글</a></li>
                                            <li><a href="#">수정</a></li>
                                            <li><a href="#">삭제</a></li>
                                        </ul>
                                        <div class="reply-content">
                                            댓글을 입력하세요. 댓글을 입력하세요. 댓글을 입력하세요. 
                                        </div>
                                    </li>
                                    <li>
                                        <h5 class="u-name">Paul hueman <i class="date">2016.10.10</i></h5>
                                        <ul class="modify-btn">
                                            <li><a href="#">답글</a></li>
                                            <li><a href="#">수정</a></li>
                                            <li><a href="#">삭제</a></li>
                                        </ul>
                                        <div class="reply-content">
                                            댓글을 입력하세요. 댓글을 입력하세요. 댓글을 입력하세요. 
                                        </div>
                                    </li>
                                </ul>
                            </div>
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