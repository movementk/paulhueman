(function($) {
    
    // #gnb 대메뉴
    $(document).on('mouseenter focus', '#gnb > .container > ul > li', function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });
    $(document).on('mouseleave', '#gnb > .container > ul > li', function() {
        $(this).removeClass('active');
    });
    
    // 탑메뉴 관련
    $(document).on('mouseenter', '#header .top-nav .dropdown', function() {
        $(this).find('[data-toggle="dropdown"]').dropdown('toggle');
    });
    $(document).on('mouseleave', '#header .top-nav .dropdown', function() {
        $(this).find('[data-toggle="dropdown"]').dropdown('toggle');
    });
    
    // #aside 관련
    $(document).on('click', '#aside .aside-body .nav > ul > li > a', function(e) {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
        e.preventDefault();
    });
    $(document).on('click', '#header .btn-aside-open', function() {
        $('html, body').toggleClass('aside-open');
        $('#aside .btn-aside-close').focus();
    });
    $(document).on('click', '#aside .btn-aside-close', function() {
        $('html, body').toggleClass('aside-open');
        $('#header .btn-aside-open').focus();
    });
    $(document).on('click', '#aside', function(e) {
        if ($(e.target).attr('id') == 'aside') {
            $('#aside .btn-aside-close').trigger('click');
        }
    });
    
    // 모바일 검색버튼
    $(document).on('click', '#header .logo-nav .btn-search', function(e) {
        $('#header').toggleClass('search-open');
    });
    $(document).on('click', '#header .search-global .search-form .close-btn .btn', function(e) {
        $('#header').removeClass('search-open');
        e.preventDefault();
    });
    
    // 장바구니 버튼
    $(document).on('click', '#header .btn-cart', function() {
        $('html, body').toggleClass('cart-open');
        $('#aside-cart .btn-cart-close').focus();
    });
    $(document).on('click', '#aside-cart .btn-cart-close', function() {
        $('html, body').toggleClass('cart-open');
        $('#header .btn-cart').focus();
    });
    $(document).on('click', '#aside-cart', function(e) {
        if ($(e.target).attr('id') == 'aside-cart') {
            $('#aside-cart .btn-cart-close').trigger('click');
        }
    });
    $(document).on('click', '.product-details .cart-btn', function() {
        $('html, body').toggleClass('cart-open');
        $('#aside-cart .btn-cart-close').focus();
    });
    
    
    // 위시리스트 버튼
    $(document).on('click', '.product-details .wish-btn', function() {
        $('html, body').toggleClass('wish-open');
        $('#aside-wish .btn-wish-close').focus();
    });
    $(document).on('click', '#aside-wish .btn-wish-close', function() {
        $('html, body').toggleClass('wish-open');
        $('#header .btn-wish').focus();
    });
    $(document).on('click', '#aside-wish', function(e) {
        if ($(e.target).attr('id') == 'aside-wish') {
            $('#aside-wish .btn-wish-close').trigger('click');
        }
    });
    
})(jQuery);