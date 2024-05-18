<?php

namespace App\Http\Controllers\API\Eventos;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use App\Models\Filtro;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventoController extends Controller
{
    public function index()
    {
        //Rule code HTTP
        // 300 -> Request ok and data empty
        // 200 -> Request ok and data full

        $msg = "No hay eventos disponibles";
        $code = 300;

        $eventos = Evento::all();
        $data = [];

        if (!$eventos->isEmpty()) {
            $msg = 'Mostrando los eventos disponibles';
            $code = 200;

            foreach ($eventos as $key => $evento) {

                $data[$key] = [
                    'id' => $evento->id,
                    'url' => $evento->url,
                    'title' => $evento->titulo,
                    'start' => $evento->fecha_empieza,
                    'end' => $evento->fecha_termina,
                    'allDay' => $evento->all_day,
                    'extendedProps' => [
                        'calendar' => $evento->filtro->codigo
                    ],
                    'description' => $evento->descripcion,
                    'location' => $evento->locacion,
                    'pacientes' => $evento->pacientes,
                    'invitados' => $evento->invitados,
                ];
            }
        }

        return response()->json([
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->titulo = $request->title;
        $evento->fecha_empieza = $request->start;
        $evento->fecha_termina = $request->end;
        $evento->all_day = ($request->filled('allDay')) ? $request->allDay : false;
        $evento->url = $request->url;
        $evento->invitados = json_encode($request->extendedProps['guests']);
        $evento->locacion = $request->extendedProps['location'];
        $evento->descripcion = $request->extendedProps['description'];
        $filtro = Filtro::where('codigo', $request->extendedProps['calendar'])->first();
        $evento->filtro_id = $filtro->id;
        //dd($evento);
        $evento->save();

        return response()->json([
            'code' => 200,
            'msg' => 'Evento creado',
            'data' => $evento
        ]);
    }

    public function delete(Evento $evento)
    {
        $evento->delete();
        return response()->json([
            'code' => 200,
            'msg' => 'Evento borrado',
            'data' => null
        ]);
    }
}
