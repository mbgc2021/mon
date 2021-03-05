<?php 


class clientes{

	public function agregaCliente($datos) {
		$c = new conectar();
		$conexion = $c->conexion();
		$fecha = date('Y-m-d');

		$idusuario = $_SESSION['iduser'];

		$sql = "INSERT into clientes (id_usuario,
									cita,
									nombre,
									apellidoPat,
									apellidoMat,
									fechaNacimiento,
									edad,
									sexo,
									telefono,
									direccion,
									emailPersonal,
									emailMedico,
									medico,
									cause ) 
				values('$idusuario',
						'$datos[0]',
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
						'$datos[12]')";
						
		return mysqli_query($conexion, $sql);
	}

	public function obtenDatosCliente($idcliente){
		$c = new conectar();
		$conexion = $c->conexion();

		$sql = "SELECT id_cliente, 
					cita,
					nombre,
					apellidoPat,
					apellidoMat,
					fechaNacimiento,
					edad,
					sexo,
					telefono,
					direccion,
					emailPersonal,
					emailMedico,
					medico,
					cause 
				FROM clientes 
				WHERE id_cliente = '$idcliente'";

		$result = mysqli_query($conexion, $sql);
		$ver = mysqli_fetch_row($result);
		$datos = array(
						'id_cliente'=> $ver[0], 
						'cita'=> $ver[1],
						'nombre'=> $ver[2],
						'apellidoPat'=> $ver[3],
						'apellidoMat'=> $ver[4],
						'edad'=> $ver[6],
						'fechaNacimiento'=> $ver[5],
						'sexo'=> $ver[7],
						'telefono'=> $ver[8],
						'direccion'=> $ver[9],
						'emailPersonal'=> $ver[10],
						'emailMedico'=> $ver[11],
						'medico'=> $ver[12],
						'cause'=> $ver[13] 
					);
		return $datos;
	}

	public function actualizaCliente($datos) {
		$c = new conectar();
		$conexion = $c->conexion();

		$sql = "UPDATE clientes set cita = '$datos[1]',
									nombre = '$datos[2]',
									apellidoPat = '$datos[3]',
									apellidoMat = '$datos[4]',
									fechaNacimiento = '$datos[6]',
									edad = '$datos[5]',
									sexo = '$datos[7]',
									telefono = '$datos[8]',
									direccion = '$datos[9]',
									emailPersonal = '$datos[10]',
									emailMedico = '$datos[11]',
									medico = '$datos[12]',
									cause = '$datos[13]'
				where id_cliente = '$datos[0]'";

		return mysqli_query($conexion, $sql);
	}


	public function eliminaCliente($idcliente,$idventa) {
		$c = new conectar();
		$conexion = $c->conexion();

		$sql1 = "DELETE from clientes 
				where id_cliente = '$idcliente'";

		$result1 = mysqli_query($conexion, $sql);

		if ($result1) {
			$sql2 = "DELETE from ventas 
					WHERE id_venta = '$idventa'";
			$result2 = mysqli_query($conexion, $sql);
			
		} else {
			return 0;
		}

		//TABLA VENTA, CLIENTES Y ESTUDIO 
	}

}



?>