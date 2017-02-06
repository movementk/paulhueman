<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/shop.css" rel="stylesheet">
</head>
<body class="sub shop">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li><a href="#">SHOP</a></li>
                    <li class="active">SUNGLASSES</li>
                </ol>
            </div>
            <div class="g-view glasses-view">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-2">
                        <div class="lnb">
                            <h2 class="visible-lg">SHOP</h2>
                            <ul>
                                <li><a href="/ko/shop/sunglasses_list.php">SUNGLASSES</a></li>
                                <li class="active"><a href="/ko/shop/glasses_list.php">GLASSES</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-lg-8">
                        <p class="product-img product-front">
                            <img src="/ko/assets/images/shop/details_view_img01.jpg" class="img-responsive" alt="정면사진">
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-lg-2 product-details-wrap">
                        <div class="product-details">
                            <h3 class="product-name">PHS-1089D Col.5</h3>
                            <p class="amount">255,000 won</p>
                            <div class="form-group">
                                <a href="#" class="btn count-up" role="button">+</a>
                                <input type="text" id="product-count" class="form-control" value="1">
                                <a href="#" class="btn count-down" role="button">-</a>
                                <label for="product-count" class="sr-only">상품개수</label>
                                <p class="cart">
                                    <button type="button" class="cart-btn">
                                        <span class="sr-only">장바구니담기</span>
                                    </button>
                                </p>
                            </div>
                            <ul class="summary-list">
                                <li>
                                    <dl class="inline-dl">
                                        <dt>LENS WIDTH</dt>
                                        <dd>48</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="inline-dl">
                                        <dt>NOSE BRIDGE</dt>
                                        <dd>22</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="inline-dl">
                                        <dt>GRAME SIDE</dt>
                                        <dd>143</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="inline-dl">
                                        <dt>MATERIAL</dt>
                                        <dd>TR</dd>
                                    </dl>
                                </li>
                            </ul>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-now btn-gray" role="button">BUY NOW</a>
                                </p>
                            </div>
                            <div class="product-color-list">
                                <h4>COLORS</h4>
                                <ul class="row">
                                    <li class="col-xs-3 col-sm-6">
                                        <a href="#">
                                            <img src="/ko/assets/images/shop/product_color_img01.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-3 col-sm-6">
                                        <a href="#">
                                            <img src="/ko/assets/images/shop/product_color_img02.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-3 col-sm-6">
                                        <a href="#">
                                            <img src="/ko/assets/images/shop/product_color_img03.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-3 col-sm-6">
                                        <a href="#">
                                            <img src="/ko/assets/images/shop/product_color_img04.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-lg-8 col-lg-offset-2">
                        <p class="product-img product-aspect">
                            <img src="/ko/assets/images/shop/details_view_img02.jpg" class="img-responsive" alt="측면사진">
                        </p>
                        <p class="product-img product-side">
                            <img src="/ko/assets/images/shop/details_view_img03.jpg" class="img-responsive" alt="옆면사진">
                        </p>
                    </div>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/docfoot.php'); ?>
</body>
</html>