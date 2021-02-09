<?php 
session_start();
if(isset($_SESSION['usuario'])){
	//echo  $_SESSION['usuario'];	
	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Recepción Paciente</title>
		<?php require_once "menu.php"; ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="../librerias/jquery-3.5.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../librerias/select2/select2.min.css">
		
		<script src="../librerias/select2/select2.min.js"></script>
		
		<script src="../js/funciones.js"></script>

		<style type="text/css">
			.row { margin: 3px 0; }
			.row div[class*='col'] { padding: 3px;}
		</style>
		
	</head>

	<body class="h-100 ">

		<div class="container-fluid ">
			<div class="row h-100">
				<div class="col-xl-12 ">
					<div class="card shadow">
						<div class="card-body">

							<form id="frmClientes" >
								<!--<div class="row" >


									<div class="col-sm">

										<label><b>Fecha de recepción:</b></label>
										<input class="form-control form-control-sm" type="date" value="2011-08-19" name="fechaRecepcion" id="fechaRecepcion"  >

									</div>

									<div class="col-sm">

										<label><b>Folio:</b></label>
										<input type="text" class="form-control form-control-sm " name="folio" id="folio" readonly="" >


									</div>
									<div class="col-sm">


									</div>
									<div class="col-sm">


									</div>

									<div class="col-sm">



										<label><b>Clave:</b></label>
										<input type="text" class="form-control form-control-sm " name="clave" id="clave" readonly="" >
									</div>

								</div>-->
								<div class="row">

									<div class="col-sm">
										<br>

										<label><b>Datos Paciente:</b></label>

									</div>

									<div class="col-sm">


									</div>
									<div class="col-sm">


									</div>
									<div class="col-sm">


									</div>


									<div class="col">
										<label><b>Cita:</b></label>

										<input class="form-control form-control-sm" type="datetime-local"  value="2011-08-19T13:45:00" name="cita" id="cita">
									</div>

								</div>
								<div class="row">


									<div class="col-sm">

										<label><b>Nombre(s):</b></label>
										<input type="text" class="form-control form-control-sm " name="nombres" id="nombres">


									</div>

									<div class="col-sm">
										<label><b>Apellido paterno:</b></label>
										<input type="text" class="form-control form-control-sm" name="apellidopatC" id="apellidopatC">


									</div>

									<div class="col-sm">
										<label><b>Apellido materno:</b></label>
										<input type="text" class="form-control form-control-sm" name="apellidomatC" id="apellidomatC">


									</div>

									<div class="col-sm">

										<label><b>Fecha de nacimiento:</b></label>
										<input class="form-control form-control-sm" type="date" value="2011-08-19" name="fechaNac" id="fechaNac" >
									</div>

									<div class="col-sm"> 
										<label><b>Edad:</b></label>
										<input type="text" class="form-control form-control-sm " name="edad" id="edad" >

									</div>
								</div>

								<div class="row">

									<div class="col-sm">

										<label><b>Sexo:</b></label>
										<select  class="form-control form-control-sm" id="sexo" name="sexo" >

											<option  value="">Selecciona </option>
											<option   value="femenino">Femenino</option>
											<option  value="masculino">Masculino</option>


										</select>		

									</div>

									<div class="col-sm">

										<label for="example-tel-input" class=" form-label"><b>No.teléfono:</b></label>

										<input type="text" class="form-control form-control-sm" name="notelefono" id="notelefono" placeholder="No de telefono o celular">

									</div>
									<div class="col-sm">
										<label ><b>Dirección:</b></label>
										<input class="form-control form-control-sm" type="text" name="direccion" id="direccion" placeholder="Dirección" >

									</div>

									<div class="col-sm">
										<label ><b>Correo electrónico paciente:</b></label>
										<input class="form-control form-control-sm" type="email" name="correoPac" id="correoPac" placeholder="correo@hotmail.com" >

									</div>



									<div class="col-sm"> 
										<label ><b>Correo electrónico médico:</b></label>


										<input class="form-control form-control-sm"  type="email" placeholder="correo@hotmail.com" name="correoMed" id="correoMed">

									</div>
									
								</div>

								<div class="row">
									<div class="col-sm">

										<label><b>Médico:</b></label>
										<input type="text" class="form-control form-control-sm" value="a quien corresponda:" name="medico" id="medico">
									</div>


									<div class="col-lg-4"> 
										<label><b>Cause:</b></label>
										<input type="text" class="form-control form-control-sm " name="cause" id="cause">
									</div>

									<div class="col-sm">
										<br>
										<span class="btn btn-primary" class="form-control" id="btnAgregarCliente">Agregar +</span>

									</div>

									<div class="col-sm">

									</div>

									<div class="col-sm">


									</div>

									<div class="col-sm">
										<br>




									</div>

								</div>

							</form>

						</div>
					</div>
				</div>
			</div>  
		</div>

		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-xl-12 align-self-center text-center">
					<div class="card shadow">
						<div class="card-body " style="background: gray;">  
							<div class="row" >

								<div class="col-xl" >

									<div class="container-fluid">
										<div class="row">
											<div class="col-sm-12">

												<label><b>Selección de estudios $:</b></label>
												<span class="btn btn-primary" id="ventaEstudiobtn">Agregar estudio $</span>
												<span class="btn btn-primary" id="ventasHechabtn">Orden de estudios</span>
												<span class="btn btn-primary" id="tablaclientesloadbtn">Pacientes</span>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												

											</div>

										</div>

									</div>
									
									<div class="container-fluid">
										<div class="row" >
											<div class="col-lg-12"  style="background-color:#aaa">
												<div id="ventaEstudio" ></div>
												
												
											</div>
											<div class="col-lg-12"  style="background-color:#bbb">
												<div id="ventasHecha"></div>
											</div>

											<div class="col-lg-12"  style="background-color:#bbb">
												<div id="tablaClientesLoad"></div>
											</div>

										</div>

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
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="abremodalClientesUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Actualizar cliente</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="frmClientesU" >
								<!--<div class="row" >


									<div class="col-sm">

										<label><b>Fecha de recepción:</b></label>
										<input class="form-control form-control-sm" type="date" value="2011-08-19" name="fechaRecepcion" id="fechaRecepcion"  >

									</div>

									<div class="col-sm">

										<label><b>Folio:</b></label>
										<input type="text" class="form-control form-control-sm " name="folio" id="folio" readonly="" >


									</div>
									<div class="col-sm">


									</div>
									<div class="col-sm">


									</div>

									<div class="col-sm">



										<label><b>Clave:</b></label>
										<input type="text" class="form-control form-control-sm " name="clave" id="clave" readonly="" >
									</div>

								</div>-->
								<div class="row">

									<div class="col-sm">
										<br>

										<label><b>Datos Paciente:</b></label>

									</div>

									<div class="col-sm">


									</div>
									<div class="col-sm">


									</div>
									<div class="col-sm">
										<input type="text" hidden="" id="idclienteU" name="idclienteU">

									</div>


									<div class="col">
										<label><b>Cita:</b></label>

										<input class="form-control form-control-sm" type="datetime-local"  value="2011-08-19T13:45:00" name="citaU" id="citaU">
									</div>

								</div>
								<div class="row">


									<div class="col-sm">

										<label><b>Nombre(s):</b></label>
										<input type="text" class="form-control form-control-sm " name="nombresU" id="nombresU">


									</div>

									<div class="col-sm">
										<label><b>Apellido paterno:</b></label>
										<input type="text" class="form-control form-control-sm" name="apellidopatCU" id="apellidopatCU" >


									</div>

									<div class="col-sm">
										<label><b>Apellido materno:</b></label>
										<input type="text" class="form-control form-control-sm" name="apellidomatCU" id="apellidomatCU" >


									</div>

									<div class="col-sm">

										<label><b>Fecha de nacimiento:</b></label>
										<input class="form-control form-control-sm" type="date" value="2011-08-19" name="fechaNacU" id="fechaNacU" >
									</div>

									<div class="col-sm"> 
										<label><b>Edad:</b></label>
										<input type="text" class="form-control form-control-sm " name="edadU" id="edadU" >

									</div>
								</div>

								<div class="row">

									<div class="col-sm">

										<label><b>Sexo:</b></label>
										<select  class="form-control form-control-sm" id="sexoU" name="sexoU" >

											<option  value="">Selecciona </option>
											<option   value="femenino">Femenino</option>
											<option  value="masculino">Masculino</option>


										</select>		

									</div>

									<div class="col-sm">

										<label for="example-tel-input" class=" form-label"><b>No.teléfono:</b></label>

										<input type="text" class="form-control form-control-sm" name="notelefonoU" id="notelefonoU" placeholder="No de telefono o celular">

									</div>
									<div class="col-sm">
										<label ><b>Dirección:</b></label>
										<input class="form-control form-control-sm" type="text" name="direccionU" id="direccionU" placeholder="Dirección" >

									</div>

									<div class="col-sm">
										<label ><b>Correo electrónico paciente:</b></label>
										<input class="form-control form-control-sm" type="email" name="correoPacU" id="correoPacU" placeholder="mi_correo@hotmail.com" >

									</div>



									<div class="col-sm"> 
										<label ><b>Correo electrónico médico:</b></label>


										<input class="form-control form-control-sm"  type="email" placeholder="correo@hotmail.com" name="correoMedU" id="correoMedU">

									</div>
									
								</div>

								<div class="row">
									<div class="col-sm">

										<label><b>Médico:</b></label>
										<input type="text" class="form-control form-control-sm" value="a quien corresponda:" name="medicoU" id="medicoU">
									</div>


									<div class="col-lg-4"> 
										<label><b>Cause:</b></label>
										<input type="text" class="form-control form-control-sm " name="causeU" id="causeU">
									</div>

									

									<div class="col-sm">

									</div>

									<div class="col-sm">


									</div>

									<div class="col-sm">
										<br>




									</div>

								</div>

							</form>
						</div>
						<div class="modal-footer">
							<button type="button" id="btnAgregarClienteU" class="btn btn-primary" data-dismiss="modal">Actualizar</button>

						</div>
					</div>
				</div>
			</div>


		</body>
		</html>
		<script type="text/javascript">
			function agregaDatosCliente(idcliente){
				$.ajax({
					type:"POST",
					data:"idcliente="+idcliente,
					url:"../procesos/clientes/obtenDatosCliente.php",
					success:function(r){
						dato=jQuery.parseJSON(r);
						$('#idclienteU').val(dato['id_cliente']);
						$('#citaU').val(dato['cita']);
						$('#nombresU').val(dato['nombre']);
						$('#apellidopatCU').val(dato['apellidoPat']);
						$('#apellidomatCU').val(dato['apellidoMat']);
						$('#fechaNacU').val(dato['fechaNacimiento']);
						$('#edadU').val(dato['edad']);
						$('#sexoU').val(dato['sexo']);
						$('#notelefonoU').val(dato['telefono']);
						$('#direccionU').val(dato['direccion']);
						$('#correoPacU').val(dato['emailPersonal']);
						$('#correoMedU').val(dato['emailMedico']);
						$('#medicoU').val(dato['medico']);
						$('#causeU').val(dato['cause']);

					}
				});

			}
			function eliminarCliente(idcliente){
				alertify.confirm('¿Desea eliminar este cliente?', function(){ 
					$.ajax({
						type:"POST",
						data:"idcliente=" + idcliente,
						url:"../procesos/clientes/eliminarCliente.php",
						success:function(r){
							if(r==1){
								$('#tablaClientesLoad').load("clientes/tablaClientes.php");
								alertify.success("Paciente Eliminado con exito!!");
							}else{
								alertify.error("No se pudo eliminar este Paciente :(");
							}
						}
					});
				}, function(){ 
					alertify.error('Cancelo !')
				});
			}
		</script>

		<script type="text/javascript">
			$(document).ready(function(){

				$('#ventaEstudiobtn').click(function(){
					esconderSeccionVenta();
					$('#ventaEstudio').load('ventas/ventasEstudios.php');
					$('#ventaEstudio').show();
				});
				$('#ventasHechabtn').click(function(){
					esconderSeccionVenta();
					$('#ventasHecha').load('ventas/ventasyReportes.php');
					$('#ventasHecha').show();
				});
				$('#tablaclientesloadbtn').click(function(){
					esconderSeccionVenta();
					$('#tablaClientesLoad').load('clientes/tablaClientes.php');
					$('#tablaClientesLoad').show();
				});
			});

			function esconderSeccionVenta(){
				$('#ventaEstudio').hide();
				$('#ventasHecha').hide();
				$('#tablaClientesLoad').hide();
			}
		</script>

		<script type="text/javascript">

			$(document).ready(function(){

				$('#tablaClientesLoad').load("clientes/tablaClientes.php");
				$('#btnAgregarCliente').click(function(){

					vacios= validarFormVacio('frmClientes');
					if (vacios > 0 ){
						alertify.alert ("Debes llenar todos los campos.");
						return false;
					}

					datos=$('#frmClientes').serialize();
					$.ajax({
						type:"POST",
						data:datos,
						url:"../procesos/clientes/agregaClientes.php",
						success:function(r){
							if(r==1){
								$('#frmClientes')[0].reset();
								$('#tablaClientesLoad').load("clientes/tablaClientes.php");
								alertify.success("Agregaste con exito un nuevo paciente!!!");
							}else{
								alertify.error("No se agrego paciente!!!!:(");
							}

						}
					});
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function(){

				$('#btnAgregarClienteU').click(function(){
					datos=$('#frmClientesU').serialize();
					$.ajax({
						type:"POST",
						data:datos,
						url:"../procesos/clientes/actualizaCliente.php",
						success:function(r){
							if(r==1){
								$('#frmClientes')[0].reset();
								$('#tablaClientesLoad').load("clientes/tablaClientes.php");
								alertify.success("Datos de paciente actualizados con exito!!!");
							}else{
								alertify.error("No se actualizaron datos del paciente!!!!:(");
							}

						}
					});


				})

			})
		</script>

		<?php 
	}else{
		header("location:../index.php");
	}
	?>

