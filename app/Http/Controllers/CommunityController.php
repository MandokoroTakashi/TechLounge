<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TAnswers;

class CommunityController extends Controller
{
    public function index()
    {
        $data = TAnswers::all();

        return view('community.index', compact('data'));
    }

    public function create()
    {
        // dd(session());
        return view('community.create');
    }

    public function confirm(Request $request)
    {
        // dd($request);
        $request->validate([
            'project_name' => 'required',
            'project_outline' => 'required',
            'project_start' => 'required',
            'project_end' => 'required',
            'prog_langs' => 'required',
            'framework' => 'required',
            'task_outline' => 'required',
            'task_schedule' => 'required',
            'work_style' => 'required',
        ]);

        $data = [
            'project_name' => $request->project_name,
            'project_outline' => $request->project_outline,
            'project_start' => $request->project_start,
            'project_end' => $request->project_end,
            'prog_langs' => $request->prog_langs,
            'framework' => $request->framework,
            'task_outline' => $request->task_outline,
            'task_schedule' => $request->task_schedule,
            'work_style' => $request->work_style,
        ];

        return view('community.confirm')
            ->with(compact('data'));
    }

    public function store(Request $request)
    {
        if($request->input('back') == 'back'){
            return redirect(route('community.create'))
                ->withInput();
        }

        TAnswers::create([
            'project_name' => $request->project_name,
            'project_outline' => $request->project_outline,
            'project_start' => $request->project_start,
            'project_end' => $request->project_end,
            'prog_langs' => json_encode($request->prog_langs),
            'framework' => json_encode($request->framework),
            'task_outline' => $request->task_outline,
            'task_schedule' => $request->task_schedule,
            'work_style' => $request->work_style,
        ]);

        return view('community.complete');
    }
}
