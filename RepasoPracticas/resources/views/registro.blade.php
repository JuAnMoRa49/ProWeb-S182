@extends('Layouts.plantilla')

@section('title', 'Registro')

@section('contenido')

<h1 class="display-4 text-center mt-5 mb-5">Registro de libro</h1>

<div class="card text-center">

    <div class="card-header">
        INTODUCE LOS DATOS DEL LIBRO
    </div>

    <div class="card-body">
        <form action="/guardarLibro" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">ISBN:</label>
                <input type="text" class="form-control" name="txtISBN" placeholder="Introduce el ISBN"
                    value="{{ old('txtISBN') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtISBN') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Título:</label>
                <input type="text" class="form-control" name="txtTitulo" placeholder="Introduce el título"
                    value="{{ old('txtTitulo') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtTitulo') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Autor:</label>
                <input type="text" class="form-control" name="txtAutor" placeholder="Introduce el autor"
                    value="{{ old('txtAutor') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtAutor') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Páginas:</label>
                <input type="text" class="form-control" name="txtPaginas" placeholder="Introduce el número de páginas"
                    value="{{ old('txtPaginas') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtPaginas') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Editorial:</label>
                <input type="text" class="form-control" name="txtEditorial" placeholder="Introduce la editorial"
                    value="{{ old('txtEditorial') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtEditorial') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Editorial:</label>
                <input type="email" class="form-control" name="txtEmail" placeholder="Introduce el email"
                    value="{{ old('txtEmail') }}">
                <p class="text-danger fst-italic">{{ $errors->first('txtEmail') }}</p>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">
                    Guardar
                </button>
            </div>

        </form>
    </div>
</div>

<script>
    @if(session('confirmacion'))
        Swal.fire(
            '¡Todo correcto!',
            'Libro {{ session('confirmacion') }} guardado',
            'success'
        )
    @endif
</script>

@endsection
