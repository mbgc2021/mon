<?php 

session_start();

require_once "../../clases/Conexion.php";
require_once "../../clases/Biometria.php";


$idestudio=$_POST['id_estudio'];
$idventa=self::creaFolio();
$datos=$_SESSION['tablaComprasTemp'];
$idusuario=$_SESSION['iduser'];
$idCliente=$_POST['id_cliente'];

$obj=new biometria();
print_r($datos);
$datos = array(
	$idventa,
	$idCliente,
	$idestudio,
	$iduser,
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
	$_POST['observaciones']);

echo $obj-> agregaBiometria($datos);



?>