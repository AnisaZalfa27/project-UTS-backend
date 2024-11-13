<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
   public function store(Request $request) {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        $news = news::create([ 
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);
    
        return response()->json([
            'message' => 'Resource added successfully',
            'data' => $news,
            'status_code' => 201
        ], 201);
    }
}
