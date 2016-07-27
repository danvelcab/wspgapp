<?php

class Message extends Eloquent {

	protected $table = 'messages';
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