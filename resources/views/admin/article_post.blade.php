@extends('admin.layout')

@section('title')
    @if(!isset($article))
        添加文章
    @else
        编辑文章
    @endif
@endsection

@section('content')
    <form method="post">
        @csrf
        <table>
            <tr>
                <td class="text-right width-25 padding-r15p">标题：</td>
                <td><input type="text" name="title" maxlength="50" placeholder="请输入小于50个字符"
                           value="{{ old('title') ?: (isset($article) ? $article->title : '') }}" required></td>
            </tr>
            <tr>
                <td class="text-right padding-r15p">关键词：</td>
                <td><input type="text" name="keyword" maxlength="100" placeholder="请输入小于100个字符"
                           value="{{ old('keyword') ?: (isset($article) ? $article->keyword : '') }}"></td>
            </tr>
            <tr>
                <td class="text-right padding-r15p">描述：</td>
                <td>
                    <textarea name="description" cols="60" rows="3" maxlength="255" placeholder="请输入小于255个字符">
                        {{ old('description') ?: (isset($article) ? $article->description : '') }}
                    </textarea>
                </td>
            </tr>
            <tr>
                <td class="text-right padding-r15p">标签：</td>
                <td>
                    @foreach($tags as $tag)
                        <input type="checkbox" name="article_tag">{{ $tag->name }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <td class="text-right padding-r15p">内容：</td>
                <td>
                    <textarea name="text" cols="60" rows="10">
                        {{ old('text') ?: (isset($article) ? $article->text : '') }}
                    </textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td class="text-center height-50p">
                    <button type="submit" class="margin-r15p">提交</button>
                    <button type="reset">重置</button>
                </td>
            </tr>
        </table>
    </form>
@endsection