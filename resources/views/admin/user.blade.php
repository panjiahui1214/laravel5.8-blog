@extends('admin.layout')

@section('title', '会员管理')

@section('content')
    <div class="table_wrapper">
        <table class="table table-hover">
            <tr class="th">
                <th>ID</th>
                <th>用户名</th>
                <th>电子邮箱</th>
                <th>手机号码</th>
                <th>上次登录时间</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->last_logined_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection