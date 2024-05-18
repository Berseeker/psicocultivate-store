<?php

namespace App\Http\Controllers\Dashboard\Calendario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filtro;

class CalendarioController extends Controller
{
    public function index()
    {
        $filtros = Filtro::all();

        return view('content.apps.app-calendar', [
            'filtros' => $filtros
        ]);
    }
}
