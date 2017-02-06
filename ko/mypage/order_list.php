<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="order-list">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li><a href="/ko/mypage/my_page.php">MYPAGE</a></li>
                    <li class="active">ORDER LIST</li>
                </ol>
            </div>
            <div class="order-history">
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
                            <h2>ORDER LIST</h2>
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
                                        <th>DATE</th>
                                        <th>ITEMS</th>
                                        <th>COST</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="date">2016-10-06</td>
                                        <td class="items">
                                            <a href="#">
                                                <p class="order-num">[20170123-0000015]</p>
                                                VERVE_Track2.B<br class="visible-xs">(총 2개 품목)
                                            </a>
                                        </td>
                                        <td class="amount">2,000,000</td>
                                        <td>입금전</td>
                                    </tr>
                                    <tr>
                                        <td class="date">2016-10-06</td>
                                        <td class="items">
                                            <a href="#">
                                                <p class="order-num">[20170123-0000015]</p>
                                                VERVE_Track2.B<br class="visible-xs">(총 2개 품목)
                                            </a>
                                        </td>
                                        <td class="amount">2,000,000</td>
                                        <td>입금전</td>
                                    </tr>
                                    <tr>
                                        <td class="date">2016-10-06</td>
                                        <td class="items">
                                            <a href="#">
                                                <p class="order-num">[20170123-0000015]</p>
                                                VERVE_Track2.B<br class="visible-xs">(총 2개 품목)
                                            </a>
                                        </td>
                                        <td class="amount">2,000,000</td>
                                        <td>입금전</td>
                                    </tr>
                                    <tr>
                                        <td class="date">2016-10-06</td>
                                        <td class="items">
                                            <a href="#">
                                                <p class="order-num">[20170123-0000015]</p>
                                                VERVE_Track2.B<br class="visible-xs">(총 2개 품목)
                                            </a>
                                        </td>
                                        <td class="amount">2,000,000</td>
                                        <td>입금전</td>
                                    </tr>
                                    <tr>
                                        <td class="date">2016-10-06</td>
                                        <td class="items">
                                            <a href="#">
                                                <p class="order-num">[20170123-0000015]</p>
                                                VERVE_Track2.B<br class="visible-xs">(총 2개 품목)
                                            </a>
                                        </td>
                                        <td class="amount">2,000,000</td>
                                        <td>입금전</td>
                                    </tr>
                                </tbody>
                            </table>
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