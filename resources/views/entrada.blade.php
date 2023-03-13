@extends('plantilla')
@section('contenido')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar</title>
</head>
<body>
<center>
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ingresa datos</h5>
</center>
<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <br><br><br><br>
    <form method="post" action="{{ route('Centrada') }}">
        @csrf
        <div>
            <label class="form-label" name="labelTitulo">Nombre: </label>
            <input type="text" class="form-control" name="txtTitulo" onchange="validarNombre(this.value)" value="{{ old('txtTitulo')}}"></input>
        </div>
        <div>
            <label class="form-label" name="labelTitulo">Descripcion: </label>
            <input type="text" class="form-control" name="txtTitulo1" onchange="validarDescripcion(this.value)" value="{{ old('txtTitulo')}}"></input>
        </div>
        <div>
            <br>
            <center>
                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Guardar</button>     
            </center>
        </div>
    </form>
</div>

<script type="text/javascript" src=" {{ URL::asset('validacion.js') }} "></script>

</body>
</html>
@stop