<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(Request $request){
        return redirect()->route('samples', ['lote' => $request->lot, 'muestras' => $request->samples, 'fila' => $request->row, 'columna' => $request->columm]);
    }

    
}

