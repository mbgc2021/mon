
<?php 

require_once "../../clases/Conexion.php";

$obj=new conectar();
$conexion=$obj->conexion();

$sql="SELECT id_cliente, 
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
cause from clientes";

$result=mysqli_query($conexion,$sql);

?>


<div class="table-responsive">

	<table class="table table-hover table-condensed table-bordered table-dark" style="text-align: center;">
		<caption><label>Ordenes por paciente</label></caption>
		<tr>
			<td><b>Nombre</b></td>
			<td><b>Apellido Paterno</b></td>
			<td><b>Apellido Paterno</b></td>
			<td><b>Edad</b></td>
			<td><b>Cita</b></td>
			<!--<td><b>Estudio(s) a realizar</b></td>-->
			<td><b>Editar</b></td>
			<td><b>Eliminar</b></td>

		</tr>
		<?php  while($ver=mysqli_fetch_row($result)): ?>
			<tr>
				<td><?php echo $ver[2]; ?></td>
				<td><?php echo $ver[3]; ?></td>
				<td><?php echo $ver[4]; ?></td>
				<td><?php echo $ver[6]; ?></td>
				<td><?php echo $ver[1]; ?></td>
				<td>
					<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#abremodalClientesUpdate" onclick="agregaDatosCliente('<?php echo $ver[0]; ?>')"><span class="fas fa-edit"></span></span>


				</td>
				<td>
					<span class="btn btn-danger btn-sm" onclick="eliminarCliente('<?php echo $ver[0]; ?>')"><span class="fas fa-trash-alt"></span></span>

				</td>





			</tr>
		<?php endwhile; ?>

	</table>	
</div>