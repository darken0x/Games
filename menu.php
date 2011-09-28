<?php include ("./Funciones/funciones.php"); ?>
<?php
	$sqlcon = fConnect();
	$basedatos = fBaseDatos($sqlcon, "GameTrophy");
	if ($basedatos == 1)
	{
		$sql = fSelecciona("C_MENU","ID_STATUS",1);
		$rsMenu = mssql_query($sql);
	}
	mssql_close($sqlcon);
?>

<table>
	<tr>
		<td>Hola Mundo <?php echo $rsMenu; ?></td>
	</tr>
</table>