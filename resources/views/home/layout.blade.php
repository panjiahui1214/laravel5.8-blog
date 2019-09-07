@extends('layouts.app')

@section('content')
    <div class="row">
        @yield('article')
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