<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function tickets(){
        return this->hasMany(Tickets::class,'id');
    }
}
