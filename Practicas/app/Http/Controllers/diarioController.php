<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormDiario;

class diarioController extends Controller
{

    public function metodoInicio(){
        return view('inicio');
    }
    public function metodoFormulario(){
        return view('formulario');
    }
    public function metodoRecuerdo(){
        return view('recuerdos');
    }

    public function metodoGuardar(validadorFormDiario $request){
        
        // validación en controlador
        // $validated = $request->validate([
        //     'txtTitulo' => 'required|max:255',
        //     'txtRecuerdo' => 'required|min:5',
        // ]);

        return redirect('/formulario')->with('confirmacion', 'Tu recuerdo se guardo');
    }
}

