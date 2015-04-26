<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Anotacion extends Model {

	protected $table = 'anotaciones';

	public function item()
	{
		return $this->belongsTo('App\Item');
	}

	public function getNombreAreaAttribute()
	{
		return $this->item->subarea->area->nombre;
	}

	public function getNombreSubareaAttribute()
	{
		return $this->item->subarea->nombre;
	}

	public function getNombreItemAttribute()
	{
		return $this->item->nombre;
	}

}
