<?php
	function fConnect()
	{
		$host = "DIEGO-566EF7A94";
		$user = "sa";
		$pass = "uno";
		$con = mssql_connect($host, $user, $pass) or die ("Unable to connect!");
		return $con;
	}
?>