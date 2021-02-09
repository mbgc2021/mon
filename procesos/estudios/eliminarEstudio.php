<?php 

require_once "../../clases/Conexion.php";
require_once "../../clases/Estudios.php";
$idest=$_POST['idestudio'];

$obj=new estudios();
echo $obj->eliminaEstudio($idest);

 ?>