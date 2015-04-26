<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		$this->call('AreaTableSeeder');
		$this->call('SubareaTableSeeder');
		$this->call('ItemTableSeeder');
	}

}

class AreaTableSeeder extends Seeder {

	public function run()
	{
		DB::table('areas')->delete();
		DB::table('sqlite_sequence')->delete();

		App\Area::create(array('nombre' => 'Psicomotricidad')); //1
		App\Area::create(array('nombre' => 'Sensopercepción')); //2
		App\Area::create(array('nombre' => 'Lenguaje')); //3
		App\Area::create(array('nombre' => 'Habla')); //4
	}
}

class SubareaTableSeeder extends Seeder {

	public function run()
	{
		DB::table('subareas')->delete();

		App\Subarea::create(array('nombre' => 'Conciencia corporal', 'area_id' => '1')); //1
		App\Subarea::create(array('nombre' => 'Percepción visual', 'area_id' => '2')); //2
		App\Subarea::create(array('nombre' => 'Percepción auditiva', 'area_id' => '2')); //3
		App\Subarea::create(array('nombre' => 'Lenguaje oral', 'area_id' => '3')); //4
		App\Subarea::create(array('nombre' => 'Postura corporal', 'area_id' => '4')); //5
		App\Subarea::create(array('nombre' => 'Postura facial', 'area_id' => '4')); //6
	}
}

class ItemTableSeeder extends Seeder {

	public function run()
	{
		DB::table('items')->delete();

		App\Item::create(array('nombre' => 'Coordinación dinámica general', 'subarea_id' => '1'));
		App\Item::create(array('nombre' => 'Coordinación estática o equilibrio', 'subarea_id' => '1'));
		App\Item::create(array('nombre' => 'Coordinación dinámica manual', 'subarea_id' => '1'));
		App\Item::create(array('nombre' => 'Concepto corporal', 'subarea_id' => '1'));
		App\Item::create(array('nombre' => 'Lateralidad', 'subarea_id' => '1'));
		App\Item::create(array('nombre' => 'Coordinación visomotriz', 'subarea_id' => '2'));
		App\Item::create(array('nombre' => 'Figura fondo', 'subarea_id' => '2'));
		App\Item::create(array('nombre' => 'Constancia perceptual', 'subarea_id' => '2'));
		App\Item::create(array('nombre' => 'Fijación y seguimiento visual', 'subarea_id' => '2'));
		App\Item::create(array('nombre' => 'Memoria visual', 'subarea_id' => '2'));
		App\Item::create(array('nombre' => 'Análisis y sintesis visual', 'subarea_id' => '2'));
		App\Item::create(array('nombre' => 'Ausencia - Presencia del sonido', 'subarea_id' => '3'));
		App\Item::create(array('nombre' => 'Ubicación de la fuente sonora', 'subarea_id' => '3'));
		App\Item::create(array('nombre' => 'Nivel pragmático', 'subarea_id' => '4'));
		App\Item::create(array('nombre' => 'Nivel semántico', 'subarea_id' => '4'));
		App\Item::create(array('nombre' => 'Nivel sintáctico', 'subarea_id' => '4'));
		App\Item::create(array('nombre' => '', 'subarea_id' => '5'));
		App\Item::create(array('nombre' => '', 'subarea_id' => '6'));

	}
}
