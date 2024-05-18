<?php

namespace App\Http\Controllers\WEB\Calendar;

use App\Http\Controllers\Controller;
use App\Models\Filtro;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $filtros = Filtro::all();

        return view('content.apps.app-calendar', [
            'filtros' => $filtros
        ]);
    }
}
