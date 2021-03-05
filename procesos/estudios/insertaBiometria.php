<?php 
session_start();
require_once "../../clases/Conexion.php";
require_once "../../clases/Biometria.php";
	
$obj = new biometria();


 $datos = array(
 	$_POST['idVentaEstudio'], //0
	$_POST['idClienteEstudio'], //1
	$_POST['eritrocitos'], //2
	$_POST['hemoglobina'],//3
	$_POST['hematocrito'],//4
	$_POST['volglobmed'],//5
	$_POST['hemglobmed'],//6
	$_POST['conmedhbglob'],//7
	$_POST['ancdisteritrocito'],//8
	$_POST['plaquetas'],//9
	$_POST['volplaqmed'],//10
	$_POST['leucocitos'],//11
	$_POST['segmentados'],//12
	$_POST['linfocitos'],//13
	$_POST['monocitos'],//14
	$_POST['eosinofilos'],//15
	$_POST['basofilos'],//16
	$_POST['segmen'],//17
	$_POST['linfo'],//18
	$_POST['Mono'],//19
	$_POST['eosin'],//20
	$_POST['basof'],//21
	$_POST['metodobio'],//22
	$_POST['muestrabio'],//23
	$_POST['Observacionesbio']//24
							);

echo $obj-> agregaBiometria($datos);
?>