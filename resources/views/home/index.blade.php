@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9">
            @foreach ($articles as $article)
                <div class="shadow bg-white px-5 py-4 mb-4">
                    <h2><a href="">{{ $article->title }}</a></h2>
                    <h6>{{ $article->created_at }}</h6>
                    <div>{{ $article->description }}</div>
                </div>
            @endforeach
        </div>
        <div class="col-md-3">
            <div class="shadow bg-white px-3 py-3 mb-4">
                <ul class="list-unstyled mb-0">
                    @foreach($tags as $tag)
                        <li><a href="">{{ $tag->name }}</a><span class="float-right">1篇</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="shadow bg-white px-3 py-3">
                <ul class="list-unstyled mb-0">
                    <li><a href="">2019年1月</a><span class="float-right">1篇</span></li>
                    <li><a href="">2019年2月</a><span class="float-right">2篇</span></li>
                </ul>
            </div>
        </div>
    </div>
@endsection