<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>皮卡丘潘的博客后台管理系统</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>

    <div class="wrapper">
        <div class="nav">
            <div class="nav_icon">皮卡丘潘的博客</div>
            <button class="nav_btn navbar-light">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="content">
            <div class="aside shadow-lg">
                <div class="aside_admin_wrapper">
                    <ul class="list-unstyled">
                        <li>admin</li>
                        <li>超级管理员</li>
                    </ul>
                </div>
                <div class="aside_menu_wrapper">
                    <ul class="list-unstyled">
                        <a href=""><li class="active">会员管理</li></a>
                        <a href=""><li>文章管理</li></a>
                        <a href=""><li>系统管理</li></a>
                    </ul>
                </div>
            </div>
            <div class="main_content_wrapper">
                <div class="main_content_menu">
                    <span>会员管理</span>
                </div>
                <div class="main_content shadow-lg">
                    <div class="table_wrapper">
                        <table class="table table-hover">
                            <tr class="th">
                                <th>ID</th>
                                <th>用户名</th>
                                <th>手机号码</th>
                                </tr>
                            <tr>
                                <td>1</td>
                                <td>panjiahui</td>
                                <td>13012345678</td>
                                </tr>
                            <tr>
                                <td>2</td>
                                <td>panjiahui2</td>
                                <td>13012345679</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>