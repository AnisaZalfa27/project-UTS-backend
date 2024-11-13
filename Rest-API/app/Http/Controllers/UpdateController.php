<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function getDetailsResource($id)
    {
        $updates = updates::find($id);
        if ($updates) {
            return response()->json([
                'message' => 'getDetailsResource',
                'data' => $news,
                'status_code' => 200
            ], 200);
        }

        return response()->json([
            'message' => 'Resource not found',
            'status_code' => 404
        ], 404);
    }
}
