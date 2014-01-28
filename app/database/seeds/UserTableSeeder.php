// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Admin',
			'username' => 'Admin',
			'email'    => 'admin@helloworldperu.com',
			'password' => Hash::make('4dm1n'),
		));
	}

}