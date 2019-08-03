(function () {
    aside_display_or_not();
    aside_menu_active();

    /**
     * 根据点击按钮控制是否显示侧边栏
     */
    function aside_display_or_not () {
        var btn_nav = document.getElementById("btn-nav");
        btn_nav.onclick = function () {
            var aside = document.getElementsByTagName("aside")[0];
            var content = document.getElementById("content");
            if (!aside.style.display) {
                aside.style.display = "none";
                content.classList.remove("l-200px");
                content.classList.add("l-0");
            }
            else {
                aside.style.display = "";
                content.classList.remove("l-0");
                content.classList.add("l-200px");
            }
        }
    }
    //
    /**
     * 侧边栏高亮当前菜单
     */
    function aside_menu_active() {
        var aside_menu = document.getElementById("aside_menu");
        for (var i = 0; i < aside_menu.children.length; i ++) {
            aside_menu.children[i].onclick = function () {
                for (var j = 0; j < aside_menu.children.length; j ++) {
                    aside_menu.children[j].classList.remove("active");
                }
                this.classList.add("active");
            }
        }
    }
})();