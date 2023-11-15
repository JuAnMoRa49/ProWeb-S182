@extends('Layouts.plantilla')

@section('title', 'Formulario')


@section('contenido')

<h1 class="display-4 text-success text-center mt-5 mb-5">Formulario</h1>

<div class="card text-center">

  @if(session()->has('confirmacion'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('confirmacion')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if($errors->any())
    @foreach($errors ->all() as $error)
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $error }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endforeach
  @endif

  <div class="card-header text-success">
    INTRODUCE TUS RECUERDOS AQUI
  </div>

  <div class="card-body">
    <form action="/recuerdo" method="POST">
      @csrf
      
      <div class="mb-3">
          <label class="form-label">Titulo:</label>
          <input type="text" class="form-control" name="txtTitulo" placeholder="Introduce tu titulo" value= "{{old('txtTitulo')}}">
          <p class= "text-danger fst-italic" >{{$errors->first('txtTitulo')}} </p>
      </div>

      <div class="mb-3">
          <label class="form-label">Recuerdo:</label>
          <input class="form-control" name="txtRecuerdo" placeholder="Introduce tu recuerdo" value= "{{old('txtRecuerdo')}}">
          <p class= "text-danger fst-italic" >{{$errors->first('txtRecuerdo')}} </p>
      </div>

      <div class="d-grid gap-2">
        <button class="btn btn-success btn-lg" type="submit">
          Guardar
        </button>
      </div>

    </form>

  </div>

  <div class="card-footer text-body-secondary">
    2 days ago
  </div>
  
</div>


@endsection