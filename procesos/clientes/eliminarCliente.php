<?php 


require_once "../../clases/Conexion.php";
require_once "../../clases/Clientes.php";

$obj = new Clientes();


echo $obj->eliminaCliente($_POST['idcliente'], $_POST['idventa']);
 ?>