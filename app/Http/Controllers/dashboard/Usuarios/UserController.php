<?php

namespace App\Http\Controllers\Dashboard\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('content.apps.app-user-list');
    }
}
