<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;

class EventosController extends Controller
{
    #Listado de eventos 
    public function GetEventos(){
        $eventos = Eventos::select('nombre','lugar','fecha','hora_inicio','precio')->get();
        return $eventos;
    }
    #informacion de un evento por id
    public function GetEventoId($Id){
        $evento = Eventos::find($Id);
        if (is_null($evento)) {
            return response()->json(['Mensaje Error'=>'Evento no disponible']);
        }else {
            return response()->json($evento::find($Id),200);
        }
        
    }
}
