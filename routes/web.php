<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PostController;

Route::get('/about', function (post.show) {
   return view('test', ['arr' => [1, 2]]);
});
