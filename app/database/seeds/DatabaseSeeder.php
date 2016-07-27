<?php

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$this->call('TeamTableSeeder');
		$this->command->info('Team table seeded!');
	}
}