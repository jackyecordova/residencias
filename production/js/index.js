$(document).ready(function(){
	//enfocar al cargar la pagina
	$('#busqueda').focus()
	//el valor que tenga el input
	$('#buscador').on('Keyup',function  () {
		var search=$('#buscador').val()
		//console.log(search)
		$.ajax({
			type:'POST',
			url: 'php/search.php',
			data:{'buscador':search},
			//
			beforeSend:function(){
				$('#result').html('')
			}
		})
		.done(function(resultado){
			//$('#result').html(resultado)
		})
		.fail(function(){
			alert('No se encuentra en la base de datos')
		})
	})

})
