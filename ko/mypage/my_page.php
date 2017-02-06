<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="my-page">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li class="active">MYPAGE</li>
                </ol>
            </div>
            <div class="page-header">
                <h2>MY PAGE</h2>
            </div>
            <article class="mypage-info">
                <div class="article-header">
                    <dl>
                        <dt>홍길동 님</dt>
                        <dd>
                            적립포인트 
                            <ul>
                                <li>0 POINT</li>
                                <li>1 COUPON</li>
                            </ul>
                        </dd>
                    </dl>
                </div>
                <div class="article-content">
                    <ul class="my-list">
                        <li>
                            <a href="/ko/mypage/order_list.php">ORDER LIST</a>
                        </li>
                        <li>
                            <a href="/ko/mypage/modify.php">EDIT AN ACCOUNT</a>
                        </li>
                        <li>
                            <a href="/ko/mypage/point.php">POINT</a>
                        </li>
                        <li>
                            <a href="/ko/mypage/qna_list.php">1:1 INQUIRY</a>
                        </li>
                    </ul>
                </div>
            </article>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/docfoot.php'); ?>
</body>
</html>