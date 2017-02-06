<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="order-sucess">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li><a href="/ko/mypage/my_page.php">MYPAGE</a></li>
                    <li class="active">ORDER COMPLETED</li>
                </ol>
            </div>
            <div class="order-info">
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <div class="lnb">
                            <h2 class="visible-lg">MY PAGE</h2>
                            <ul>
                                <li class="active"><a href="/ko/mypage/order_list.php">ORDERS</a></li>
                                <li><a href="/ko/mypage/basket.php">CART</a></li>
                                <li><a href="#">PROFILE</a></li>
                                <li><a href="/ko/mypage/point.php">POINT</a></li>
                                <li><a href="/ko/mypage/point.php">COUPON</a></li>
                                <li><a href="/ko/mypage/qna_list.php">Q&amp;A</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <div class="page-header">
                            <h2>ORDER COMPLETED</h2>
                        </div>
                        <div class="sucess">
                            <h3>고객님의 주문이 완료 되었습니다.</h3>
                            <dl>
                                <dt>ORDER NUMBER</dt>
                                <dd>20170123-0000028</dd>
                                <dt>ORDER DATE</dt>
                                <dd>2017-01-23 15:15:02</dd>
                                <dt>현금영수증 발행</dt>
                                <dd>신청 (개인) 01011111111</dd>
                            </dl>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-gray btn-lg" role="button">쇼핑계속하기</a>
                            </p>
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