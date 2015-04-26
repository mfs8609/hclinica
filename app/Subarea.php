<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subarea extends Model {

	public function area()
	{
		return $this->belongsTo('App\Area');
	}

	public function items()
	{
		return $this->hasMany('App\Item');
	}

}
