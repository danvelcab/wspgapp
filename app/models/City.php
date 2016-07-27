<?php

class City extends Eloquent {

	protected $table = 'cities';
	public $timestamps = true;

	public function users()
	{
		return $this->hasMany('User');
	}

	public function messages()
	{
		return $this->hasMany('Message');
	}

	public function attacks()
	{
		return $this->hasMany('Attack');
	}

	public function sightings()
	{
		return $this->hasMany('Sighting');
	}

	public function province()
	{
		return $this->belongsTo('Province');
	}
}