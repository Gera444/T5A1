<?php

	$conexion = mysqli_connect("localhost", "root", "", "escuela_prog_web") or die(mysql_error()) ;

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		$cadena_json = file_get_contents('php://input');

		$datos = json_decode($cadena_json ,true);

		$nc = $datos['nc'];
		$n = $datos['n'];
		$pa = $datos['pa'];
		$sa = $datos['sa'];
		$e  = $datos['e'];
		$s  = $datos['s'];
		$c = $datos['c'];

		$sql = "DELETE FROM alumnos WHERE $nc = 'nc";
		$resultado = mysqli_query($conexion, $sql);
	}

?>