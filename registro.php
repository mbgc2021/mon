<?php 

    require_once "clases/Conexion.php";
    $obj=new conectar();
    $conexion=$obj->conexion();
    
    $sql="SELECT * from usuarios where email='admin'";
    $result=mysqli_query($conexion,$sql);
    $validar =0;
    if(mysqli_num_rows($result) > 1) {
        header ("location:index.php");
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro usuario</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.5.1.min.js"></script>
	<script src="js/funciones.js"></script>
</head>
<body style="background-color:#250761;">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="card shadow p-3 mb-5 bg-white rounded text-white text-center" style="width: 100r">
					<div class="card-header bg-dark">Registrar Administrador</div>
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
							<a href="index.php" class="btn btn-default">Regresar login</a>
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
	$('#registro').click(function(){
vacios= validarFormVacio('frmRegistro');
if (vacios > 0 ){
	alert ("Debes llenar todos los campos.");
	return false;
}
		datos=$('#frmRegistro').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"procesos/regLogin/registrarUsuario.php",
			success:function(r){
				alert(r);
				if (r==1){
					alert("Registrado con exito!!!!");

					}else {
						alert("Fallo registro :(");
					}

				}

			
		
	});

});		

});




</script>