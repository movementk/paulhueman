<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/member.css" rel="stylesheet">
</head>
<body class="sub member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="find id-find">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li class="active">LOGIN</li>
                </ol>
            </div>
            <div class="page-header">
                <h2>FIND YOUR ID</h2>
                <p>
                    가입하신 방법에 따라 아이디 찾기가 가능합니다.<br>
                    법인사업자 회원 또는 외국인 회원의 경우 법인명과 법인번호 또는 이름과 등록번호를 입력해 주세요
                </p>
            </div>
            <div class="find-form">
                <form action="#">
                    <div class="form-group">
                        <label class="radio-area"><input type="radio">휴대폰번호</label>
                        <label class="radio-area"><input type="radio">이메일</label>
                        <label class="radio-area"><input type="radio">아이핀(i-PIN) 본인인증</label>
                    </div>
                    <div class="form-group">
                        <label for="u-id" class="sr-only">아이디</label>
                        <input type="text" class="form-control" id="u-id" placeholder="아이디">
                    </div>
                    <div class="form-group">
                        <label for="u-pw" class="sr-only">비밀번호</label>
                        <input type="password" class="form-control" id="u-pw" placeholder="비밀번호">
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-success">확인</button>
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