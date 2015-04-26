<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Anotacion;
use Input;

class AnotacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function listar()
	{
		$anotaciones = Anotacion::get();
		$arrAnotaciones = array();

		foreach ($anotaciones as $anotacion) 
		{
			array_push($arrAnotaciones, 
				array(
					'nombre_area' => $anotacion->nombre_area,
					'nombre_subarea' => $anotacion->nombre_subarea,
					'nombre_item' => $anotacion->nombre_item,
					'contenido' => $anotacion->contenido
					)
				);
			
		}

		return $arrAnotaciones;
	}


	public function index()
	{
		$anotaciones = Anotacion::get();
		return view('evaluaciones.show', compact('anotaciones'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$contenido = Input::get('contenido');
		$item_id = Input::get('item_id');
		$a = new Anotacion();
		$a->contenido = $contenido;
		$a->item_id = $item_id;
		
		if($a->save())
			return 'success';
		else
			return 'fail';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
