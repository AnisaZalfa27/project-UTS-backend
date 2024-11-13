<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store (Request $request){
       $validateData = $request-> validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            
       ]);

            $new = New::create([

            ]);
    

    }
}
