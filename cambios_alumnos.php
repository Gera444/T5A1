<?php

	$conexion = mysqli_connect("localhost", "root", "", "escuela_prog_web") or die(mysql_error()) ;

	$respuesta = array();

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

		$sql = "UPDATE alumnos SET $e = 'e' WHERE $e = 'e'" ;
		$resultado = mysqli_query($conexion, $sql);
			//('$nc', '$n', '$pa', '$sa', $e, $s, '$c') WHERE ('$nc', '$n', '$pa', '$sa', $e, $s, '$c')


		if ($resultado) {
			$respuesta['exito'] = 1;
			$respuesta['msj'] = "Inserccion correcta";
			json_encode($respuesta);
			echo json_encode($respuesta);
		}else{
			$respuesta['exito'] = 0;
			$respuesta['msj'] = "Error en la inserccion";
			json_encode($respuesta);
			echo json_encode($respuesta);
		}

	} 
?>