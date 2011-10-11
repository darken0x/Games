function muestraMenu(ID_MENU,URL,TOTSUBMENU)
{
	if (TOTSUBMENU > 0)
	{		if (!$('#DV' + ID_MENU).is(':visible')){			$.ajax({
				type: "POST",
				url: URL,
				data: "ID_MENU="+ID_MENU,
				success: function(data) {
					$('#DV' + ID_MENU).html(data);
					$('#DV' + ID_MENU).show('slow');
				},
				error: function(data) {
					alert('Ocurrio un error');
				}
			});
		}else{
			$('#DV' + ID_MENU).hide('slow');
		};
	}else{		muestraSubmenu(URL);
	}
}

function muestraSubmenu(URL)
{
	$.ajax({
		type: "POST",
		url: URL,
		success: function(data) {
			$('#CONTENIDO').html('');
			$('#CONTENIDO').html(data);
		},
		error: function(data) {
			alert('Ocurrio un error');
		}
	});
}