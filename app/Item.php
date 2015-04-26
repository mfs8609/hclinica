<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	//

	public function subarea()
	{

		return $this->belongsTo('App\Subarea');
	}

	public function anotaciones()
	{
		return $this->hasMany('App\Anotacion');
	}

}
