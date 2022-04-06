<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function mostrar()
    {
        $productosList = ['Mangos', 'Papel', 'PC', 'Cepillo'];
        $proveedoresList = ['A', 'B', 'P', 'C'];
        
        /*return view('products/index')
        ->with('productosList', $productosList)
        ->with('proveedoresList', $proveedoresList);*/

       return view('products/index', 
       compact('productosList'),
       compact('proveedoresList'));
    }
}
