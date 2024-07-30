@extends('layouts.base')

@section('title', 'TechLounge-Support')

@section('main')
<div class="support">
    <h1>Support</h1>
    <p>Please check your opinion!</p>
    <form action="{{ route('home.support.register')}}" method="post">
    {{-- <form action="{{ route('home.register') }}" method="post"> --}}
        @csrf

        <div class="form-group">
            <h2>Title</h2>
            <p>{{ $data['title'] }}</p>
            <input type="hidden" name="title" value="{{ $data['title'] }}">
        </div>
        <div class="form-group">
            <h2>Name</h2>
            <p>{{ $data['name']}}</p>
            <input type="hidden" name="name" value="{{ $data['name']}}">
        </div>
        <div class="form-group">
            <h2>Message</h2>
            <p>{!! nl2br(e($data['body'])) !!}</p>
            <input type="hidden" name="body" value="{{ $data['body']}}">
        </div>
        <div class="button-group">
            <div class="form-button">
                <button name='back' value="back">Cancel</button>
            </div>
            <div class="form-button">
                <button>Send</button>
            </div>
        </div>

    </form>
</div>
@endsection
