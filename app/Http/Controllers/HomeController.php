<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home.index');
    }

    public function dashboard()
    {
        return view('home.dashboard');
    }

    public function support()
    {
        return view('home.support');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'body' => 'required',
        ]);

        $data = [
            'title' => $request->title,
            'name' => $request->name,
            'body' => $request->body,
        ];

        return view('home.confirm')
            ->with(compact('data'));
    }

    public function register(Request $request)
    {
        if($request->input('back') == 'back'){
            return redirect(route('home.support'))
                ->withInput();
        }

        return view('home.complete');
    }
}
