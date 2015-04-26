function enviarAnotacion()
{
	$('#btnAgregar').on('click', function(){

		var datos = {contenido: $('#contenido').val(), item_id: $('#selectItem').val(), _token: $_token}

		$.post(api + 'anotacion', datos, function(result){
			//location.reload(true);
			alert('Anotación agregada');
			$('#tblAnotaciones').empty();
			cargarAnotaciones();
			limpiar();
		});

	});
}