<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function verUsuarios(){
        $usuario = Usuario::all();
        return $usuario;
    }

    public function verId($id){
        $usuario = Usuario::find($id);
        return $usuario;
    }


}
