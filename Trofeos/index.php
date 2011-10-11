<?php include ("../Funciones/funciones.php"); ?>
<?php
	$sqlcon = fConnect();
	$basedatos = fBaseDatos($sqlcon, "GameTrophy");
	if ($basedatos == 1)
	{
		$sql = " SELECT ";
		$sql = $sql . " BD_GAMETROPHY.DESCRIPTION ";
		$sql = $sql . " , BD_GAMETROPHY.COMMENTS ";
		$sql = $sql . " , C_TROPHY.IMAGE ";
		$sql = $sql . " FROM BD_GAMETROPHY ";
		$sql = $sql . " INNER JOIN C_TROPHY ON BD_GAMETROPHY.ID_TROPHY = C_TROPHY.ID_TROPHY ";
		$sql = $sql . " WHERE ";
		$sql = $sql . " BD_GAMETROPHY.ID_GAME = 3 ";
		$sql = $sql . " AND BD_GAMETROPHY.ID_STATUS = 1 ";
		$rsTrofeos = mssql_query($sql);
	}

	mssql_close($sqlcon);
?>

<table width='100%'>
	<thead>
		<tr>
			<th width='10%'>&nbsp;</th>
			<th width='20%'>TROFEO</th>
			<th width='70%'>DESCRIPCION</th>
		</tr>
    </thead>
    <tbody>
<?php
		if (mssql_num_rows($rsTrofeos) > 0)
		{			while($colTrofeos = mssql_fetch_assoc($rsTrofeos))
			{?>
     			<tr>
     				<td><img src='<?php echo $colTrofeos["IMAGE"]; ?>' height='25px' width='25px' /></td>
     				<td><?php echo $colTrofeos["DESCRIPTION"]; ?></td>
     				<td><?php echo $colTrofeos["COMMENTS"]; ?></td>
     			</tr>
<?php
			}
		}
		else
		{			echo "<tr><td colspan='2' align='center'>No Hay Registros</td></tr>"	;
		}
?>
    </tbody>
</table>
