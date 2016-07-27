<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePokemonsTable extends Migration {

	public function up()
	{
		Schema::create('pokemons', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('pokemons');
	}
}