<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formularios');
    }

    public function metodoRecuerdo(){
        return view('recuerdos');
    }
}
