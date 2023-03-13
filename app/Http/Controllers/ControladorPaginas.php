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

    function entrada(){
        return view ('entrada');
        
    }

    function entrada2(){
        return view ('entrada');
        
    }
}