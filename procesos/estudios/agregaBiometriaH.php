<?php 
session_start();
require_once "../../clases/Conexion.php";
require_once "../../clases/Biometria.php";

/*$datos=$_SESSION['tablaComprasTemp'];
$idusuario=$_SESSION['iduser'];*/
//$idVenta = $_POST['idVentaEstudio'];
//$idCliente = $_POST['idClienteEstudio'];
	
$obj = new biometria();

 $datos = array(
 	$_POST['idVentaEstudio'],
	$_POST['idClienteEstudio'],
	$_POST['eritrocitos'],
	$_POST['hemoglobina'],
	$_POST['hematocrito'],
	$_POST['volglobmed'],
	$_POST['hemglobmed'],
	$_POST['conmedhbglob'],
	$_POST['ancdisteritrocito'],
	$_POST['plaquetas'],
	$_POST['volplaqmed'],
	$_POST['leucocitos'],
	$_POST['segmentados'],
	$_POST['linfocitos'],
	$_POST['monocitos'],
	$_POST['eosinofilos'],
	$_POST['basofilos'],
	$_POST['segmen'],
	$_POST['linfo'],
	$_POST['Mono'],
	$_POST['eosin'],
	$_POST['basof'],
	$_POST['metodo'],
	$_POST['muestra'],
	$_POST['observaciones']
							);

echo $obj-> agregaBiometria($datos);
?>
