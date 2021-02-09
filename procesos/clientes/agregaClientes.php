<?php 
session_start();



 require_once "../../clases/Conexion.php";
require_once "../../clases/Clientes.php";
 $obj=new clientes();

$datos= array(
	
	$_POST['cita'],
	$_POST['nombres'],
	$_POST['apellidopatC'],
	$_POST['apellidomatC'],
	$_POST['edad'],
	$_POST['fechaNac'],
	$_POST['sexo'],
	$_POST['notelefono'],
	$_POST['direccion'],
	$_POST['correoPac'],
	$_POST['correoMed'],
	$_POST['medico'],
	$_POST['cause']
);

echo $obj->agregaCliente($datos);

?>
