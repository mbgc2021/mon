<?php 
require_once"../../clases/Conexion.php";
require_once "../../clases/Estudios.php";
$obj=new estudios();
$idest=$_POST['idest'];

echo json_encode($obj->obtenDatosEstudio($idest));
 ?>