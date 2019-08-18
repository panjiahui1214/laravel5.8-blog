(function () {
    aside_display_or_not();
    aside_menu_active_or_not();

    /**
     * 根据点击按钮控制是否显示侧边栏
     */
    function aside_display_or_not() {
        var btn_nav =$('.nav_btn')[0];
        btn_nav.onclick = function () {
            var aside = $('.aside')[0];
            var content = $('.main_content_wrapper')[0];
            if (!aside.style.display) {
                aside.style.display = 'none';
                content.style.left = '0';
            }
            else {
                aside.style.display = '';
                content.style.left = '200px';
            }
        }
    }

    /**
     * 根据点击侧边栏菜单控制活动菜单的显示样式
     */
    function aside_menu_active_or_not() {
        var pathname = window.location.pathname;
        var index = pathname.lastIndexOf('/');
        var cur_url = pathname.substring(index + 1);
        $('.aside_menu_wrapper ul a').each(function () {
            var menu_url = $(this).attr('href');
            if (cur_url == menu_url) {
                $(this).children('li').addClass('active');
            }
        });
    }
})();