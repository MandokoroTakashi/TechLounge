<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\TInquiries;

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

        TInquiries::create([
            'title' => $request->title,
            'name' => $request->name,
            'body' => $request->body,
        ]);

        $this->sendMail($request);

        return view('home.complete');
    }

    private function sendMail($contact)
    {
        $toEmail = 't.mandokoro.cingroup2012@gmail.com'; // 送信先のメールアドレス

        Mail::send('emails.mail_template', ['contact' => $contact], function ($message) use ($toEmail) {
            $message->to($toEmail)
                    ->subject('新しい問い合わせが登録されました');
        });
    }
}
