<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('attacks', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('attacks', function(Blueprint $table) {
			$table->foreign('team_id')->references('id')->on('teams')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('attacks', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->foreign('team_id')->references('id')->on('teams')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sightings', function(Blueprint $table) {
			$table->foreign('pokemon_id')->references('id')->on('pokemons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sightings', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sightings', function(Blueprint $table) {
			$table->foreign('team_id')->references('id')->on('teams')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sightings', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_city_id_foreign');
		});
		Schema::table('attacks', function(Blueprint $table) {
			$table->dropForeign('attacks_user_id_foreign');
		});
		Schema::table('attacks', function(Blueprint $table) {
			$table->dropForeign('attacks_team_id_foreign');
		});
		Schema::table('attacks', function(Blueprint $table) {
			$table->dropForeign('attacks_city_id_foreign');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->dropForeign('messages_team_id_foreign');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->dropForeign('messages_city_id_foreign');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->dropForeign('messages_user_id_foreign');
		});
		Schema::table('sightings', function(Blueprint $table) {
			$table->dropForeign('sightings_pokemon_id_foreign');
		});
		Schema::table('sightings', function(Blueprint $table) {
			$table->dropForeign('sightings_city_id_foreign');
		});
		Schema::table('sightings', function(Blueprint $table) {
			$table->dropForeign('sightings_team_id_foreign');
		});
		Schema::table('sightings', function(Blueprint $table) {
			$table->dropForeign('sightings_user_id_foreign');
		});
	}
}