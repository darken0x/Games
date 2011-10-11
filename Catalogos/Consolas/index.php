<?php include ("../../Funciones/funciones.php"); ?>
<?php
	$sqlcon = fConnect();
	$basedatos = fBaseDatos($sqlcon, "GameTrophy");
	if ($basedatos == 1)
	{
		$sql = " SELECT ";
		$sql = $sql . " ID_CONSOLE ";
		$sql = $sql . " , DESCRIPTION ";
		$sql = $sql . " FROM C_CONSOLE ";
		$rsConsolas = mssql_query($sql);
	}

	mssql_close($sqlcon);
?>

<table width='100%'>
	<thead>
		<tr>
			<th width='20%'>ID</th>
			<th width='80%'>DESCRIPCION</th>
		</tr>
    </thead>
    <tfoot>
	    <tr>
			<td>&nbsp;</td>
	      	<td align='right' style='cursor:pointer;'>
	      		<span onClick='fInsertConsolas();'>
	      			Agregar
	      		</span>
	      	</td>
	    </tr>
  	</tfoot>
    <tbody>
<?php
		if (mssql_num_rows($rsConsolas) > 0)
		{			while($colConsolas = mssql_fetch_assoc($rsConsolas))
			{?>
     			<tr>
     				<td><?php echo $colConsolas["ID_CONSOLE"]; ?></td>
     				<td><?php echo $colConsolas["DESCRIPTION"]; ?></td>
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
