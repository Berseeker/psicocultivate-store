<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Mail\ContactMessage;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $email;
    private $services;

    public function __construct()
    {
        $this->email = 'osiris@psicocultivate.com';
        $this->services = Service::all();
    }

    public function index()
    {
        return view('storefront.index', [
            'services' => $this->services
        ]);
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
        return view('storefront.services', [
            'services' => $this->services
        ]);
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
        return view('storefront.appointment', [
            'services' => $this->services
        ]);
    }

    public function blogs()
    {
        return view('storefront.blogs');
    }

    public function blog($id)
    {
        return view('storefront.blog_details');
    }

    public function blogFile($id)
    {
        //return Storage::url('sleep.pdf');
        return Storage::download('blogs/sleep.pdf', 'blog_sueño');
    }

    public function dianely()
    {
        return view('storefront.team_dianely');
    }

    public function gaman()
    {
        return view('storefront.team_gaman');
    }

    public function gonzalez()
    {
        return view('storefront.team_gonzalez');
    }
}
