<?php 
session_start();


require_once "../../clases/Conexion.php";
require_once "../../clases/Clientes.php";
 
 $obj=new clientes();

$datos= array(
	$_POST['idclienteU'],
	$_POST['citaU'],
	$_POST['nombresU'],
	$_POST['apellidopatCU'],
	$_POST['apellidomatCU'],
	$_POST['edadU'],
	$_POST['fechaNacU'],
	$_POST['sexoU'],
	$_POST['notelefonoU'],
	$_POST['direccionU'],
	$_POST['correoPacU'],
	$_POST['correoMedU'],
	$_POST['medicoU'],
	$_POST['causeU']
);

echo $obj->actualizaCliente($datos);

?>
