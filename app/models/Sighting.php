<?php

class Sighting extends Eloquent {

	protected $table = 'sightings';
	public $timestamps = true;

	public function pokemon()
	{
		return $this->belongsTo('Pokemon');
	}

	public function ciudad()
	{
		return $this->belongsTo('City');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

}