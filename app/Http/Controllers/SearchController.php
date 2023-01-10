<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Monitor;
use App\Models\Participant;

class SearchController extends Controller
{
    function index(){
     
        return view('search.index');

    }

    function pesquisa(Request $request){

        $cpf = $request->cpf;

        $guests = Guest::where('cpf', $cpf)->get();
        $monitors = Monitor::where('cpf', $cpf)->get();
        $participants = Participant::where('cpf', $cpf)->get();

        return view('search.results', compact('guests', 'monitors', 'participants'));

    }
}
