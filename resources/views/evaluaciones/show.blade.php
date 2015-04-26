@extends('layout')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Items de Evaluación</div>

				<div class="panel-body">
					
					<label for="selectArea">Área</label>
					<select name="" id="selectArea" class="form-control">
						<option value="0">--</option>						
					</select>

					<br>
					<label for="selectSubarea">Subárea</label>
					<select name="" id="selectSubarea" class="form-control">
					</select>

					<br>
					<label for="selectItem">Item</label>
					<select name="" id="selectItem" class="form-control">

					</select>

					<br>
					<label for="contenido">Anotación</label>
					<textarea class="form-control" id="contenido"></textarea>

					<br>
					<button class="btn btn-primary pull-right" id="btnAgregar">Agregar</button>

				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
				<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
						<th>#</th>
						<th>Area</th>
						<th>Subarea</th>
						<th>Item</th>
						<th>Anotación</th>
					</thead>
					<tbody id="tblAnotaciones">

					</tbody>
				</table>
				</div>

		</div>
	</div>

</div>

<script>$_token = "{{ csrf_token() }}"</script>
<script src="{{ asset('/js/enviar_anotacion.js') }}"></script>
<script src="{{ asset('/js/cargar_anotaciones.js') }}"></script>
<script src="{{ asset('/js/cargar_items.js') }}"></script>
<script src="{{ asset('/js/llamar_funciones.js') }}"></script>

@endsection