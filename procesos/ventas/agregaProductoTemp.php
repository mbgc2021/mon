<?php 
session_start();
require_once "../../clases/Conexion.php";
$c=new conectar();
$conexion=$c->conexion();

$idcliente=$_POST['clienteVenta'];	
$idestudio=$_POST['estudioVenta'];	
$nomest=$_POST['nomestudioV'];	
$cond=$_POST['condicionespV'];	
$costo=$_POST['costoV'];	

$sql="SELECT nombre,
apellidoPat
 from clientes 
where id_cliente='$idcliente'";
$result=mysqli_query($conexion,$sql);

$c=mysqli_fetch_row($result);


$ncliente=$c[0]." ".$c[1];

$sql="SELECT nombreEst 
from estudio 
where id_estudio='$idestudio'";

$result=mysqli_query($conexion,$sql);
$nombreestudio=mysqli_fetch_row($result)[0];


$estudio=$idestudio."||".
$nombreestudio."||".
$cond."||".
$costo."||".
$ncliente."||".
$idcliente;

$_SESSION['tablaComprasTemp'][]=$estudio;




 ?>