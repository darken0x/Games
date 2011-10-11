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
		$sql = $sql . " , ( ";
			$sql = $sql . " SELECT ";
			$sql = $sql . " ISNULL(COUNT(A.ID_MENU),0) ";
			$sql = $sql . " FROM ";
			$sql = $sql . " C_MENU AS A ";
			$sql = $sql . " WHERE ";
			$sql = $sql . " A.ID_MENU = C_MENU.ID_MENU ";
			$sql = $sql . " AND A.ID_SUBMENU <> 0 ";
			$sql = $sql . " AND A.ID_STATUS = 1 ";
			$sql = $sql . " ) AS TOTSUBMENU ";
		$sql = $sql . " FROM C_MENU ";
		$sql = $sql . " WHERE ";
		$sql = $sql . " ID_STATUS = 1 ";
		$sql = $sql . " AND ID_SUBMENU = 0 ";
		$rsMenu = mssql_query($sql);
	}

	mssql_close($sqlcon);
?>
<script>
	function Oculta()
	{	 	alert(1);
	 	$('#MENU').hide('slow');
	 	alert(2);
 	  $("table.zebra").css("width","600%");

	}
</script>
<table border=1>
	<thead>
		<tr height='15px'>
			<td align='right'>
				<span style='cursor:pointer;' onclick='Oculta();'>
					Menu <--
				</span>
			</td>
		</tr>
	</thead>
<?php
	if(mssql_num_rows($rsMenu) > 0)
	{		while($colMenu = mssql_fetch_assoc($rsMenu))
		{?>
     		<tr>
				<td>
					<span onClick='muestraMenu(<?php echo $colMenu["ID_MENU"]?>,"<?php echo $colMenu["URL"]?>",<?php echo $colMenu["TOTSUBMENU"]?>);' style='cursor:pointer;'>
						<?php echo $colMenu["DESCRIPTION"]; ?>
					</span>
					<div id=<?php echo "DV" . $colMenu["ID_MENU"]?> style='display:none;'></div>
				</td>
     		</tr>
<?php
		}
	}
?>
</table>