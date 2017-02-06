<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="modify">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li>MYPAGE</li>
                    <li class="active">EDIT AN ACCOUNT</li>
                </ol>
            </div>
            <div class="page-header">
                <h2>EDIT AN ACCOUNT</h2>
            </div>
            <div class="modify-form">
                <h3>회원정보 수정</h3>
                <form action="#">
                    <div class="input-form">
                        <div class="row">
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="u-id">아이디</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="text" id="u-id" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="u-pw">비밀번호</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="password" id="u-pw" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="pw-confirm">비밀번호 확인</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="password" id="pw-confirm" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="u-name">이름</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="text" id="u-name" class="form-control u-name">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="u-email">이메일</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="email" id="u-email" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="t-num">전화번호</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="text" id="t-num" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="phone">휴대폰</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="text" id="phone" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="addr-1">주소</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <div class="addr">
                                    <input type="text" id="addr-1" class="form-control addr-1">
                                    <p class="btn-addr">
                                        <button type="button" class="btn">우편번호</button>
                                    </p>
                                    <input type="text" id="addr-2" class="form-control">
                                    <input type="text" id="addr-3" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <p class="defines">이메일 수신동의</p>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <div class="form-group">
                                    <label class="check"><input type="checkbox">이메일 수신을 동의합니다</label>
                                </div>
                            </div>
                            
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <p class="defines">SMS 수신동의</p>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <div class="form-group">
                                    <label class="check"><input type="checkbox">SMS수신을 동의합니다</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="delete-link">
                        <a href="#" class="delete">DELETE AN ACCOUNT</a>
                    </p>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-white" role="button">취소</a>
                            <button type="submit" class="btn btn-sm btn-gray">확인</button>
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