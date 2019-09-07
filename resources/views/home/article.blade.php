@extends('home.layout')

@section('article')
    <div class="col-md-9">
        <div class="shadow bg-white px-5 py-4 mb-4">
            <h2><a href="">{{ $articles->title }}</a></h2>
            <h6 class="font-s12p">Published on {{ $articles->created_at }}</h6>
            <div class="margin-l8p">
                <div>{!! $articles->text !!}</div>
            </div>
            <div class="margin-t8p">Field in
                @foreach($articles->tags as $tag)
                    <a href="{{ route('index.tag', [$tag->name]) }}">{{ $tag->name }}</a>,
                @endforeach
            </div>
        </div>
    </div>
@endsection