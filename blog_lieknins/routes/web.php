<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, "index"]);

Route::get('/show/{id}', [PostController::class, "show"]);

Route::get('/create', [PostController::class, "create"]);

Route::post('/store', [PostController::class, "store"]);