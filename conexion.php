<?php

	class conexion{
		function listar(){

			$host = "localhost";
			$user = "root";
			$pass = "";
			$db = "mem";

			$con = mysql_connect($host, $user, $pass) or die('No se pudo conectar: ' . mysql_error());
			mysql_select_db($db, $con) or die("NO SE ENCONTRO LA BD");

			$query = 'SELECT * FROM instituciones';
			$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

			// Liberar resultados
			//ysql_free_result($result);

			// Cerrar la conexión
			mysql_close($con);

			return $result;
		}
	}

?>