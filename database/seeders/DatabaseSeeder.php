<?php
	use Illuminate\Support\Facades\Hash;
	
	class DatabaseSeeder extends Seeder
	{
		public function run()
		{
			DB::table('users')->insert([
				'name' => Str::random(10),
				'email' => Str::random(10).'@gmail.com',
				'password' => Hash::make('12345'),

			]);
		}
	}
?>

