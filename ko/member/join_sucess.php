<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/member.css" rel="stylesheet">
</head>
<body class="sub member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="join-sucess">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li class="active">LOIN</li>
                </ol>
            </div>
            <div class="sucess">
                <h2>환영합니다<br>폴휴먼 회원가입이 완료되었습니다.</h2>
                <dl>
                    <dt>ID</dt>
                    <dd>honggildong</dd>
                    <dt>NAME</dt>
                    <dd>홍길동</dd>
                    <dt>E-MAIL</dt>
                    <dd>hong@naver.com</dd>
                </dl>
                <div class="btn-area">
                    <p>
                        <a href="/ko/member/login.php" class="btn btn-lg btn-gray" role="button">로그인 하기</a>
                    </p>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/docfoot.php'); ?>
</body>
</html>