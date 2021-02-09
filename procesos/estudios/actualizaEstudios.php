<?php 
require_once "../../clases/Conexion.php";
require_once "../../clases/Estudios.php";

$obj=new estudios();

$datos= array(
	$_POST['idEstudio'],
$_POST['categoriaSelectU'],
$_POST['claveEstudioU'],
$_POST['estudioU'],
$_POST['listaareaU'],
$_POST['listaTmuestraU'],
$_POST['listarecipienteU'],
$_POST['listaMetodoU'],
$_POST['listaTecnicaU'],
$_POST['condicionespU'],
$_POST['aplicacionesU'],
$_POST['aceptaurgenciaU'],
$_POST['procesoUrgenteU'],
$_POST['procesoNormalU'],
$_POST['costoU']);


echo $obj->actualizaEstudio($datos);

 ?>