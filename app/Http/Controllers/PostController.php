<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // подключаем фасад DB

class PostController extends Controller
{
	public function show()
	{
		$posts = DB::table('posts')
			->take(5)
			->get();

		dump($posts);
	}
}
