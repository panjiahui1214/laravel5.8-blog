@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="shadow bg-white px-5 py-4 mb-4">
                <h2>我是文章标题</h2>
                <h6>2019-01-01 01:01:01</h6>
                <div>这是第一篇文章的简介</div>
            </div>
            <div class="shadow bg-white px-5 py-4 mb-4">
                <h2>我是文章标题</h2>
                <h6>2019-01-02 01:01:01</h6>
                <div>这是第二篇文章的简介</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="shadow bg-white px-3 py-3 mb-4">
                <ul class="list-unstyled mb-0">
                    <li><a href="">php</a><span class="float-right">2篇</span></li>
                    <li><a href="">java</a><span class="float-right">1篇</span></li>
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