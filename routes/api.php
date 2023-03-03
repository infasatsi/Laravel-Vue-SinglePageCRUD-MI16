<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('category', App\Http\Controllers\CategoryController::class)->only(['index', 'store', 'show', 'update', 'destroy']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });