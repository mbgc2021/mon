<?php 

class biometria {
	public function agregaBiometria($datos) {
	
		$c = new conectar();
		$conexion = $c->conexion();

		
		$sql = "INSERT INTO biometria_hematica (id_venta,
 												id_cliente,
 												Eritrocitos,
												Hemoglobina,
												Hematocrito,
												VolumenGlobularM,
												HemogGlobularM,
												ConcMediaHbGlob,
												AnchoDistEritrocitos,
												Plaquetas,
												VolumenPlaqMedio,
												Leucocitos,
												Segmentados1,
												Linfocitos1,
												Monocitos1,
												Eosinofilos1,
												Basofilos1,
												Segmentados2,
												Linfocitos2,
												Monocitos2,
												Eosinofilos2,
												Basofilos2,
												metodo,
												muestra,
												observaciones)  VALUES ('$datos[0]',
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
							                                            '$datos[15]',
							                                            '$datos[16]',
							                                            '$datos[17]',
							                                            '$datos[18]',
							                                            '$datos[19]',
							                                            '$datos[20]',
							                                            '$datos[21]',
							                                            '$datos[22]',
							                                            '$datos[23]',
							                                            '$datos[24]',
							                                            '$datos[25]'
											                                         )";

		return mysqli_query($conexion, $sql);
	}

	/*public function obtenDatosEstudioBiometria($idVenta, $idCliente) {
		$c = new conectar();
		$conexion = $c->conexion();

		$sql = "";

	}*/


}



?>