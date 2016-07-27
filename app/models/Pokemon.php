<?php

class Pokemon extends Eloquent {

	protected $table = 'pokemons';
	public $timestamps = true;

	public function sightings()
	{
		return $this->hasMany('Sighting');
	}

}