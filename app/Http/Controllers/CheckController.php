<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Certificate;

class CheckController extends Controller
{
    function validar(){

        return view('check.validar');

    }

    function resultado(Request $request){

        $cod = $request->cod;

        $search = Certificate::where('check', $cod)->get();

        return view('check.resultado', compact('search'));
        
    }
}
