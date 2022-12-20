<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Event;

class EventController extends Controller
{
    function create(){
        
        return view('events.create');

    }

    function store(Request $request){

        echo $request->name;

        Event::create([
            'name' => $request->name,
            
        ]);

    }
}
