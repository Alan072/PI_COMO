@extends('plantilla')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
        <title>Inventario</title>
        <style>
             .text-align {
               width: 100%; /* Establece el ancho del contenedor */
               margin: left; /* Establece los márgenes izquierdo y derecho como "auto" para centrar el contenedor */
               margin-left: -180px;
               text-align: center; /* Centra el texto dentro del contenedor */
               padding: 240px;
           } 
           /* Estilos para la tabla */
            table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            border: 2px solid red;
            }

            /* Estilos para los encabezados (TH) */
            th {
            background-color: blue;
            color: white;
            font-size: 1.2em;
            text-align: left;
            padding: 10px;
            border: 2px solid red;
            }

            /* Estilos para los registros (TD) */
            td {
            border: 2px solid red;
            padding: 10px;
            }

            /* Estilos para las filas impares */
            tr:nth-child(odd) {
            background-color: #f2f2f2;
            }
        </style>
    </head>
    <body class="text-align">
        <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Producto</th>
                <th>Descripcion</th>
                <th>Existencias
                    <br>iniciales</th>
                <th>Entradas</th>
                <th>Salidas</th>
                <th>Stock</th>
                <th>Costo_unidad</th>
                <th>CMV</th>
                <th>Costo_total
                    <br>inventario</th>
              </tr> 
            </thead>
            <tbody>
              <?php
                // Aquí iría la lógica para obtener los datos de la tabla desde la base de datos o algún otro origen de datos
                $datos = [
                  ["001", "Producto 1", "Descripcion 1", 100, 50, 25, 125, 10.5, 750, 1312.5],
                  ["002", "Producto 2", "Descripcion 2", 200, 100, 75, 225, 8.75, 1312.5, 1968.75],
                  ["003", "Producto 3", "Descripcion 3", 150, 75, 50, 175, 12.25, 919.5, 2146.25]
                ];
          
                foreach ($datos as $fila) {
                  echo "<tr>";
                  echo "<td>" . $fila[0] . "</td>";
                  echo "<td>" . $fila[1] . "</td>";
                  echo "<td>" . $fila[2] . "</td>";
                  echo "<td>" . $fila[3] . "</td>";
                  echo "<td>" . $fila[4] . "</td>";
                  echo "<td>" . $fila[5] . "</td>";
                  echo "<td>" . $fila[6] . "</td>";
                  echo "<td>" . $fila[7] . "</td>";
                  echo "<td>" . $fila[8] . "</td>";
                  echo "<td>" . $fila[9] . "</td>";
                  echo "</tr>";
                }
              ?>
            </tbody>
          </table>
        
    </body>
</html>
@stop