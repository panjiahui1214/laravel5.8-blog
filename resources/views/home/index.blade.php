@extends('home.layout')

@section('article')
    <div class="col-md-9">
        @foreach ($articles as $article)
            <div class="shadow bg-white px-5 py-4 mb-4">
                <h2><a href="{{ route('index.article', [$article->id]) }}">{{ $article->title }}</a></h2>
                <h6 class="font-s12p">Published on {{ $article->created_at }}</h6>
                <div class="margin-l8p">
                    <div>{{ $article->description }}</div>
                </div>
                <div class="margin-t8p">Field in
                    @foreach($article->tags as $tag)
                        <a href="{{ route('index.tag', [$tag->name]) }}">{{ $tag->name }}</a>,
                    @endforeach
                </div>
            </div>
        @endforeach
        <div class="form-paging">{{ $articles->links() }}</div>
    </div>
@endsection