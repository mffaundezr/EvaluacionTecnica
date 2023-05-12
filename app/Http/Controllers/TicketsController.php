<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;
use App\Models\Eventos;
use App\Models\Usuarios;

class TicketsController extends Controller
{
    public function usuario(){
        return $this->belongsTo(Usuarios::class,'id_usuario');

    }
    #listado de compras de un usuario
    public function GetCompras($Id_usuario){
        $compras = Tickets::where('id_usuario', $Id_usuario)->get();
        
        if (is_null($compras)) {
            return response()->json(['Mensaje Error'=>'Usuario no ha realizado compras']);
        }else {
            return $compras;
        }
        
    }
    #compra de ticket de un usuario para un evento
    public function store(Request $request){
        
        try {
            $evento = Eventos::find($request->id_evento);
           
            if (is_null($evento)) {
                return response()->json(['Mensaje Error'=>'Evento no existe'],404);
            }
            $usuario = Usuarios::find($request->id_usuario);
            if (is_null($usuario)) {
                return response()->json(['Mensaje Error'=>'Usuarion no existe'],404);
            }
            $compra = new Tickets;
            $compra->id_evento  = $request->id_evento;
            $compra->id_usuario = $request->id_usuario;
            $compra->save();
            $data=[
                'messege'=>'compra exitosa',
                'compra'=>$compra
            ];
            return response()->json($data);
        } catch (\Throwable $th) {
            return response()->json(['Mensaje Error'=>'Error intrerno'],500);
        }
       
    }
}
