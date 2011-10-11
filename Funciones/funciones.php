<?php
	function fConnect()
	{
		$host = "DIEGO-566EF7A94";
		$user = "sa";
		$pass = "uno";
		$rConnect = mssql_connect($host, $user, $pass) or die ("Unable to connect!");

		return $rConnect;
	}

	function fBaseDatos($psqlcon, $pbasedatos)
	{		if ($psqlcon > 0)
			$rBaseDatos = mssql_select_db($pbasedatos,$psqlcon);
		else
			$rBaseDatos = "e";

		return $rBaseDatos;
	}

?>