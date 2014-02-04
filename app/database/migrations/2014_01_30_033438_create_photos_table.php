<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function(Blueprint $table)
		{
            $table->engine ='InnoDB';

            $table->increments('id');
            $table->string('model', 30);
            $table->smallInteger('object_id');
            $table->string('file')->nullable();
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
        Schema::drop('photos', function(Blueprint $table)
        {
            Schema:drop('photos');
        });
	}

}