
<?php 

require_once "../../clases/Conexion.php";
require_once "../../clases/Usuarios.php";

$obj=new usuarios;

$datos= array(

	$_POST['idUsuario'], 
	$_POST['nombreU'], 
	$_POST['apellidopU'], 
	$_POST['apellidomU'],
	$_POST['usuarioU'],
	$_POST['listaTipouU'], 
	$_POST['cedulaprofU'],



);


echo $obj->actualizaUsuario($datos);


?> 
