@extends('plantilla')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Salida</title>
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            h1 {
                font-size: 32px;
                font-weight: bold;
                text-align: center;
                margin: 20px 0;
                color: #000000;
                padding: 50px;
            }

            body {
                margin: 0;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .container {
                width: 80%;
                text-align: center;
            }

            form {
                width: 400px;
                margin: 0 auto;
                text-align: left;
            }

            .box {
                clear: left;
                float: left;
                background-color: #f2f2f2;
                padding: 10px;
                margin-right: 10px;
            }

            label {
                display: inline-block;
                width: 520px;
                text-align: left;
                margin-left: 10px;
                margin-right: 10px;
            }

            .card {
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
                padding: 20px;
                margin: 20px;
                width: 600px;
                margin-top: 780px;
            }

            .card-blue {
                border-color: #2196F3;
            }
        </style>
    </head>
    <body>
        <h1>Ingresa los datos de Salida:</h1>
        <div class="container">
            <div class="card card-blue">
                <form method="post" action="{{ route('Nentrada') }}">
                    @csrf
                    <div class="row">
                        <div class="box">
                            <div align="left">
                                <label class="form-label" name="labelTitulo">Nombre del producto: </label>
                            </div>
                            <input type="text" class="form-control" name="txtTitulo" onchange="validarNombre(this.value)" value="{{ old('txtTitulo')}}"></input>
                        </div>
                        <div class="box">
                            <div align="left">
                                <label class="form-label" name="labelTitulo">Cantidad: </label>
                            </div>
                            <input type="text" class="form-control" name="txtTitulo1" onchange="validarDescripcion(this.value)" value="{{ old('txtTitulo')}}"></input>
                        </div>
                        <div class="box">
                            <div align="left">
                                <label class="form-label" name="labelTitulo">Número de factura: </label>
                            </div>
                            <input type="text" class="form-control" name="txtTitulo1" onchange="validarDescripcion(this.value)" value="{{ old('txtTitulo')}}"></input>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="box">
                            <div align="left">
                                <label class="form-label" name="labelTitulo">Precio unitario: </label>
                            </div>
                            <input type="text" class="form-control" name="txtTitulo1" onchange="validarDescripcion(this.value)" value="{{ old('txtTitulo')}}"></input>
                        </div>
                        <div class="box">
                            <div align="left">
                                <label class="form-label" name="labelTitulo">Precio total: </label>
                            </div>
                            <input type="text" class="form-control" name="txtTitulo1" onchange="validarDescripcion(this.value)" value="{{ old('txtTitulo')}}"></input>
                        </div>
                        <div class="box">
                            <div align="left">
                                <label class="form-label" name="labelTitulo">Cliente: </label>
                            </div>
                            <input type="text" class="form-control" name="txtTitulo1" onchange="validarDescripcion(this.value)" value="{{ old('txtTitulo')}}"></input>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="box">
                            <div align="left">
                                <label class="form-label" name="labelTitulo">Motivo de salida: </label>
                            </div>
                            <input type="text" class="form-control" name="txtTitulo1" onchange="validarDescripcion(this.value)" value="{{ old('txtTitulo')}}"></input>
                        </div>
                        <div class="box">
                            <div align="left">
                                <label class="form-label" name="labelTitulo">Responsable: </label>
                            </div>
                            <input type="text" class="form-control" name="txtTitulo1" onchange="validarDescripcion(this.value)" value="{{ old('txtTitulo')}}"></input>
                        </div>
                        <div class="box">
                            <div align="left">
                                <label class="form-label" name="labelTitulo">Cliente: </label>
                            </div>
                            <input type="text" class="form-control" name="txtTitulo1" onchange="validarDescripcion(this.value)" value="{{ old('txtTitulo')}}"></input>
                        </div>
                    </div>

                    <div class="box">
                        <br>
                            <center>
                                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Guardar</button>     
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src=" {{ URL::asset('validacion.js') }} "></script>
    </body>
</html>
@stop