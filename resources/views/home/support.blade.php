@extends('layouts.base')

@section('title', 'TechLounge-Support')

@section('main')
<div class="support">
    <h1>Support</h1>
    <p>If you have any questions, Feel free to ask us!</p>
    <form action="{{ route('home.confirm') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="contact-title">
                Title
                <input type="text" id="contact-title" name="title" value="{{ old('title') }}">
            </label>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="contact-name">
                Name
                <input type="text" id="contact-name" name="name" value="{{ old('name') }}">
            </label>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="contact-body">
                Message
                <textarea type="text" id="contact-body" name="body">{{ old('body') }}</textarea>
            </label>
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-button">
            <button>Confirm</button>
        </div>

    </form>
</div>
@endsection
