<?php 


class estudios{
	
	public function insertaEstudio($datos){
		$c=new conectar();
		$conexion=$c->conexion();
		$fecha=date('Y-m-d');

		$sql="INSERT into estudio (id_categoriaEst,
		id_usuario,
		clave,
		nombreEst,
		area,
		tipo,
		recipiente,
		metodo,
		tecnica,
		condicionPaciente,
		aplicaciones,
		aceptaUrgencias,
		numDiasProcUrgenteU,
		numDiasProcUrgenteN,
		costo,
		fechaCaptura) values ('$datos[0]',
		'$datos[1]',
		'$datos[2]',
		'$datos[3]',
		'$datos[4]',
		'$datos[5]',
		'$datos[6]',
		'$datos[7]',
		'$datos[8]',
		'$datos[9]',
		'$datos[10]',
		'$datos[11]',
		'$datos[12]',
		'$datos[13]',
		'$datos[14]',
		'$fecha')";

		return mysqli_query($conexion, $sql);
	}
	public function obtenDatosEstudio($idestudio){
		$c=new conectar();
		$conexion=$c->conexion();

		$sql="SELECT id_estudio,
		id_categoriaEst,
		clave,		
		nombreEst,			
		area,		
		tipo,		
		recipiente,		
		metodo,			
		tecnica,		
		condicionPaciente,				
		aplicaciones,			
		aceptaUrgencias,			
		numDiasProcUrgenteU,	
		numDiasProcUrgenteN,		
		costo 
		from estudio where id_estudio='$idestudio'";			
		$result=mysqli_query($conexion,$sql);

		$ver=mysqli_fetch_row($result);
		
		$datos=array("id_estudio" =>$ver[0] ,
			"id_categoriaEst" =>$ver[1] ,
			"clave" =>$ver[2] ,
			"nombreEst" =>$ver[3] ,
			"area" =>$ver[4] ,
			"tipo" =>$ver[5] ,
			"recipiente" =>$ver[6] ,
			"metodo" =>$ver[7] ,
			"tecnica" =>$ver[8] ,
			"condicionPaciente" =>$ver[9] ,
			"aplicaciones" =>$ver[10] ,
			"aceptaUrgencias" =>$ver[11] ,
			"numDiasProcUrgenteU" =>$ver[12] ,
			"numDiasProcUrgenteN" =>$ver[13] ,
			"costo" =>$ver[14]
		);
		return $datos;
	}
	
	public function actualizaEstudio($datos){

		$c=new conectar();
		$conexion=$c->conexion();

		
		$sql="UPDATE estudio set id_categoriaEst='$datos[1]',
		clave='$datos[2]',
		nombreEst='$datos[3]',
		area='$datos[4]',
		tipo='$datos[5]',
		recipiente='$datos[6]',
		metodo='$datos[7]',
		tecnica='$datos[8]',
		condicionPaciente='$datos[9]',
		aplicaciones='$datos[10]',
		aceptaUrgencias='$datos[11]',
		numDiasProcUrgenteU='$datos[12]',
		numDiasProcUrgenteN='$datos[13]',
		costo='$datos[14]'
		where id_estudio='$datos[0]'";

	return mysqli_query($conexion,$sql);

	}
	public function eliminaEstudio($idestudio){
		$c=new conectar();
		$conexion=$c->conexion();

		$sql= "DELETE from estudio where id_estudio='$idestudio'";

		return mysqli_query($conexion,$sql);

	}
}

?>