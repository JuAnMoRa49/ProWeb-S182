<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormLibros;
use RealRashid\SweetAlert\Facades\Alert;

class diarioController extends Controller
{

    public function metodoInicio(){
        return view('inicio');
    }
    public function metodoRegistro(){
        return view('registro');
    }

    public function metodoGuardar(validadorFormLibros $request)
    {
    
        Alert::success('¡Todo correcto!', 'Libro guardado')->persistent(true);
    
        return redirect('/registro')->with('confirmacion', $request->txtTitulo);
    }
    
}

