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
<body class="h-100">
    <header class=" h-50px bg-primary">
        <div class="w-200px text-center big-font text-white h-lh-50px float-left">皮卡丘潘的博客</div>
        <button id="btn-nav" class="btn-info-no-border h-50px p-0 w-50px navbar-light cursor-pointer">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
    <aside class="w-200px position-fixed t-50px l-0 h-100 shadow-lg">
        <ul class="list-unstyled text-center mt-3">
            <li>admin</li>
            <li>超级管理员</li>
        </ul>
        <div id="aside_menu" class="list-group text-center bg-white">
            <a href="#" class="list-group-item active">会员管理</a>
            <a href="#" class="list-group-item">文章管理</a>
            <a href="#" class="list-group-item">系统管理</a>
        </div>
    </aside>
    <div id="content" class="position-fixed h-100 w-100 l-200px">
        <div class="m-l-30px h-lh-30px">
            <span class="p-l-15px border-3-left text-primary">会员管理</span>
        </div>
        <div class="m-l-30px h-100 w-100 bg-white shadow-lg border-all">
            <div>
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>昵称</th>
                        <th>手机号</th>
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

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>