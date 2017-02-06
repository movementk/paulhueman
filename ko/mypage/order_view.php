<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="order-view">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li><a href="/ko/mypage/my_page.php">MYPAGE</a></li>
                    <li class="active">ORDER DETAIL VIEW</li>
                </ol>
            </div>
            <div class="order-details">
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
                            <h2>ORDER DETAIL VIEW</h2>
                        </div>
                        <article class="my-order">
                            <h3>ORDER</h3>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>ORDER NUMBER</th>
                                            <td>20170123-0000015</td>
                                        </tr>
                                        <tr>
                                            <th>ORDER DATE</th>
                                            <td>2017-01-23 12:53:46</td>
                                        </tr>
                                        <tr>
                                            <th>ORDERER</th>
                                            <td>홍길동</td>
                                        </tr>
                                        <tr>
                                            <th>STATUS</th>
                                            <td class="status">
                                                입금전
                                                <p class="cancel">
                                                    <button type="button" class="btn btn-cancel">주문취소</button>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        <article class="my-shipping">
                            <h3>SHIPPING</h3>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>NAME</th>
                                            <td>홍길동</td>
                                        </tr>
                                        <tr>
                                            <th>ADDRESS</th>
                                            <td>서울특별시 강남구 강남대로 48길 14 (도곡동) 양재동성당</td>
                                        </tr>
                                        <tr>
                                            <th>CONTACT</th>
                                            <td>
                                                <ul class="phone-list">
                                                    <li>02-111-1111</li>
                                                    <li>010-1111-1111</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>MESSAGE</th>
                                            <td>부재시 경비실에 맡겨주세요</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        <article class="my-items">
                            <h3>ITEMS</h3>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th class="i-item">ITEM</th>
                                            <th class="i-status">STATUS</th>
                                            <th class="i-tracking">TRACKING</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <ul class="item-info">
                                                    <li>
                                                        <p>
                                                            <img src="/ko/assets/images/mypage/product_item_img01.gif" class="img-responsive" alt="구매상품 이미지">
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h4>PHF-5089D COL.4-1</h4>
                                                        <ul>
                                                            <li>
                                                                <dl class="c-dl">
                                                                    <dt>COLOR</dt>
                                                                    <dd>WHITE</dd>
                                                                </dl>
                                                            </li>
                                                            <li><p class="amount">225,000</p></li>
                                                            <li>
                                                                <dl class="qty">
                                                                    <dt>Qty</dt>
                                                                    <dd>1</dd>
                                                                </dl>
                                                            </li>
                                                        </ul>
                                                        <p class="deposit">미입금</p>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="i-status">미입금</td>
                                            <td class="i-tracking">
                                                <a href="#">배송조회</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="i-item">
                                                <ul class="item-info">
                                                    <li>
                                                        <p>
                                                            <img src="/ko/assets/images/mypage/product_item_img01.gif" class="img-responsive" alt="구매상품 이미지">
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h4>PHF-5089D COL.4-1</h4>
                                                        <ul>
                                                            <li>
                                                                <dl class="c-dl">
                                                                    <dt>COLOR</dt>
                                                                    <dd>WHITE</dd>
                                                                </dl>
                                                            </li>
                                                            <li><p class="amount">225,000</p></li>
                                                            <li>
                                                                <dl class="qty">
                                                                    <dt>Qty</dt>
                                                                    <dd>1</dd>
                                                                </dl>
                                                            </li>
                                                        </ul>
                                                        <p class="deposit">미입금</p>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="i-status">미입금</td>
                                            <td class="i-tracking">
                                                <a href="#">배송조회</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <dl class="total">
                                    <dt>Sub Total</dt>
                                    <dd>7,603,000</dd>
                                    <dt>Shipping</dt>
                                    <dd>0</dd>
                                    <dt>Total</dt>
                                    <dd>7,603,000</dd>
                                </dl>
                            </div>
                        </article>
                        <article class="my-payment">
                            <h3>PAYMENT</h3>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th class="pay-txt">총 주문금액</th>
                                            <td>7,603,000</td>
                                        </tr>
                                        <tr>
                                            <th class="pay-txt">무통장 입금</th>
                                            <td>
                                                7,603,000 (미결제)
                                                <ul class="bank-info">
                                                    <li>
                                                        <dl>
                                                            <dt>입금자</dt>
                                                            <dd>바바</dd>
                                                        </dl>
                                                    </li>
                                                    <li>
                                                        <dl>
                                                            <dt>계좌번호</dt>
                                                            <dd>기업은행 487-030578-01-038 ((주)뮤지크)</dd>
                                                        </dl>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        <div class="btn-area">
                            <p>
                                <button type="button" class="btn btn-white btn-lg" role="button">LIST</button>
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