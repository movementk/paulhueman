<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/member.css" rel="stylesheet">
</head>
<body class="sub member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="login">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li class="active">LOGIN</li>
                </ol>
            </div>
            <div class="page-header">
                <h2>LOGIN</h2>
                <p>로그인하시면 폴 휴먼의 다양한 혜택을 누리실 수 있습니다.</p>
            </div>
            <div class="login-form">
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" id="u-id" placeholder="아이디">
                        <label for="u-id" class="sr-only">아이디</label>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="u-pw" placeholder="비밀번호">
                        <label for="u-pw" class="sr-only">비밀번호</label>
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-gray btn-sm">로그인</button>
                            <a href="/ko/member/join_input.php" class="btn btn-gray btn-sm" role="button">회원가입</a>
                        </p>
                    </div>
                </form>
                <ul class="dot-list">
                    <li>
                        <dl>
                            <dt>아이디를 잊어버리셨나요?</dt>
                            <dd><a href="/ko/member/id_find.php">아이디 찾기</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>비밀번호를 잊어버리셨나요?</dt>
                            <dd><a href="/ko/member/pw_find.php">비밀번호 찾기</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="non-member-form">
                <h3>비회원 (주문 및 주문조회)</h3>
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" id="u-name" placeholder="이름">
                        <label for="u-name" class="sr-only">이름</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="order-num" placeholder="주문번호">
                        <label for="order-num" class="sr-only">주문번호</label>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="non-pw" placeholder="비밀번호">
                        <label for="non-pw" class="sr-only">비밀번호</label>
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-lg btn-gray">확인하기</button>
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