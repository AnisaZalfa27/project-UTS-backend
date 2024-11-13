<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index () {
        $resources = [
            ['id' => 1, 'title' => 'Berita Pertama', 'content' => 'Konten berita pertama'],
            ['id' => 2, 'title' => 'Berita Kedua', 'content' => 'Konten berita kedua'],
            ['id' => 3, 'title' => 'Berita Ketiga', 'content' => 'Konten berita ketiga'],
        ];

        // Mengembalikan respons JSON dengan kode status 200
        return response()->json([
            'message' => 'getAllResource',
            'data' => $resources,
            'status_code' => 200
        ], 200);
        
    }
}
