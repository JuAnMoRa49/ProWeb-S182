@extends('Layouts.plantilla')

@section('title', 'Formulario')


@section('contenido')

    <h1>Recuerdos</h1>
    
    @foreach ($consultaRecuerdos as $recuerdo)

        <div class="card w-50 mb-3 mt-5">
            <div class="card-body">
            <h5 class="card-title"> {{ $recuerdo->titulo }} </h5>
            <p class="card-text"> {{ $recuerdo->fecha }}</p>
            <p class="card-text"> {{ $recuerdo->descripcion }}</p>
            <a href="#" class="btn btn-warning">Editar</a>
            <a href="#" class="btn btn-danger">Borrar</a>

            </div>
        </div>
        
    @endforeach
   

@endsection