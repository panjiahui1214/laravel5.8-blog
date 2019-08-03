(function () {
    aside_display_or_not();

    /**
     * 根据点击按钮控制是否显示侧边栏
     */
    function aside_display_or_not () {
        var btn_nav = document.getElementsByClassName("nav_btn")[0];
        btn_nav.onclick = function () {
            var aside = document.getElementsByClassName("aside")[0];
            var content = document.getElementsByClassName("main_content_wrapper")[0];
            if (!aside.style.display) {
                aside.style.display = "none";
                content.style.left = "0";
            }
            else {
                aside.style.display = "";
                content.style.left = "200px";
            }
        }
    }
})();