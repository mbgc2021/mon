<?php 

class ventas{
	public function obtenDatosEstudio($idestudio){

		$c=new conectar();
		$conexion=$c->conexion();
		$sql="SELECT id_categoriaEst,
		clave,
		nombreEst,
		condicionPaciente,
		costo 
		FROM estudio WHERE id_estudio='$idestudio'";

		$result = mysqli_query($conexion, $sql);

		$existeDatos = mysqli_num_rows($result);

		if ($existeDatos > 0) {
		$result=mysqli_query($conexion,$sql);
		$ver=mysqli_fetch_row($result);

		$datos = array(  
			'id_categoriaEst' =>$ver[0], 
			'clave' =>$ver[1],
			'condicionPaciente' =>$ver[3],
			'costo' =>$ver[4]
		);
	return $datos;
		} else {
			$datos = 0;
		}
		

}
	
	public function crearVenta() {
		$c = new conectar();
		$conexion = $c->conexion();

		$fecha = date('Y-m-d');
		$idventa = self::creaFolio();
		$datos = $_SESSION['tablaComprasTemp'];
		$idusuario = $_SESSION['iduser'];
		$r = 0;

		for ($i = 0; $i < count($datos) ; $i ++) { 	
			$d = explode("||", $datos[$i]);
			$sql = "INSERT INTO ventas (id_venta,
			id_cliente,
			id_estudio,
			id_usuario,
			precio,
			fechaCompra) 
			VALUES ('$idventa',
			'$d[5]',
			'$d[0]',
			'$idusuario',
			'$d[3]',
			'$fecha')";
			$result = mysqli_query($conexion, $sql);
			$r = $r + $result;
			
		}

		return $r;
	}

	public function creaFolio(){
		$c= new conectar();
		$conexion=$c->conexion();

		$sql="SELECT id_venta from ventas group by id_venta desc";

		$resul=mysqli_query($conexion,$sql);
		$id=mysqli_fetch_row($resul)[0];

		if($id=="" or $id==null or $id==0){
			return 1;
		}else{
			return $id + 1;
		}
	}


	public function nombreCliente($idCliente){
		$c= new conectar();
		$conexion=$c->conexion();

		$sql="SELECT apellidoPat,nombre 
		FROM clientes 
		WHERE id_cliente='$idCliente'";

		$result=mysqli_query($conexion,$sql);
		$existeDatos = mysqli_num_rows($result);
		if ($existeDatos > 0) {

			$ver=mysqli_fetch_row($result);

			return $ver[0]." ".$ver[1];
		} else {
			$ver = 0;
		}
	}

	public function obtenerTotal($idventa){
		$c= new conectar();
		$conexion=$c->conexion();

		$sql="SELECT precio 
		FROM ventas 
		WHERE id_venta='$idventa'";
		$result=mysqli_query($conexion,$sql);

		$total=0;

		while($ver=mysqli_fetch_row($result)){
			$total=$total + $ver[0];
		}

		return $total;
	}

	public function estudioCliente($idventa) {
		$c= new conectar();
		$conexion=$c->conexion();

		$sql = "SELECT 
		e.nombreEst as estudio
		FROM
		ventas AS v
		INNER JOIN
		estudio AS e ON v.id_estudio = e.id_estudio
		AND v.id_venta = '$idventa'";
		$result = mysqli_query($conexion, $sql);

		$estudios = array();

		while($ver = mysqli_fetch_array($result)) {
			array_push($estudios, $ver['estudio']);
		}

		return $estudios;
	}



	
	
	}














?>