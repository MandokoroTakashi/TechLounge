@extends('layouts.base')

@section('title', 'TechLounge-Community')

@section('main')
<div class="news">
    <h1>Community</h1>
</div>
<div class="container">
    <h1>プロジェクト一覧</h1>

    @if ($data->isEmpty())
        <p>プロジェクトがありません。</p>
    @else
        <div class="projects-list">
            @foreach ($data as $project)
                <div class="project-card">
                    <h2>{{ $project->project_name }}</h2>
                    <p><strong>概要:</strong> {{ $project->project_outline }}</p>
                    <p><strong>開始日:</strong> {{ $project->project_start }}</p>
                    <p><strong>終了日:</strong> {{ $project->project_end }}</p>
                    <p><strong>使用言語:</strong> {{ implode(', ', explode(',', str_replace(['[', ']', '"'], '', $project->prog_langs))) }}</p>
                    <p><strong>フレームワーク:</strong> {{ implode(', ', explode(',', str_replace(['[', ']', '"'], '', $project->framework))) }} </p>
                    <p><strong>タスク概要:</strong> {{ $project->task_outline }}</p>
                    <p><strong>スケジュール:</strong> {{ $project->task_schedule }}</p>
                    <p><strong>ワークスタイル:</strong> {{ $project->work_style }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

<style>
</style>
