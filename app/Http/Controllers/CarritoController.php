<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }
    public function mostrar(){
        
        return view('carrito');

    }
}
