<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function mostrar(){
        
        return view('carrito');

    }
}
