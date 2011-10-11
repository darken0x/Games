<?php include ("./Funciones/funciones.php"); ?>
<?php
	$sqlcon = fConnect();
	$basedatos = fBaseDatos($sqlcon, "GameTrophy");
	if ($basedatos == 1)
	{
		$sql = " SELECT ";
		$sql = $sql . " ID_MENU ";
		$sql = $sql . " , ID_SUBMENU ";
		$sql = $sql . " , DESCRIPTION ";
		$sql = $sql . " , URL ";
		$sql = $sql . " FROM C_MENU ";
		$sql = $sql . " WHERE ";
		$sql = $sql . " ID_MENU = " . $_REQUEST["ID_MENU"];
		$sql = $sql . " AND ID_SUBMENU <> 0 ";
		$rsSubmenu = mssql_query($sql);
	}

	mssql_close($sqlcon);
?>

<table>
<?php
	if(mssql_num_rows($rsSubmenu) > 0)
	{		while($colSubmenu = mssql_fetch_assoc($rsSubmenu))
		{?>
     		<tr>
				<td>
					<span onClick='muestraSubmenu("<?php echo $colSubmenu["URL"]; ?>")' style='cursor:pointer;'>
						<?php echo $colSubmenu["DESCRIPTION"]; ?>
					</span>
				</td>
     		</tr>
<?php
		}
	}
?>
</table>