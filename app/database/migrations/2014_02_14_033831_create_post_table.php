<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->integer('user_id')->unsigned();	
			$table->foreign('user_id')
      			  ->references('id')->on('users')
      			  ->onDelete('cascade');
			$table->string('title');
			$table->string('slug');
			$table->string('content', 7000);
			$table->string('shortContent', 400);
			$table->string('url_image_thumb');
			$table->string('url_image_large');
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
		Schema::drop('post', function(Blueprint $table)
        {
            Schema:drop('post');
        });
	}

}
