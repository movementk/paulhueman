<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="point">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li><a href="/ko/mypage/my_page.php">MYPAGE</a></li>
                    <li class="active">POINT</li>
                </ol>
            </div>
            <div class="my-point">
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <div class="lnb">
                            <h2 class="visible-lg">MY PAGE</h2>
                            <ul>
                                <li><a href="/ko/mypage/order_list.php">ORDERS</a></li>
                                <li><a href="/ko/mypage/basket.php">CART</a></li>
                                <li><a href="#">PROFILE</a></li>
                                <li class="active"><a href="/ko/mypage/point.php">POINT</a></li>
                                <li><a href="/ko/mypage/point.php">COUPON</a></li>
                                <li><a href="/ko/mypage/qna_list.php">Q&amp;A</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <div class="page-header">
                            <h2>POINT</h2>
                        </div>
                        <div class="point-list">
                            <ul>
                                <li>
                                    <dl>
                                        <dt>NOW YOU HAVE</dt>
                                        <dd><a href="#">0 POINT</a></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>AVAILABLE POINTS</dt>
                                        <dd><a href="#">0 POINT</a></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>USED POINTS</dt>
                                        <dd><a href="#">0 POINT</a></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>UNAVAILABLE POINTS</dt>
                                        <dd><a href="#">0 POINT</a></dd>
                                    </dl>
                                </li>
                            </ul>
                            <p class="attention">적립금은 상품 배송완료 후 7이 이후부터 사용 가능합니다.</p>
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