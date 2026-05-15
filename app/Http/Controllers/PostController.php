<?php

namespace App\Http\Controllers;

use App\Models\Posts;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
	public function index()
	{
		 $posts = Posts::all();

			foreach ($posts as $text) 
    {
  				echo $text;}
		
	}
}	
   

	




