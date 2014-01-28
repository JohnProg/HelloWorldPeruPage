<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('username');
			$table->string('email');
			$table->string('password');
			$table->timestamps();
		});
        DB::table('users')->insert(
            array(
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@helloworldperu.com',
                'password' => Hash::make('4dm1n'),
            ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}