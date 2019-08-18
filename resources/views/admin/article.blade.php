@extends('admin.layout')

@section('title', '文章管理')

@section('content')
    <div><a href="{{ route('admin_article_add') }}"><button>添加</button></a></div>
    <div class="table_wrapper">
        <table class="table table-hover text-center">
            <tr class="th">
                <th>ID</th>
                <th>标题</th>
                <th>创建时间</th>
                <th>更新时间</th>
                <th>操作</th>
            </tr>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->created_at }}</td>
                    <td>{{ $article->updated_at }}</td>
                    <td><a href="{{ route('admin_article_edit', ['id'=>$article->id]) }}">编辑</a>
                        | <a href="{{ route('admin_article_delete', ['id'=>$article->id]) }}"
                             onclick="if(!confirm('确定要删除吗？')) return false;">删除</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection