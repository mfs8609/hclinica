function cargarItems(){

	$('#selectSubarea').prop('disabled', true);
	$('#selectItem').prop('disabled', true);
	$('#contenido').prop('disabled', true);
	$('#btnAgregar').prop('disabled', true);

	$.get(api + 'area', function(data)
		{
			$.each(data, function(key, value){
				$('#selectArea').append('<option value =' + value.id + '>' + value.nombre + '</option>');
			});
		});

	$('#selectArea').on('change', function(){
		
		$('#selectSubarea').empty();
		$('#selectItem').empty();
		$('#selectItem').prop('disabled', true);
		$('#selectSubarea').append('<option value = 0> -- </option>');
		var area_id = $('#selectArea').val();
		$.get(api + 'subarea/' + area_id, function(data)
		{
			$.each(data, function(key, value){
				$('#selectSubarea').append('<option value =' + value.id + '>' + value.nombre + '</option>');
			});
		});
		$('#selectSubarea').prop('disabled', false);
	});

	$('#selectSubarea').on('change', function(){
		
		$('#selectItem').empty();
		$('#selectItem').append('<option value = 0> -- </option>');
		var subarea_id = $('#selectSubarea').val();
		$.get(api + 'item/' + subarea_id, function(data)
		{
			$.each(data, function(key, value){
				$('#selectItem').append('<option value =' + value.id + '>' + value.nombre + '</option>');
			});
		});
		$('#selectItem').prop('disabled', false);
	});

	$('#selectItem').on('change', function(){
		$('#contenido').prop('disabled', false);
	});

	$('#contenido').on('focus', function(){
		$('#btnAgregar').prop('disabled', false);
	});
}

function limpiar()
{
	$('#selectItem').empty();
	$('#selectItem').prop('disabled', true);

	$('#selectSubarea').empty();
	$('#selectSubarea').prop('disabled', true);

	$('#contenido').val('');
	$('#contenido').prop('disabled', true);

	$('#btnAgregar').prop('disabled', true);

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