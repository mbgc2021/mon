<?php 

require_once "../../clases/Conexion.php";
require_once "../../clases/Usuarios.php";

$obj= new usuarios();

$pass=sha1($_POST['password']);


$datos=array(

	$_POST['nombre'],
	$_POST['apellidop'],
	$_POST['apellidom'], 
	$_POST['usuario'],
	$_POST['listaTipou'],
	$pass,
	$_POST['cedulaprof']);
echo $obj -> registroUsuario($datos);



?>