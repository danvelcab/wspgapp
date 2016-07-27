<?php

class TeamTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('teams')->delete();

		// Azul
		Team::create(array(
				'name' => 'azul'
			));

		// Rojo
		Team::create(array(
				'name' => 'rojo'
			));

		// Amarillo
		Team::create(array(
				'name' => 'amarillo'
			));
	}
}