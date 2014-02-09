<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('autor', 40);
			$table->string('titulo', 40);
			$table->string('texto', 8000);
			$table->string('url_image', 600);
			$table->string('url_video', 600);
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
        Schema::drop('articles', function(Blueprint $table)
        {
            Schema:drop('articles');
        });
	}

}