<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
		    $table->increments('id');
            $table->string('name', 40);
            $table->string('email', 40);
            $table->string('subject');
            $table->text('message');
            $table->boolean('status')->default(1);
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('comments', function(Blueprint $table)
        {
            Schema:drop('comments');
        });
    }

}