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
    
})(jQuery);