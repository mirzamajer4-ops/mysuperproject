<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
	public function show()
	{
		$user = DB::table('posts')->get();
		dump($user);
	}
}


