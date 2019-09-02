<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                        {{--<a href="{{ route('admin.user') }}"><li>会员管理</li></a>--}}
                        <a href="{{ route('admin.article') }}"><li>文章管理</li></a>
                        <a href="{{ route('admin.tag') }}"><li>标签管理</li></a>
                        {{--<a href="{{ route('admin.system') }}"><li>系统管理</li></a>--}}
                    </ul>
                </div>
            </div>
            <div class="main_content_wrapper">
                @section('content_wrapper')
                    <div class="main_content_menu">
                        <span>@yield('title')</span>
                    </div>
                    <div class="main_content shadow-lg">
                        @yield('content')
                    </div>
                @show
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>