<?php

namespace App\Http\Controllers\Admin\Actividades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        return view('admin.actividades.index');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function showAll()
    {
        return view('content.apps.app-academy-course');
    }

    public function details()
    {
        return view('content.apps.app-academy-course-details');
    }
}
