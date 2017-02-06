<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="basket">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li><a href="/ko/mypage/my_page.php">MYPAGE</a></li>
                    <li class="active">SHOPPING CART</li>
                </ol>
            </div>
            <div class="basket-info">
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <div class="lnb">
                            <h2 class="visible-lg">MY PAGE</h2>
                            <ul>
                                <li><a href="/ko/mypage/order_list.php">ORDERS</a></li>
                                <li class="active"><a href="/ko/mypage/basket.php">CART</a></li>
                                <li><a href="#">PROFILE</a></li>
                                <li><a href="/ko/mypage/point.php">POINT</a></li>
                                <li><a href="/ko/mypage/point.php">COUPON</a></li>
                                <li><a href="/ko/mypage/qna_list.php">Q&amp;A</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <div class="page-header">
                            <h2>SHOPPING CART</h2>
                        </div>
                        <div class="my-basket">
                            <h3>ITEMS</h3>
                            <ul class="basket-list">
                                <li class="basket-item">
                                    <div class="figure">
                                        <p>
                                            <img src="/ko/assets/images/mypage/product_item_img01.gif" class="img-responsive" alt="구매상품 이미지">
                                        </p>
                                    </div>
                                    <div class="details">
                                        <div class="details-content">
                                            <div class="p-info">
                                                <h4>PHF-5089D Col.4-1</h4>
                                                <dl>
                                                    <dt>COLOR</dt>
                                                    <dd>WHITE</dd>
                                                </dl>
                                            </div>
                                            <div class="quantity">
                                                <p>1EA</p>
                                            </div>
                                            <div class="edit">
                                                <a href="#">EDIT</a>
                                                <a href="#">DELETE</a>
                                            </div>
                                            <div class="price">204,000</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="basket-item">
                                    <div class="figure">
                                        <p>
                                            <img src="/ko/assets/images/mypage/product_item_img01.gif" class="img-responsive" alt="구매상품 이미지">
                                        </p>
                                    </div>
                                    <div class="details">
                                        <div class="details-content">
                                            <div class="p-info">
                                                <h4>PHF-5089D Col.4-1</h4>
                                                <dl>
                                                    <dt>COLOR</dt>
                                                    <dd>WHITE</dd>
                                                </dl>
                                            </div>
                                            <div class="quantity">
                                                <p>1EA</p>
                                            </div>
                                            <div class="edit">
                                                <a href="#">EDIT</a>
                                                <a href="#">DELETE</a>
                                            </div>
                                            <div class="price">204,000</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="delete-all">DELETE ALL</a>
                            <dl class="total">
                                <dt>Sub Total</dt>
                                <dd>7,603,000</dd>
                                <dt>Shipping</dt>
                                <dd>0</dd>
                                <dt>Total</dt>
                                <dd>7,603,000</dd>
                            </dl>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="button" class="btn btn-lg btn-gray">주문하기</button>
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