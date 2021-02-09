
<?php 
session_start();
if(isset($_SESSION['usuario']) and $_SESSION['usuario']=='admin'){
//echo  $_SESSION['usuario'];	
	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Administrar usuarios</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>
		<div class="container">
			<br>
			<h5 style="color: white;">Administrar usuarios</h5>
			<div class="row">

				<div class=" col-sm-4">
					<div class="card shadow p-3 mb-5 bg-white rounded text-white text-center" style="width: 100r">
						<div class="card-header bg-secondary">Registra usuario</div>
						<div class="card-body bg-white text-left text-dark"><img src="" height="">
							<form id="frmRegistro">
								<label><b>Nombre:</b></label>
								<input type="text" class="form-control input-sm" name="nombre" id="nombre">
								<label><b>Apellido paterno:</b></label>
								<input type="text" class="form-control input-sm" name="apellidop" id="apellidop">
								<label><b>Apellido materno:</b></label>
								<input type="text" class="form-control input-sm" name="apellidom" id="apellidom">
								<label><b>Usuario:</b></label>
								<input type="text" class="form-control input-sm" name="usuario" id="usuario">

								<label><b>tipo usuario</b></label><br>

								<select  class="form-control" id="listaTipou" name="listaTipou" >

									<option  value="A">Selecciona un tipo de usuario</option>
									<option   value="Admintrador">Admintrador</option>
									<option  value="Laboratorista">Laboratorista</option>
									<option  value="Recepcionista">Recepcionista</option>

								</select>
								<label><b>Contraseña:</b></label>
								<input type="text" class="form-control input-sm" name="password" id="password">
								<label><b>Cedula Profesional:</b></label>
								<input type="text" class="form-control input-sm" name="cedulaprof" id="cedulaprof">	
								<p></p>
								<span class="btn btn-primary" id="registro">Registrar</span>

							</form>
						</div>

					</div>

				</div>

				<div class=" col-sm-8">
					<div id="tablaUsuariosLoad">
						<caption><label>USUARIOS</label></caption>

					</div>
				</div>
			</div>
		</div>
		<!-- Button trigger modal -->


		<!-- Modal -->
		<div class="modal fade" id="actualizaUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Actualiza Usuario</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

						<form id="frmRegistroU">
							<input type="text" hidden="" id="idUsuario" name="idUsuario">
							<label><b>Nombre:</b></label>
							<input type="text" class="form-control input-sm" name="nombreU" id="nombreU">
							<label><b>Apellido paterno:</b></label>
							<input type="text" class="form-control input-sm" name="apellidopU" id="apellidopU">
							<label><b>Apellido materno:</b></label>
							<input type="text" class="form-control input-sm" name="apellidomU" id="apellidomU">
							<label><b>Usuario:</b></label>
							<input type="text" class="form-control input-sm" name="usuarioU" id="usuarioU">

							<label><b>tipo usuario</b></label><br>

							<select  class="form-control" id="listaTipouU" name="listaTipouU" >

								<option  value="A">Selecciona un tipo de usuario</option>
								<option   value="Admintrador">Admintrador</option>
								<option  value="Laboratorista">Laboratorista</option>
								<option  value="Recepcionista">Recepcionista</option>

							</select>
							
							<label><b>Cedula Profesional:</b></label>
							<input type="text" class="form-control input-sm" name="cedulaprofU" id="cedulaprofU">	
							<p></p>
							

						</form>





					</div>
					<div class="modal-footer">
						<button type="button" id="btnActualizaUsuario" class="btn btn-warning" data-dismiss="modal">Actualiza Usuario</button>

					</div>
				</div>
			</div>
		</div>

	</body>
	</html>
	<script type="text/javascript">
		function agregaDatosUsuario(idusuario){
			$.ajax({
				type:"POST",
				data:"idusuario="+idusuario,
				url:"../procesos/usuarios/obtenDatosUsuarios.php",
				success:function(r){
					dato=jQuery.parseJSON(r);

					$('#idUsuario').val(dato['id_usuario']);
					$('#nombreU').val(dato['nombre']);
					$('#apellidopU').val(dato['apellidoPat']);
					$('#apellidomU').val(dato['apellidoMat']);
					$('#usuarioU').val(dato['email']);
					$('#listaTipouU').val(dato['tipoUsuario']);
					$('#cedulaprofU').val(dato['cedulaProfesional']);




				}
			});

		}
function eliminarUsuario(idusuario){
			alertify.confirm('¿Desea eliminar este Usuario?', function(){ 
				$.ajax({
					type:"POST",
					data:"idusuario=" + idusuario,
					url:"../procesos/usuarios/eliminarUsuario.php",
					success:function(r){
						if(r==1){
							$('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
							alertify.success("Usuario Eliminado con exito!!");
						}else{
							alertify.error("No se pudo eliminar este Usuario :(");
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

			$('#btnActualizaUsuario').click(function(){

				datos=$('#frmRegistroU').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/usuarios/ActualizaUsuario.php",
					success:function(r){
						console.log(r);
						if(r==1){

							
							$('#tablaUsuariosLoad').load('usuarios/tablaUsuarios.php');
							alertify.success("Actualizado con exito!!!!");

						}else{

							alertify.error("No se actualizo registro de Usuario X(!!!");
						}


					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#tablaUsuariosLoad').load('usuarios/tablaUsuarios.php');

			$('#registro').click(function(){
				vacios= validarFormVacio('frmRegistro');
				if (vacios > 0 ){
					alertify.alert ("Debes llenar todos los campos.");
					return false;
				}
				datos=$('#frmRegistro').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/regLogin/registrarUsuario.php",
					success:function(r){
						//alert(r);
						if (r==1){
							$('#frmRegistro')[0].reset();
							$('#tablaUsuariosLoad').load('usuarios/tablaUsuarios.php');
							alertify.success("Registrado con exito!!!!");

						}else {
							alertify.error("Fallo registro :(");
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