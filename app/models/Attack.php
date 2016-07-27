<?php

class Attack extends Eloquent {

	protected $table = 'attacks';
	public $timestamps = true;

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function city()
	{
		return $this->belongsTo('City');
	}

}