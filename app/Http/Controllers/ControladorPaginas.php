<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPaginas extends Controller
{
    function flogin(){
        return view ('login');
        
    }

       function flogin2(){
        return view ('login');
        
    }

    function fhome(){
        return view ('home');
        
    }

    function fhome2(){
        return view ('home');
        
    }

    function fentrada(){
        return view ('entrada');
        
    }

    function fentrada2(){
        return view ('entrada');
        
    }

    function fsalida(){
        return view ('salida');
        
    }

    function fadmin(){
        return view ('admin');
        
    }

    function fproductos(){
        return view ('productos');
        
    }

    function ftareas(){
        return view ('tareas');
        
    }

    function finventario(){
        return view ('inventario');
        
    }
}