<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttacksTable extends Migration {

	public function up()
	{
		Schema::create('attacks', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('texto')->nullable();
			$table->text('lugar');
			$table->integer('user_id')->unsigned();
			$table->integer('team_id')->unsigned();
			$table->integer('city_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('attacks');
	}
}