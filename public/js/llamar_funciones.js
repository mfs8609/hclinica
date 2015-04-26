$(document).ready(function(){

	api = 'http://h-clinica-2.herokuapp.com/';
	//api = 'http://localhost:8000/';

	cargarItems();
	enviarAnotacion();
	cargarAnotaciones();
	//autocompletarItems();
});