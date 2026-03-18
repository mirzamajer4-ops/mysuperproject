<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PostController;

Route::get('/user', action: [PostController::class, 'show']);


