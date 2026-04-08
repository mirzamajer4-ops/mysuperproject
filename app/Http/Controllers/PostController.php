<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB; // подключаем фасад DB
	
	class PostController extends Controller
	{
		public function show()
		{
            $users = DB::table('users')->get();
            dump($posts);
			
		}
	}
?>


