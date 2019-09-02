@extends('admin.layout')

@section('title', '标签管理')

@section('content')
    <div><a href="{{ route('admin.tag.add') }}"><button>添加</button></a></div>
    <div class="table_wrapper">
        <table class="table table-hover text-center">
            <tr class="th">
                <th>ID</th>
                <th>名称</th>
                <th>创建时间</th>
                <th>更新时间</th>
                <th>操作</th>
            </tr>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->created_at }}</td>
                    <td>{{ $tag->updated_at }}</td>
                    <td><a href="{{ route('admin.tag.edit', [ $tag->id ]) }}">编辑</a>
                        | <a href="{{ route('admin.tag.delete', [ $tag->id ]) }}"
                             onclick="if(!confirm('确定要删除吗？')) return false;">删除</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="float-right">{{ $tags->links() }}</div>
@endsection