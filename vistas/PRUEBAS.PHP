
<?php 
session_start();
if(isset($_SESSION['usuario'])){
	//echo  $_SESSION['usuario'];	
	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Estudio</title>
		<?php require_once "menu.php"; ?>
		<style type="text/css">
			
			.row div[class*='col'] { padding: 3px; 
			</style>
		</head>
		<body class="h-100 ">

			<div class="container-fluid ">
				<div class="row h-100">
					<div class="col-xl-12 ">
						<div class="card shadow">
							<div class="card-body">
								<form>
									


									<div class="row" >
										<div class="card">
											<div class="card-header">
												Estudio
											</div>
											<div class="card-body">
												<div class="col-xl" >
													<div class="row">

														<div class="col-sm text-left" >
															<label><b><h5>Estudio</h5></b></label>

														</div>


													</div>

													<div class="row ">
														<div class="col-sm text-left">

															<label><b>Clave:</b></label>

														</div>


														<div class="col-sm text-left">

															<input type="text" class="form-control form-control-sm" id="claveEstudio" name="claveEstudio">
														</div>

													</div>
													<div class="row">
														<div class="col-sm text-left">


															<label><b>Estudio:</b></label>

														</div>


														<div class="col-sm text-left">

															<input type="text" class="form-control form-control-sm" id="estudio" name="estudio">
														</div>

													</div>


													<div class="row">
														<div class="col-sm text-left">


															<label><b>Área:</b></label>

														</div>


														<div class="col-sm">

															<select  class="form-control form-control-sm" id="listaarea" name="listaarea" >

																<option  value="">Selecciona área </option>
																<option   value="Coagulación">Coagulación</option>
																<option  value="Especial">Especial</option>
																<option   value="Hematología">Hematología</option>
																<option  value="Hematología 1">Hematología 1</option>
																<option   value="Inmunología">Inmunología especial</option>
																<option  value="Inmunología rutina">Inmunología rutina</option>
																<option   value="Maquila">Maquila</option>
																<option  value="Microbiología">Microbiología</option>
																<option   value="Parasitología">Parasitología</option>
																<option  value="Química Sanguínea">Química Sanguínea</option>
																<option   value="Uroanálisis">Uroanálisis</option>


															</select>
														</div>

													</div>
													<div class="row">
														<div class="col-sm text-left">


															<label><b>Tipo de muestra:</b></label>

														</div>


														<div class="col-sm">
															<select  class="form-control form-control-sm" id="listaTmuestra" name="listaTmuestra" >

																<option  value="">Selecciona tipo muestra </option>
																<option   value="Sangre Total">Sangre total</option>
																<option  value="Sangre total EDTA">Sangre total EDTA</option>
																<option   value="Sangre citratrada">Sangre citratrada</option>
																<option   value="Suero">Suero</option>
																<option  value="Orina reciente">Orina reciente</option>
																<option   value="Orina 24 hrs">Orina 24 hrs</option>
																<option  value="Plasma">Plasma</option>
																<option   value="Materia fecal">Materia fecal</option>
																<option  value="Moco nasal">Moco nasal</option>	
																<option  value="Raspado conjuntival">Raspado conjuntival</option>
																<option   value="Raspado de piel">Raspado de piel</option>
																<option   value="Raspado endocervical">Raspado endocervical</option>
																<option   value="Raspado perianal">Raspado perianal</option>
																<option   value="Raspado ungeal">Raspado ungeal</option>
																<option   value="Raspado uretral">Raspado uretral</option>
																<option   value="Secreción">Secreción</option>
																<option   value="Secreción bronquial ">Secreción bronquial </option>
																<option   value="Secreción conjuntival">Secreción conjuntival</option>
																<option   value="Secreción de acne">Secreción de acne</option>
																<option   value="Secreción de herida">Secreción de herida</option>
																<option   value="Secreción de PEN-ROSSE">Secreción de PEN-ROSSE</option>
																<option   value="Secreción endocervical">Secreción endocervical</option>
																<option   value="Secreción endocervical-tincion">Secreción endocervical-tincion</option>
																<option   value="Secreción endocervical-tincion">Secreción endocervical-tincion</option>
																<option   value="Secreción endocervical-fresco">Secreción endocervical-fresco</option>
																<option   value="Secreción faringea">Secreción faringea</option>
																<option   value="Secreción nasal">Secreción nasal</option>
																<option   value="Secreción ocular para citologia">Secreción ocular para citologia</option>
																<option   value="Secreción ocular para cultivo">Secreción ocular para cultivo</option>
																<option   value="Secreción otica">Secreción otica</option>
																<option   value="Secreción uretral para cultivo">Secreción uretral para cultivo</option>
																<option   value="Secreción otica">Secreción otica</option>
																<option   value="Secreción uretral-fresco">Secreción uretral-fresco</option>
																<option   value="Secreción uretral-tincion">Secreción uretral-tincion</option>
																<option   value="Secreción vaginal">Secreción vaginal</option>
																<option   value="Secreción vaginal-tincion">Secreción vaginal-tincion</option>
																<option   value="Secreción vaginal-fresco">Secreción vaginal-fresco</option>
																<option   value="Secreción vulvo vaginal tincion">Secreción vulvo vaginal tincion</option>
																<option   value="Secreción vulvo vaginal">Secreción vulvo vaginal</option>
																<option   value="Secreción semen">Secreción semen</option>


															</select>
														</div>

													</div>
													<div class="row">
														<div class="col-sm text-left">


															<label><b>Recipiente:</b></label>

														</div>


														<div class="col-sm text-left">

															<select  class="form-control form-control-sm" id="listarecipiente" name="listarecipiente" >

																<option  value="">Selecciona recipiente </option>
																<option  value="CITOBRUSH TUBO SECO">CITOBRUSH TUBO SECO</option>
																<option  value="FRASCO ORINA">FRASCO ORINA</option>
																<option  value="FRASCO ESTERIL">FRASCO ESTERIL</option>
																<option  value="JERINGA">JERINGA</option>
																<option  value="MEDIO DE TRANSPORTE ">MEDIO DE TRANSPORTE </option>
																<option  value="MEDIO DE TRANSPORTE Y LAMINILLA ">MEDIO DE TRANSPORTE Y LAMINILLA</option>
																<option  value="MEDIO ESPECIAL">MEDIO ESPECIAL</option>
																<option  value="PORTA OBJETOS">PORTA OBJETOS</option>
																<option  value="TUBO AMARILLO">TUBO AMARILLO</option>
																<option  value="TUBO AZUL">TUBO AZUL</option>
																<option  value="TUBO ESTERIL">TUBO ESTERIL</option>
																<option  value="TUBO HUMEDO">TUBO HUMEDO</option>



															</select>
														</div>

													</div>
													<div class="row">
														<div class="col-sm text-left">


															<label><b>Método:</b></label>

														</div>


														<div class="col-sm text-left">

															<select  class="form-control form-control-sm" id="listaMetodo" name="listaMetodo" >
																<option value="">Selecciona método</option>
																<option value="Análisis químico">Análisis químico</option>
																<option value="Análisis químico,Microscopia">Análisis químico,Microscopia</option>
																<option value="Varios">Varios</option>

															</select>
														</div>

													</div>
													<div class="row">
														<div class="col-sm text-left">

															<label><b>Técnica:</b></label>


														</div>


														<div class="col-sm text-left">
															<select class="form-control form-control-sm" id="listaTecnica" name="listaTecnica">
																<option value="">Selecciona Técnica</option>
																<option value="Varios">Varios</option>
																<option value="Papel indicador">Papel indicador</option>
																<option value="Aglutinación">Aglutinación</option>
																<option value="Aglutinación en placa">Aglutinación en placa</option>
																<option value="Aglutinación en tubo">Aglutinación en tubo</option>
																<option value="Análisis químico">Análisis químico</option>
																<option value="Análisis químico,Microscopia">Análisis químico,Microscopia</option>
																<option value="Automatizada">Automatizada</option>
															</select>
														</div>

													</div>
													<div class="row">
														<div class="col-sm text-left">

															<label><b>Condiciones paciente:</b></label>


														</div>


														<div class="col-sm text-left">

															<input type="text" class="form-control form-control-sm" id="condiciones" name="condiciones">
															<div class="form-group">
																<label for="exampleFormControlTextarea1">Example textarea</label>
																<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
															</div>
														</div>

													</div>
													<div class="row">
														<div class="col-sm text-left">


															<label><b>Aplicaciones:</b></label>

														</div>


														<div class="col-sm text-left">
															<input type="text"  class="form-control form-control-sm" id="aplicaciones" name="aplicaciones">
														</div>

													</div>
													<div class="row">
														<div class="col-sm text-left">


															<label><b>Acepta urgencia:</b></label>

														</div>


														<div class="col-sm text-left">

															<select class="form-control form-control-sm" id="aceptaurgencia" name="aceptaurgencia">
																<option value="si">si</option>
																<option value="no">no</option>

															</select>
														</div>

													</div>
													<div class="row">
														<div class="col-sm text-left">


															<label><b>Número de días proceso(urgente):</b></label>

														</div>


														<div class="col-sm text-left">

															<input type="text" class="form-control form-control-sm" id="procesoUrgente" name="procesoUrgente">
														</div>

													</div>
													<div class="row">
														<div class="col-sm text-left">


															<label><b>Número de días proceso(normal):</b></label>

														</div>


														<div class="col-sm text-left">
															<input type="text" class="form-control form-control-sm" id="procesoNormal" name="procesoNormal">

														</div>

													</div>
													<div class="row">
														<div class="col-lg ">
															<div class="form-check-inline ">
																<label class="form-check-label">
																	<input type="checkbox"  id="chkhabilitado" name="chkhabilitado" class="form-check-input" value=""><b>Habilitado</b>
																</label>
															</div>
															<div class="form-check-inline">
																<label class="form-check-label">
																	<input type="checkbox" id="chkmetodo" name="chkmetodo" class="form-check-input" value=""><b>Imprime método</b>
																</label>
															</div>
															<div class="form-check-inline">
																<label class="form-check-label">
																	<input type="checkbox"  id="chktecnica" name="chktecnica" class="form-check-input" value=""><b>Imprime técnica</b>
																</label>
															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-sm">


															3

														</div>


														<div class="col-sm">

															4
														</div>

													</div>




												</div>


											</div>
										</div>

										



										<div class="col-xl">


											<div class="col-lg">
												<label><b>Selección de estudios:</b></label>
												<div class="col-lg"><label><b>Filtrar por descripcion:</b></label>
													<input type="text" name="filtrarDes" id="filtrarDes" class="form-control form-control-sm">

												</div>

											</div>

											<div class="row">
												<div class="col-lg">
													<label>lista estudios</label>

													<?php //Ejemplo arrays aprenderaprogramar.com

$colores_vehiculos = array(

'coche' => 'Rojo',

'moto' => 'verde',

'avion' => 'amarillo'

);

echo $colores_vehiculos['moto'];

?>


<?php //Ejemplo arrays aprenderaprogramar.com

$indice = 'coche';

$colores_vehiculos = array(

$indice => 'Rojo',

'moto' => 'verde',

'avion' => 'amarillo'

);

echo $colores_vehiculos[$indice];

?>

<?php 
$datos = array(
	$_POST['idbiometria'],
	$idventa,
	$idCliente,
	$idestudio,
	$iduser,
	$_POST['eritrocitos'],
	$_POST['hemoglobina'],
	$_POST['hematocrito'],
	$_POST['volglobmed'],
	$_POST['hemglobmed'],
	$_POST['conmedhbglob'],
	$_POST['ancdisteritrocito'],
	$_POST['plaquetas'],
	$_POST['volplaqmed'],
	$_POST['leucocitos'],
	$_POST['segmentados'],
	$_POST['linfocitos'],
	$_POST['monocitos'],
	$_POST['eosinofilos'],
	$_POST['basofilos'],
	$_POST['segmen'],
	$_POST['linfo'],
	$_POST['Mono'],
	$_POST['eosin'],
	$_POST['basof'],
	$_POST['metodo'],
	$_POST['muestra'],
	$_POST['observaciones']
);
echo $datos[$idventa];

 ?>

												</div>

											</div>



										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>


		</body>
		</html>

		<?php 
	}else{
		header("location:../index.php");
	}
	?>