<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSightingsTable extends Migration {

	public function up()
	{
		Schema::create('sightings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('place');
			$table->integer('pokemon_id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->integer('team_id')->unsigned();
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('sightings');
	}
}