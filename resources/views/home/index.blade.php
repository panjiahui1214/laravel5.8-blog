@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9">
            @foreach ($articles as $article)
                <div class="shadow bg-white px-5 py-4 mb-4">
                    <h2><a href="">{{ $article->title }}</a></h2>
                    <div class="margin-l8p">
                        <h6 class="font-s12p">{{ $article->created_at }}</h6>
                        <div>{{ $article->description }}</div>
                    </div>
                    <div class="margin-t8p">标签：
                        @foreach($article->tags as $tag)
                            <a href="{{ route('index.tag', [$tag->name]) }}">{{ $tag->name }}</a>,
                        @endforeach
                    </div>
                </div>
            @endforeach
            <div class="form-paging">{{ $articles->links() }}</div>
        </div>
        <div class="col-md-3">
            <div class="shadow bg-white px-3 py-3 mb-4">
                <ul class="list-unstyled mb-0">
                    @foreach($tags as $tag)
                        <li><a href="{{ route('index.tag', [$tag->name]) }}">{{ $tag->name }}</a><span class="float-right">{{ $tag->articles->count() }}篇</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="shadow bg-white px-3 py-3">
                <ul class="list-unstyled mb-0">
                    @foreach($months as $month)
                        <li><a href="{{ route('index.month', [$month->month]) }}">{{ $month->month }}</a><span class="float-right">{{ $month->count }}篇</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection