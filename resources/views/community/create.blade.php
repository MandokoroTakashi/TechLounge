@extends('layouts.base')

@section('title', 'TechLounge-Register')

@section('main')
<div class="register-form">
    <form action="{{ route('community.confirm') }}" method="post">
        @csrf
        <h1>Register About Project</h1>
        <div class="question-box">
            <label for="project_name">
                <span>
                    Q1. あなたが入場した現場の案件名を教えてください。
                </span>
                <input type="text" id="project_name" name="project_name" value="{{ old('project_name') }}">
            </label>
            @error('project_name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="question-box">
            <label for="project_outline">
                <span>
                    Q2. あなたが入場した案件の概要を教えてください。
                </span>
                <textarea type="text" id="project_outline" name="project_outline">{{ old('project_outline') }}</textarea>
            </label>
            @error('project_outline')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="question-box">
            <span>
                Q3. 案件の期間を教えてください。
            </span>
            <input type="date" id="" name="project_start" value="{{ old('project_start') }}">から
            <input type="date" id="" name="project_end" value="{{ old('project_end') }}">まで
            @error('project_start')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('project_end')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="question-box">
            <span>
                Q4. 案件で使用した主なプログラミング言語を教えてください。（複数回答可）
            </span>
            @foreach(['PHP', 'Java', 'Python', 'JavaScript', 'Other_langs'] as $lang)
                <label for="{{ $lang }}">
                    <input type="checkbox" id="{{ $lang }}" name="prog_langs[]" value="{{ $lang }}"
                        @if(is_array(old('prog_langs')) && in_array($lang, old('prog_langs'))) checked @endif>
                    {{ $lang }}
                </label>
            @endforeach
            @error('prog_langs')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="question-box">
            <span>
                Q5. 案件で使用した主なフレームワークを教えてください。（複数回答可）
            </span>
            @foreach(['Laravel', 'CakePHP', 'CodeIgniter', 'React', 'Angular', 'Other_fw'] as $framework)
                <label for="{{ $framework }}">
                    <input type="checkbox" id="{{ $framework }}" name="framework[]" value="{{ $framework }}"
                        @if(is_array(old('framework')) && in_array($framework, old('framework'))) checked @endif>
                    {{ $framework }}
                </label>
            @endforeach
            @error('framework')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="question-box">
            <label for="">
                <span>
                    Q6. あなたが担当した主な業務の概要を教えてください。
                </span>
                <textarea type="text" id="task_outline" name="task_outline">{{ old('task_outline') }}</textarea>
            </label>
            @error('task_outline')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="question-box">
            <label for="">
                <span>
                    Q7. 1日の業務の流れを教えてください。（例：朝会、作業内容、ミーティングなど）
                </span>
                <textarea type="text" id="task_schedule" name="task_schedule">{{ old('task_schedule') }}</textarea>
            </label>
            @error('task_schedule')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="question-box">
            <span>
                Q8. 出勤頻度を教えてください。
            </span>
            <label for="remote">
                <input type="radio" id="remote" name="work_style" value="remote" @if(old('work_style') && old('work_style') == 'remote') checked @endif>フルリモート
            </label>
            <label for="office">
                <input type="radio" id="office" name="work_style" value="office" @if(old('work_style') && old('work_style') == 'office') checked @endif>フル出社
            </label>
            <label for="hybrid">
                <input type="radio" id="hybrid" name="work_style" value="hybrid" @if(old('work_style') && old('work_style') == 'hybrid') checked @endif>ハイブリッド
            </label>
            @error('work_style')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-button">
            <button type="submit">Confirm</button>
        </div>
    </form>
</div>
@endsection
