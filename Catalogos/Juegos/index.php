<?php include ("../../Funciones/funciones.php"); ?>
<?php
	$sqlcon = fConnect();
	$basedatos = fBaseDatos($sqlcon, "GameTrophy");
	if ($basedatos == 1)
	{
		$sql = " SELECT ";
		$sql = $sql . " ID_STATUS ";
		$sql = $sql . " , DESCRIPTION ";
		$sql = $sql . " FROM C_STATUS ";
		$rsStatus = mssql_query($sql);
	}

	mssql_close($sqlcon);
?>

<table width='100%'>
	<thead>
		<tr>
			<th width='20%'>ID STATUS</th>
			<th width='80%'>DESCRIPTION</th>
		</tr>
    </thead>
    <tfoot>
	    <tr>
			<td>&nbsp;</td>
	      	<td align='right' style='cursor:pointer;'>
	      		<span onClick='fInsertStatus();'>
	      			Agregar
	      		</span>
	      	</td>
	    </tr>
  	</tfoot>
    <tbody>
<?php
		if (mssql_num_rows($rsStatus) > 0)
		{			while($colStatus = mssql_fetch_assoc($rsStatus))
			{?>
     			<tr>
     				<td><?php echo $colStatus["ID_STATUS"]; ?></td>
     				<td><?php echo $colStatus["DESCRIPTION"]; ?></td>
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
