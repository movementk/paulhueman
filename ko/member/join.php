<?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/dochead.php'); ?>
<link href="/ko/assets/css/sub.css" rel="stylesheet">
<link href="/ko/assets/css/member.css" rel="stylesheet">
</head>
<body class="sub member">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ko/inc/aside.php'); ?>
    <main id="content" class="join">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/ko/"><i class="icon-home"></i></a></li>
                    <li class="active">JOIN</li>
                </ol>
            </div>
            <div class="page-header">
                <h2>JOIN</h2>
                <p>회원가입하시면 폴휴먼의 다양한 혜택을 누리실 수 있습니다.</p>
            </div>
            <div class="join-form">
                <h3>
                    회원정보 입력
                    <small>필수 입력사항입니다</small>
                </h3>
                <form action="#"> 
                    <div class="input-write">
                        <div class="row">
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="u-id" class="ootc">아이디</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="text" id="u-id" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="u-pw" class="ootc">비밀번호</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="password" id="u-pw" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="pw-confirm" class="ootc">비밀번호 확인</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="password" id="pw-confirm" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="u-name" class="ootc">이름</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="text" id="u-name" class="form-control u-name">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="u-email" class="ootc">이메일</label>
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
                                <label for="phone" class="ootc">휴대폰</label>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-lg-10">
                                <input type="text" id="phone" class="form-control">
                            </div>
                            <div class="col-xs-4 col-sm-3 col-lg-2">
                                <label for="addr-1" class="ootc">주소</label>
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
                    <div class="terms service-terms">
                        <h4>이용약관</h4>
                        <div class="terms-info">
                            이 약관은  제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)
                            를 이용함에 있어 사이버 몰과 이용자의 권리?의무 및 책임사항
                            을 규정함을 목적으로 합니다.
                        </div>
                        <div class="form-group">
                            <label class="check"><input type="checkbox">이용약관에 동의합니다.</label>
                        </div>
                    </div>
                    <div class="terms privacy-terms">
                        <h4>개인정보취급방침</h4>
                        <div class="terms-info">
                            이 약관은  제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)
                            를 이용함에 있어 사이버 몰과 이용자의 권리?의무 및 책임사항
                            을 규정함을 목적으로 합니다.
                        </div>
                        <div class="form-group">
                            <label class="check"><input type="checkbox">이용약관에 동의합니다.</label>
                        </div>
                    </div>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-lg btn-gray">회원 가입</button>
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