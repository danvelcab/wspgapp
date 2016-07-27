<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('username');
			$table->string('email');
			$table->bigInteger('google_id');
			$table->tinyInteger('team_id');
			$table->integer('city_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}