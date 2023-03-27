@extends('plantilla')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin</title>
        <style>
            .text-align {
               width: 50%; /* Establece el ancho del contenedor */
               margin: left; /* Establece los márgenes izquierdo y derecho como "auto" para centrar el contenedor */
               margin-left: 150px;
               text-align: center; /* Centra el texto dentro del contenedor */
               padding: 240px;
           } 
           table {
               border-collapse: collapse;
               width: 100%;
           }
       
           th, td {
               text-align: left;
               padding: 8px;
           }
       
           th {
               background-color: #f2f2f2;
           }
       
           tr:nth-child(even) {
               background-color: #f2f2f2;
           }
       
           tr:hover {
               background-color: #ddd;
           }
       
           td.actions {
               text-align: center;
           }
       
           .btn {
               background-color: #4CAF50;
               color: white;
               border: none;
               padding: 6px 14px;
               font-size: 14px;
               cursor: pointer;
           }
       
           .btn:hover {
               background-color: #3e8e41;
           }
       </style>
   </head>
   <body class="text-align">
       <table>
           <thead>
             <tr>
               <th>#</th>
               <th>Code</th>
               <th>Name</th>
               <th>Rol</th>
               <th>Created at</th>
               <th>Department</th>
               <th>Status</th>
               <th>Actions</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>1</td>
               <td>4527</td>
               <td>Vera Carpenter</td>
               <td>Admin</td>
               <td>Jan 21, 2020</td>
               <td>Departamento de Ventas</td>
               <td>Active</td>
               <td class="actions">
                   <a href="#" class="btn">Editar</a>
                   <a href="#" class="btn">Eliminar</a>
               </td>
             </tr>
             <tr>
               <td>2</td>
               <td>2834</td>
               <td>John Smith</td>
               <td>User</td>
               <td>Feb 14, 2020</td>
               <td>Departamento de Marketing</td>
               <td>Inactive</td>
               <td class="actions">
                   <a href="#" class="btn">Editar</a>
                   <a href="#" class="btn">Eliminar</a>
               </td>
             </tr>
             <tr>
               <td>3</td>
               <td>1269</td>
               <td>Mary Johnson</td>
               <td>User</td>
               <td>Mar 8, 2020</td>
               <td>Departamento de Finanzas</td>
               <td>Active</td>
               <td class="actions">
                   <a href="#" class="btn">Editar</a>
                   <a href="#" class="btn">Eliminar</a>
               </td>
             </tr>
           </tbody>
         </table>
   </body>
</html>
@stop