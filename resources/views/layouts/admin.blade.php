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
    <header class=" h-50px bg-primary">
        <div class="w-200px text-center big-font text-white h-lh-50px float-left">皮卡丘潘的博客</div>
        <button class="bg-info h-50px p-0 w-50px border-0 navbar-light">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
    <aside class="w-200px bg-white position-fixed t-50px l-0 h-100 shadow-lg">
        <div class="list-group text-center">
            <a href="" class="list-group-item active">会员管理</a>
            <a href="" class="list-group-item">文章管理</a>
            <a href="" class="list-group-item">系统管理</a>
        </div>
    </aside>
    <div class="position-fixed h-100 w-100 l-200px">
        <div class="m-l-30px h-lh-30px">
            <span class="p-l-15px border-3-left">会员管理</span>
        </div>
        <div class="m-l-30px h-100 w-100 bg-white shadow-lg border-all"></div>
    </div>
</body>
</html>