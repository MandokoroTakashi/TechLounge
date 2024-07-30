@extends('layouts.base')

@section('title', 'TechLounge-Register')

@section('main')
<div class="news">
    <form action="">
        <h1>Register About Project</h1>
        <div class="question-box">
            <label for="project-name">
                <span>
                    Q1. あなたが入場した現場の案件名を教えてください。
                </span>
                <input type="text" id="project-name" name="project-name" value="{{ old('project-name') }}">
            </label>
        </div>
        <div class="question-box">
            <label for="project-outline">
                <span>
                    Q2. あなたが入場した案件の概要を教えてください。
                </span>
                <textarea type="text" id="project-outline" name="project-outline">{{ old('project-outline') }}</textarea>
            </label>
        </div>
        <div class="question-box">
            <span>
                Q3. 案件の期間を教えてください。
            </span>
            <input type="date" id="" name="project-start" value="{{ old('project-start') }}">から
            <input type="date" id="" name="project-end" value="{{ old('project-end') }}">まで
        </div>
        <div class="question-box">
            <span>
                Q4. 案件で使用した主なプログラミング言語を教えてください。（複数回答可）
            </span>
            <label for="PHP">
                <input type="checkbox" id="PHP" name="prog_langs" value="PHP">PHP
            </label>
            <label for="Java">
                <input type="checkbox" id="Java" name="prog_langs" value="Java">Java
            </label>
            <label for="Python">
                <input type="checkbox" id="Python" name="prog_langs" value="Python">Python
            </label>
            <label for="JavaScript">
                <input type="checkbox" id="JavaScript" name="prog_langs" value="JavaScript">JavaScript
            </label>
            <label for="Ruby">
                <input type="checkbox" id="Ruby" name="prog_langs" value="Ruby">Ruby
            </label>
            <label for="prog-langs-other">
                <input type="checkbox" id="prog-langs-other" name="prog_langs" value="prog-langs-other">Other（下記に記入）
            </label>
            <input type="text" name="prog-langs-other-text" value="{{ old('prog-langs-other-text')}}">
        </div>
        <div class="question-box">
            <span>
                Q5. 案件で使用した主なフレームワークを教えてください。（複数回答可）
            </span>
            <label for="Laravel">
                <input type="checkbox" id="Laravel" name="flamework" value="Laravel">Laravel
            </label>
            <label for="CakePHP">
                <input type="checkbox" id="CakePHP" name="flamework" value="CakePHP">CakePHP
            </label>
            <label for="CodeIgniter">
                <input type="checkbox" id="CodeIgniter" name="flamework" value="CodeIgniter">CodeIgniter
            </label>
            <label for="React">
                <input type="checkbox" id="React" name="flamework" value="React">React
            </label>
            <label for="Angular">
                <input type="checkbox" id="Angular" name="flamework" value="Angular">Angular
            </label>
            <label for="Other">
                <input type="checkbox" id="Other" name="flamework" value="fw-other">Other（下記に記入）
            </label>
            <input type="text" name="fw-other-text" value="{{ old('fw-other-text')}}">
        </div>
        <div class="question-box">
            <label for="">
                <span>
                    Q6. あなたが担当した主な業務の概要を教えてください。
                </span>
                <textarea type="text" id="task-outline" name="task-outline">{{ old('task-outline') }}</textarea>
            </label>
        </div>
        <div class="question-box">
            <label for="">
                <span>
                    Q7. 1日の業務の流れを教えてください。（例：朝会、作業内容、ミーティングなど）
                </span>
                <textarea type="text" id="task-schedule" name="task-schedule">{{ old('task-schedule') }}</textarea>
            </label>
        </div>
        <div class="question-box">
            <span>
                Q8. 出勤頻度を教えてください。
            </span>
            <label for="remote">
                <input type="radio" id="remote" name="flamework" value="remote">フルリモート
            </label>
            <label for="office">
                <input type="radio" id="office" name="flamework" value="office">フル出社
            </label>
            <label for="hybrid">
                <input type="radio" id="hybrid" name="flamework" value="hybrid">ハイブリッド(下記に割合を記入。例：週１リモート)
            </label>
            <input type="text" name="hybrid" value="{{ old('hybrid')}}">
        </div>
        <h1>Register About Development</h1>
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
        </div>
    </form>
</div>
@endsection
