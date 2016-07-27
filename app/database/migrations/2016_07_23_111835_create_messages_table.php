<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	public function up()
	{
		Schema::create('messages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('texto');
			$table->integer('team_id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('messages');
	}
}