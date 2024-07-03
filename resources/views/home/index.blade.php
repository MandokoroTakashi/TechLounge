@extends('layouts.base')

@section('title', 'TechLounge')

@section('main')
<ul class="slide-items">
    <li><img src="{{ url('img/image1.jpg') }}" alt=""></li>
    <li><img src="{{ url('img/image2.jpg') }}" alt=""></li>
    <li><img src="{{ url('img/image3.jpg') }}" alt=""></li>
</ul>
<div class="news">
    <h1>お知らせ</h1>
    <div >
        <p>新しい機能を追加しました！</p>
        <p>メンテナンスのお知らせ：7月1日にシステムメンテナンスを行います。</p>
    </div>
</div>
@endsection
