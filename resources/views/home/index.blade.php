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
                            <a href="">{{ $tag->name }}</a>,
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-3">
            <div class="shadow bg-white px-3 py-3 mb-4">
                <ul class="list-unstyled mb-0">
                    @foreach($tags as $tag)
                        <li><a href="">{{ $tag->name }}</a><span class="float-right">{{ $tag->articles->count() }}篇</span></li>
                    @endforeach
                    <li><a href="">无</a><span class="float-right">{{ $tag0_cnt }}篇</span></li>
                </ul>
            </div>
            <div class="shadow bg-white px-3 py-3">
                <ul class="list-unstyled mb-0">
                    @foreach($months as $month)
                        <li><a href="">{{ $month->month }}</a><span class="float-right">{{ $month->count }}篇</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection