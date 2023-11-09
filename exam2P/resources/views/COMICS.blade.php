<!DOCTYPE html>
<html lang="en">
    <title>
        COMICS
    </title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body>

    <div class="container mx-auto">
        <div class="card text-center p-10">
            <div class="bg-black py-2 rounded-lg">
                <h1 class="text-lg font-bold text-white my-3">INTRODUCE LOS DATOS DEL COMIC</h1>
            </div>

            <div class="card-body">
                <form action="/save_comic" method="GET" id="COMICS">

            <div class="mb-3 justify-center">
                <label class="form-label">Nombre del Comic:</label>
                <input type="text" class="form-control w-full border rounded-lg px-3 py-1" name="txtNombre" placeholder="Introduce el Nombre" value="{{ old('txtNombre') }}">
                <p class="text-blue-500">{{ $errors->first('txtNombre') }}</p>
            </div>

            <div class="mb-3 justify-center">
                <label class="form-label">Fecha de Publicacion:</label>
                <input type="text" class="form-control w-full border rounded-lg px-3 py-1" name="txtFecha" placeholder="Introduce la Fecha de Publicacion" value="{{ old('txtFecha') }}">
                <p class="text-blue-500">{{ $errors->first('txtFecha') }}</p>
            </div>

            <div class="mb-3 justify-center">
                <label class="form-label">Numero de comics publicados:</label>
                <input type="text" class="form-control w-full border rounded-lg px-3 py-1" name="txtNumero" placeholder="Introduce el Numero de Comics Publicados" value="{{ old('txtNumero') }}">
                <p class="text-blue-500">{{ $errors->first('txtNumero') }}</p>
            </div>

              <button class="btn btn-lg bg-green-700 py-3 px-5 rounded-lg" type="submit">Guardar</button>
            </div>
        </form>

</body>


</html>