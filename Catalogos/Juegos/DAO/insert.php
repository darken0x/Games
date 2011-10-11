<?php include ("../../../Funciones/funciones.php"); ?>
<?php
	$sqlcon = fConnect();
	$basedatos = fBaseDatos($sqlcon, "GameTrophy");
	if ($basedatos == 1)
	{
		$sql = " INSERT INTO C_STATUS VALUES ( ";
		$sql = $sql . "'" . $_REQUEST["STATUS"] . "'" ;
		$sql = $sql . " ) ";
		echo $sql;
		mssql_query($sql);
	}

	mssql_close($sqlcon);
?>