function fInsertConsolas()
{	$.ajax({
		type: "POST",
		url: "./Catalogos/Consolas/insert.html",
		success: function(data) {
			$('#CONTENIDO').html(data);
		},
		error: function(data) {
			alert('Ocurrio un error');
		}
	});
}

function fRegresaConsolas()
{
	$.ajax({
		type: "POST",
		url: "./Catalogos/Consolas/index.php",
		success: function(data) {
			$('#CONTENIDO').html(data);
		},
		error: function(data) {
			alert('Ocurrio un error');
		}
	});
}

function fAgregarConsolas()
{	var consola = "";
	consola = $('#CONSOLA').val();

	$.ajax({
		type: "POST",
		url: "./Catalogos/Consolas/DAO/insert.php",
		data: "CONSOLA="+consola,
		success: function(data) {			fRegresaConsolas();
		},
		error: function(data) {
			alert('Ocurrio un error');
		}
	});
}