<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>皮卡丘潘的博客后台管理系统</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body class="h-100">
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/admin') }}">
                    {{ config('app.name', '皮卡丘潘的博客') }}
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        @guest
                        @else
                            <div class="mt-1 mr-2">
                                {{ Auth::user()->name }}
                            </div>
                            <div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    注销
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="position-absolute middle-positon">
        <div class="float-left h-100 sidebar-w bg-white shadow-sm">
            我是侧边栏
        </div>
        <div class="h-100 ml-236p bg-white shadow-sm">
            我是主要内容
        </div>
        <div class="clearfix"></div>
    </div>

    @include('layouts.footer')
</body>
</html>