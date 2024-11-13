<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/new', [IndexController::class, 'index']);
Route::post('/new', [StoreController::class, 'store']);
Route::get('/new/{id}', [ShowController::class, 'show']);
Route::put('/new/{id}', [UpdateController::class, 'update']);
