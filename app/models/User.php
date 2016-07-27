<?php

class User extends Eloquent {

	protected $table = 'users';
	public $timestamps = true;

	public function attacks()
	{
		return $this->hasMany('Attack');
	}

	public function city()
	{
		return $this->belongsTo('City');
	}

	public function messages()
	{
		return $this->hasMany('Message');
	}

	public function sightings()
	{
		return $this->hasMany('Sighting');
	}

}