<?php 
session_start();
$iduser=$_SESSION['iduser'];

require_once "../../clases/Conexion.php";
require_once "../../clases/Estudios.php";
$idusuario=$_SESSION['iduser'];

$obj=new estudios();






/*print_r($datos);*/
$datos = array(
	$_POST['categoriaSelect'],
	$iduser,
	$_POST['claveEstudio'],
	$_POST['estudio'],
	$_POST['listaarea'],
	$_POST['listaTmuestra'],
	$_POST['listarecipiente'],
	$_POST['listaMetodo'],
	$_POST['listaTecnica'],
	$_POST['condicionesp'],
	$_POST['aplicaciones'],
	$_POST['aceptaurgencia'],
	$_POST['procesoUrgente'],
	$_POST['procesoNormal'],
	$_POST['costo']
	
);


		echo $obj-> insertaEstudio($datos);



?>

