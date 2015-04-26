function cargarAreas()
{

	$.get(api + 'area', function(data)
		{
			$.each(data, function(key, value){
				$('#selectArea').append('<option value =' + value.id + '>' + value.nombre + '</option>');
			});

			var area_id = $('#selectArea').val();
			$.get(api + 'subarea/' + area_id, function(data)
			{
				$.each(data, function(key, value){
					$('#selectSubarea').append('<option value =' + value.id + '>' + value.nombre + '</option>');
				});

				var subarea_id = $('#selectSubarea').val();
				$.get(api + 'item/' + subarea_id, function(data)
				{
					$.each(data, function(key, value){
						$('#selectItem').append('<option value =' + value.id + '>' + value.nombre + '</option>');
					});
				});

			});

		});

}
function cargarItems(){

	$('#btnAgregar').prop('disabled', true);

	cargarAreas();

	$('#selectArea').on('change', function(){
		
		$('#selectSubarea').empty();
		$('#selectItem').empty();

		var area_id = $('#selectArea').val();
		$.get(api + 'subarea/' + area_id, function(data)
		{
			$.each(data, function(key, value){
				$('#selectSubarea').append('<option value =' + value.id + '>' + value.nombre + '</option>');
			});

			$('#selectItem').empty();
			var subarea_id = $('#selectSubarea').val();
			$.get(api + 'item/' + subarea_id, function(data)
			{
				$.each(data, function(key, value){
					$('#selectItem').append('<option value =' + value.id + '>' + value.nombre + '</option>');
				});
			});
		});
	});

	$('#selectSubarea').on('change', function(){
		
		$('#selectItem').empty();
		var subarea_id = $('#selectSubarea').val();
		$.get(api + 'item/' + subarea_id, function(data)
		{
			$.each(data, function(key, value){
				$('#selectItem').append('<option value =' + value.id + '>' + value.nombre + '</option>');
			});
		});
	});

	$('#contenido').on('focus', function(){
		$('#btnAgregar').prop('disabled', false);
	});
}

function limpiar()
{
	$('#selectArea').val('1');
	$('#selectItem').empty();
	//$('#selectItem').prop('disabled', true);

	$('#selectSubarea').empty();
	//$('#selectSubarea').prop('disabled', true);

	$('#contenido').val('');
	//$('#contenido').prop('disabled', true);

	$('#btnAgregar').prop('disabled', true);
	cargarAreas();

}

function autocompletarItems()
{
	var items = [];
	$.get(api + 'item/all', function(data)
		{
			$.each(data, function(key, value)
				{
					items.push(value.nombre);
				});

			$('#txtBuscarItem').autocomplete(
				{
      				source: items
    			});
		});
}