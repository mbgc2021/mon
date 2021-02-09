<?php 
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Ventas.php";


	$obj = new ventas();

	$datos = $obj->obtenDatosEstudio($_POST['idestudio']);

	if ($datos != 0) {
		echo json_encode($datos);
	} else {
		echo "0";
	}

	

 ?>