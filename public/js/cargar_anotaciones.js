function cargarAnotaciones()
{
	var tablaAnotaciones = $('#tblAnotaciones');
	var num = 1;

	$.get(api + 'anotacion/listar', function(data)
	{
		$.each(data, function(key, value){
			tablaAnotaciones.append(
				'<tr>' +
					'<td>' + num + '</td>' +
					'<td>' + value.nombre_area + '</td>' +
					'<td>' + value.nombre_subarea + '</td>' +
					'<td>' + value.nombre_item + '</td>' +
					'<td>' + value.contenido + '</td>' +
				'</tr>'
				);
			num++;
		});

	});
}