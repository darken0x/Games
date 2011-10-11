function fInsertStatus()
{	$.ajax({
		type: "POST",
		url: "./Catalogos/Status/insert.html",
		success: function(data) {
			$('#CONTENIDO').html(data);
		},
		error: function(data) {
			alert('Ocurrio un error');
		}
	});
}

function fRegresaStatus()
{
	$.ajax({
		type: "POST",
		url: "./Catalogos/Status/index.php",
		success: function(data) {
			$('#CONTENIDO').html(data);
		},
		error: function(data) {
			alert('Ocurrio un error');
		}
	});
}

function fAgregarStatus()
{	var status = "";
	status = $('#STATUS').val();

	$.ajax({
		type: "POST",
		url: "./Catalogos/Status/DAO/insert.php",
		data: "STATUS="+status,
		success: function(data) {			fRegresaStatus();
		},
		error: function(data) {
			alert('Ocurrio un error');
		}
	});
}