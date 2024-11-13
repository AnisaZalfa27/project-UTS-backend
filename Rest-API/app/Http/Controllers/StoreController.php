<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Laravel\Sanctum\NewAccessToken;

class StoreController extends Controller
{
<<<<<<< HEAD
    public function store(Request $request) {
=======
   public function store(Request $request) {
>>>>>>> fa1e09bd1d33b54edcb5039b4884caed3623987a

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
