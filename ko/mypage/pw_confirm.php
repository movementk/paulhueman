<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="mypage pw-confirm">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li class="active">LOGIN</li>
                </ol>
            </div>
            <div class="page-header">
                <h2>CONFIRM PASSWORD</h2>
                <p>
                    비밀번호를 한번더 입력해주세요. <br>
                    회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다
                </p>
            </div>
            <div class="pw-confirm-form">
                <form action="#">
                    <dl class="user-id">
                        <dt>ID</dt>
                        <dd>TEST</dd>
                    </dl>
                    <div class="form-group">
                        <label for="u-pw" class="sr-only">비밀번호확인</label>
                        <input id="u-pw" class="form-control" type="password" placeholder="비밀번호 확인">
                    </div>
                    <div class="btn-area">
                        <p>
                            <button class="btn btn-lg btn-gray">확인</button>
                        </p>
                    </div>
                </form>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/docfoot.php'); ?>
</body>
</html>