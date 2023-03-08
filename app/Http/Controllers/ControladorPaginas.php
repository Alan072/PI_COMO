<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPaginas extends Controller
{
    function flogin(){
        return view ('login');
        
    }

    function fhome(){
        return view ('home');
        
    }
}
