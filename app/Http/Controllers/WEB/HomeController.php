<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $email;

    public function __construct()
    {
        $this->email = 'osiris@psicocultivate.com';
    }

    public function index()
    {
        return view('storefront.index');
    }

    public function about()
    {
        return view('storefront.about');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        Mail::to($this->email)->send(new ContactMessage($data));

        return back();
    }

    public function services()
    {
        return view('storefront.services');
    }

    public function service($slug)
    {
        return view('storefront.service');
    }

    public function team()
    {
        return view('storefront.team');
    }

    public function appointment()
    {
        return view('storefront.appointment');
    }

    public function blogs()
    {
        return view('storefront.blogs');
    }

    public function blog()
    {
        return view('storefront.blog');
    }
}
