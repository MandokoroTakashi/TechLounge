@extends('layouts.base')

@section('title', 'TechLounge-Register')

@section('main')
<div class="register-form">
    <form action="{{ route('community.store') }}" method="post">
        @csrf
        <h1>Register About Project</h1>
        <div class="question-box">
            <label for="project_name">
                <span>
                    Q1. あなたが入場した現場の案件名を教えてください。
                </span>
                <p>{{ $data['project_name']}}</p>
                <input type="hidden" id="project_name" name="project_name" value="{{ $data['project_name'] }}">
            </label>
        </div>
        <div class="question-box">
            <label for="project_outline">
                <span>
                    Q2. あなたが入場した案件の概要を教えてください。
                </span>
                <p>{{ $data['project_outline'] }}</p>
                <input type="hidden" id="project_outline" name="project_outline" value="{{ $data['project_outline'] }}">
            </label>
        </div>
        <div class="question-box">
            <span>
                Q3. 案件の期間を教えてください。
            </span>
            <p>{{ $data['project_start'] }}から{{ $data['project_end'] }}まで</p>
            <input type="hidden" id="" name="project_start" value="{{ $data['project_start'] }}">
            <input type="hidden" id="" name="project_end" value="{{ $data['project_end'] }}">
        </div>
        <div class="question-box">
            <span>
                Q4. 案件で使用した主なプログラミング言語を教えてください。（複数回答可）
            </span>
            <p>
                @foreach($data['prog_langs'] as $prog_lang)
                    {{ $prog_lang }}
                @endforeach
            </p>
            @foreach($data['prog_langs'] as $lang)
                <input type="hidden" name="prog_langs[]" value="{{ $lang }}">
            @endforeach
        </div>
        <div class="question-box">
            <span>
                Q5. 案件で使用した主なフレームワークを教えてください。（複数回答可）
            </span>
            <p>
                @foreach($data['framework'] as $frame)
                    {{ $frame }}
                @endforeach
            </p>
            @foreach($data['framework'] as $framework)
                <input type="hidden" name="framework[]" value="{{ $framework }}">
            @endforeach
        </div>
        <div class="question-box">
            <label for="">
                <span>
                    Q6. あなたが担当した主な業務の概要を教えてください。
                </span>
                <p>{{ $data['task_outline'] }}</p>
                <input type="hidden" id="task_outline" name="task_outline" value="{{ $data['task_outline'] }}">
            </label>
        </div>
        <div class="question-box">
            <label for="">
                <span>
                    Q7. 1日の業務の流れを教えてください。（例：朝会、作業内容、ミーティングなど）
                </span>
                <p>{{ $data['task_schedule'] }}</p>
                <input type="hidden" id="task_schedule" name="task_schedule" value="{{ $data['task_schedule'] }}">
            </label>
        </div>
        <div class="question-box">
            <span>
                Q8. 出勤頻度を教えてください。
            </span>
            <p>{{ $data['work_style'] }}</p>
            <input type="hidden" name="work_style" value="{{ $data['work_style'] }}">
        </div>
        {{-- <h1>Register About Development</h1>
        <div class="question-box">
            <span>
                Q. 案件で使用したデータベースの数、テーブルの数を教えてください。
            </span>
            <label for="">
                データベース：
                <input type="number" id="" name="q1" value="{{ old('q1') }}">
            </label>
            <label for="">
                テーブル：
                <input type="number" id="" name="q1" value="{{ old('q1') }}">
            </label>
        </div>
        <div class="question-box">
            <label for="">
                <span>
                    Q. 案件での環境構築の流れを教えてください
                </span>
                <textarea type="text" id="" name="q2"></textarea>
            </label>
        </div> --}}
        <div class="button-group">
            <div class="form-button">
                <button name='back' value="back">Cancel</button>
            </div>
            <div class="form-button">
                <button type="submit">Send</button>
            </div>
        </div>
    </form>
</div>
@endsection
