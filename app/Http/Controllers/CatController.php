<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index(){
        //return "Este es mi primer controlador!!";

        $nombre = "abel abraham";
        $apellido = "estrella ojeda";

        return view('gatos.otrogato')
        ->with('minombre' , $nombre)
        ->with('miapellido' , $apellido);
    }
}
