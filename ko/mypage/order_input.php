<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="order-input">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li><a href="/ko/mypage/my_page.php">MYPAGE</a></li>
                    <li class="active">ORDER SHEET</li>
                </ol>
            </div>
            <div class="order-items">
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
                            <h2>ORDER SHEET</h2>
                        </div>
                        <form action="#">
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
                                                <div class="price">204,000</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <dl class="total">
                                    <dt>Sub Total</dt>
                                    <dd>7,603,000</dd>
                                    <dt>Shipping</dt>
                                    <dd>0</dd>
                                    <dt>Total</dt>
                                    <dd>7,603,000</dd>
                                </dl>
                            </div>
                            <div class="input-write">
                                <div class="orderer">
                                    <h3>ORDERER</h3>
                                    <div class="order-input">
                                        <div class="table-wrap">
                                            <table class="table table-bordered">
                                                <colgroup>
                                                    <col>
                                                    <col>
                                                </colgroup>
                                                <tbody>
                                                    <tr>
                                                        <th><label for="u-name">이름</label></th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="u-name" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="addr"><label for="addr1-1">주소</label></th>
                                                        <td class="addr">
                                                            <div class="form-group">
                                                                <input type="text" id="addr1-1" class="form-control">
                                                                <p class="btn-addr">
                                                                    <button type="button" class="btn">우편번호</button>
                                                                </p>
                                                                <label class="sr-only" for="addr1-2">상세주소</label>
                                                                <input type="text" id="addr1-2" class="form-control">
                                                                <label class="sr-only" for="addr1-3">상세주소-2</label>
                                                                <input type="text" id="addr1-3" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="u-tel">전화번호</label></th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="u-tel" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="u-phone1-1">휴대폰</label></th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="u-phone1-1" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="email"><label for="u-mail">이메일</label></th>
                                                        <td class="email">
                                                            <div class="form-group">
                                                                <input type="email" id="u-mail" class="form-control">
                                                                <p>제품구입시 E-mail을 통해 주문처리과정을 보내드립니다.</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="shipping">
                                    <h3>SHIPPING</h3>
                                    <div class="new-addr">
                                        <label>배송지 정보가 주문자 정보와 동일합니까?<input type="radio"></label>
                                        <label>새로운 배송지<input type="radio"></label>
                                        <p class="btn-addr-2">
                                            <button type="button" class="btn btn-default">배송 주소록</button>
                                        </p>
                                    </div>
                                    <div class="shpping-input">
                                        <div class="table-wrap">
                                            <table class="table table-bordered">
                                                <colgroup>
                                                    <col>
                                                    <col>
                                                </colgroup>
                                                <tbody>
                                                    <tr>
                                                        <th><label for="u-name2-1">이름</label></th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="u-name2-1" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="addr"><label for="addr2-1">주소</label></th>
                                                        <td class="addr">
                                                            <div class="form-group">
                                                                <input type="text" id="addr2-1" class="form-control">
                                                                <p class="btn-addr">
                                                                    <button type="button" class="btn">우편번호</button>
                                                                </p>
                                                                <label class="sr-only" for="addr2-2">상세주소</label>
                                                                <input type="text" id="addr2-2" class="form-control">
                                                                <label class="sr-only" for="addr2-3">상세주소-2</label>
                                                                <input type="text" id="addr2-3" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="u-tel2-1">전화번호</label></th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="u-tel2-1" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label for="u-phone2-1">휴대폰</label></th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="u-phone2-1" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="message"><label for="u-message">메세지</label></th>
                                                        <td class="message">
                                                            <div class="form-group">
                                                                <input type="email" id="u-message" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="pay">
                                    <h3>PATMENT</h3>
                                    <div class="pay-input">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-4 col-md-3">
                                                <h5>TOTAL COST</h5>
                                            </div>
                                            <div class="col-xs-6 col-sm-8 col-md-9">
                                                <p class="total-pay">480,000</p>
                                            </div>
                                            <div class="col-xs-6 col-sm-4 col-md-3">
                                                <h5>TOTAL SALE COST</h5>
                                            </div>
                                            <div class="col-xs-6 col-sm-8 col-md-9">
                                                <p class="sale-pay">0</p>
                                            </div>

                                            <div class="col-xs-6 col-sm-4 col-md-3">
                                                <h5>COUPON</h5>
                                            </div>
                                            <div class="col-xs-6 col-sm-8 col-md-9">
                                                <p class="btn-coupon">
                                                    <button type="button" class="btn">쿠폰적용</button>
                                                </p>
                                            </div>

                                            <div class="col-xs-12 col-sm-4 col-md-3">
                                                <h5 class="pay-title">TYPE</h5>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-9">
                                                <ul class="pay-select">
                                                    <li><label><input type="radio">카드 결제</label></li>
                                                    <li><label><input type="radio">에스크로(실시간 계좌이체)</label></li>
                                                    <li><label><input type="radio">휴대폰 결제</label></li>
                                                    <li><label><input type="radio">무통장 입금</label></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <button type="button" class="btn btn-lg btn-gray">주문하기</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/docfoot.php'); ?>
</body>
</html>