
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
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
		<script src="../librerias/jquery-3.5.1.min.js"></script>
		<script src="../js/funciones.js"></script>
		<style type="text/css">
		.row { margin: 3px 0; }
		.row div[class*='col'] { padding: 3px; }
	</style>
		
	</head>

	<body class="h-100 ">

		<div class="container-fluid ">
			<div class="row h-100">
				<div class="col-xl-12 ">
					<div class="card shadow">
						<div class="card-body">

							<form id="frmClientes" >
								<div class="row" >


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

								</div>
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
										<input type="text" class="form-control form-control-sm" name="apellidopatC" id="apellidopatC" >


									</div>

									<div class="col-sm">
										<label><b>Apellido materno:</b></label>
										<input type="text" class="form-control form-control-sm" name="apellidomatC" id="apellidomatC" >


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
										<label ><b>Correo electrónico paciente:</b></label>
										<input class="form-control form-control-sm" type="email" name="correoPac" id="correoPac" placeholder="correo@hotmail.com" >

									</div>



									<div class="col-sm"> 
										<label ><b>Correo electrónico médico:</b></label>


										<input class="form-control form-control-sm"  type="email" placeholder="correo@hotmail.com" name="correoMed" id="correoMed">

									</div>
									<div class="col-sm">

										<label><b>Médico:</b></label>
										<input type="text" class="form-control form-control-sm" value="a quien corresponda:" name="medico" id="medico">
									</div>
								</div>

								<div class="row">


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
									<div class="row">
										

									</div>
									<div class="container-fluid">
										<div class="row">
											<div class="col-sm-12">

												<label><b>Selección de estudios $:</b></label>
												<span class="btn btn-primary" id="ventaEstudiobtn">Agregar estudio a $</span>
												<span class="btn btn-primary" id="ventasHechabtn">Venta hecha</span>


											</div>
										</div>
										<div class="row">
										<div class="col-sm-12">
											<div id="ventaEstudio"></div>
											<div id="ventasHecha"></div>

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



</body>
</html>
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
	});

	function esconderSeccionVenta(){
		$('#ventaEstudio').hide();
		$('#ventasHecha').hide();
	}
</script>

<script type="text/javascript">

	$(document).ready(function(){

		$('#tablaClientesLoad').load("../vistas/clientes/tablaClientes.php");
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
						$('#tablaClientesLoad').load("../vistas/clientes/tablaClientes.php");
						alertify.success("Agregaste con exito un nuevo paciente!!!");
					}else{
						alertify.error("No se agrego paciente!!!!:(");
					}

				}
			});
		});
	});
</script>

<?php 
}else{
	header("location:../index.php");
}
?>

