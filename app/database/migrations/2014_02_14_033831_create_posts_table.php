<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->integer('user_id')->unsigned();	
			$table->foreign('user_id')
      			  ->references('id')->on('users')
      			  ->onDelete('cascade');
			$table->string('title', 800);
			$table->string('slug', 800);
			$table->string('content', 7000);
			$table->string('shortContent', 300);
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
		Schema::drop('posts', function(Blueprint $table)
        {
            Schema:drop('posts');
        });
	}

}
