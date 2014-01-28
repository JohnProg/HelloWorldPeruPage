// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'John Paul',
			'username' => 'johnp_js',
			'email'    => 'john_js@gmail.com',
			'password' => Hash::make('123'),
		));
	}

}