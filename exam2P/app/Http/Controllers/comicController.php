<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCOMIC;

class comicController extends Controller
{

    public function metodoGuardar(Request $request)
    
{
    $validated = $request->validate([

        'txtNombre' => 'required|min:4',
        'txtFecha' => 'required',
        'txtNumero' => 'required|numeric|digits_between:1,4'
        
    ]);
 
    return redirect('/');
}
}

