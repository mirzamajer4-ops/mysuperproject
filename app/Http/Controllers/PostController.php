<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; 
use App\Http\Controllers\Controller;

class PostController extends Controller
	{
		public function show()
		{
			$posts = DB::table('posts')->get();
			return view('post.show', ['post' => $posts]);
		}
	}


