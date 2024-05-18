<?php

namespace App\Http\Controllers\API\Filtros;

use App\Http\Controllers\Controller;
use App\Models\Filtro;
use Illuminate\Http\Request;

class FiltroController extends Controller
{
    public function index()
    {
        //Rule code HTTP
        // 300 -> Request ok and data empty
        // 200 -> Request ok and data full

        $msg = "No hay filtros disponibles";
        $code = 300;

        $filtros = Filtro::all();

        if (!$filtros->isEmpty()) {
            $msg = 'Mostrando los filtros disponibles';
            $code = 200;
        }

        return response()->json([
            'code' => $code,
            'msg' => $msg,
            'data' => $filtros
        ]);
    }
}
