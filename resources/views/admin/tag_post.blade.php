@extends('admin.layout')

@section('title')
    @if(!isset($tag))
        添加标签
    @else
        编辑标签
    @endif
@endsection

@section('content')
    <form method="post">
        @csrf
        <table class="w-100">
            <tr>
                <td class="text-right width-25 padding-r15p">名称：</td>
                <td><input type="text" name="name" maxlength="20" placeholder="请输入小于20个字符"
                           value="{{ old('name') ?: (isset($tag) ? $tag->name : '') }}" required></td>
            </tr>
            <tr>
                <td></td>
                <td class="height-50p">
                    <button type="submit" class="margin-r15p">提交</button>
                    <button type="reset">重置</button>
                </td>
            </tr>
        </table>
    </form>
@endsection