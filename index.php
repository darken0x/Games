<html>
	<head>
		<link rel="stylesheet" href="./CSS/general.css" type="text/css"-->
	</head>
	<body>
		<table width='100%' border=`'1'>
			<thead>
				<tr height='30px'>
					<td id='Encabezado' colspan='2'>GAMETROPHY</td>
				</tr>
			</thead>
			<tfoot>
				<tr height='30px'>
					<td id='Pie' colspan='2'>Pie de Pagina</td>
				</tr>
			</tfoot>
			<tr>
				<td width='20%' valign='top' style='background-color: #686767;'>
					<div id='MENU' class='menu' >
						<?php include_once ("menu.php");?>
					</div>
				</td>
				<td width='80%' valign='top'>
					<div id='CONTENIDO'>
						Contenido
					</div>
				</td>
			</tr>
		</table>
	</body>
	<script type="text/javascript" src="./JS/jquery.js"></script>
	<script type="text/javascript" src="./JS/general.js"></script>
	<script type="text/javascript" src="./Catalogos/Status/JS/status.js"></script>
	<script type="text/javascript" src="./Catalogos/Consolas/JS/consolas.js"></script>
</html>