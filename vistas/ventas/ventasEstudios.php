<?php 
require_once "../../clases/Conexion.php";
$c=new conectar();
$conexion=$c->conexion();

?>

<div class="row">
	<div class="col-lg-4 text-left" >
		<form id="frmVentasEstudios">
			<p><h4>Estudio/Perfil:</h4></p>
			<label>Selecciona cliente</label>
			<select class="form-control input-sm" id="clienteVenta" name="clienteVenta">
				<option value="A">Selecciona </option>
				<?php $sql="SELECT id_cliente, 
				nombre,
				apellidoPat
				from clientes";
				$result= mysqli_query($conexion,$sql);
				while ($cliente=mysqli_fetch_row($result)):

					?>
					
					<option value="<?php echo $cliente[0] ?>"><?php echo $cliente[2]." ".$cliente[1] ?></option>
				<?php endwhile; ?>
			</select>
			<label>Selecciona Estudio</label>
			<select class="form-control input-sm" id="estudioVenta" name="estudioVenta">
				<option value="A">Selecciona </option>
				<?php 

				$sql="SELECT id_estudio,
				nombreEst
				from estudio";
				$result=mysqli_query($conexion,$sql);

				while($estudio=mysqli_fetch_row($result)):
					?>
					<option value="<?php echo $estudio[0] ?>"><?php echo $estudio[1] ?>
					</option>
				<?php endwhile; ?>

			</select>
			<p></p>
			<label>Tipo</label>
			<input type="text" readonly="" class="form-control input-sm" id="nomestudioV" name="nomestudioV">
			<p></p>

			<label>Clave</label>
			<input type="text" readonly="" class="form-control input-sm" id="claveV" name="claveV">
			<p></p>


			<label>Condiciones del paciente</label>
			<textarea readonly="" id="condicionespV" name="condicionespV" class="form-control input-sm" ></textarea>

			<p></p>
			<label>Costo</label>
			<input type="text" readonly="" class="form-control input-sm" id="costoV" name="costoV">
			<p></p>
			<span class="btn btn-success" id="agregaVenta">Agregar</span>
			<span class="btn btn-danger" id="btnVaciarVentas">Vaciar $</span>
		</form>

	</div>
	<div class="col-lg-8 ">
		<div id="tablaVentasTempLoad"></div>
	</div>

</div>



<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");

		$('#estudioVenta').change(function(){
			$.ajax({
				type:"POST",
				data:"idestudio=" + $('#estudioVenta').val(),
				url:"../procesos/ventas/llenarformEstudio.php",
				success:function(r) {

					if (r != 0) {
						dato = jQuery.parseJSON(r);
						$('#nomestudioV').val(dato['id_categoriaEst']);
						$('#claveV').val(dato['clave']);
						$('#condicionespV').val(dato['condicionPaciente']);
						$('#costoV').val(dato['costo']);
					} else {
						alert("Este cliente no tiene este estudio");
					}
				}
			});

		});

		$('#agregaVenta').click(function() {

			vacios = validarFormVacio('frmVentasEstudios');
			if (vacios > 0 ) {
				alertify.alert("Debes llenar todos los campos.");
				return false;
			}

			datos = $('#frmVentasEstudios').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"../procesos/ventas/agregaProductoTemp.php",
				success:function(r) {
					$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
				}
			});
		});

		$('#btnVaciarVentas').click(function(){


			$.ajax({

				url:"../procesos/ventas/vaciarTemp.php",
				success:function(r){
					$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
				}
			});
		});
	});
</script>
<script type="text/javascript">
	function quitarE(index){

		$.ajax({
			type:"POST",
			data:"ind=" + index,
			url:"../procesos/ventas/quitarEstudio.php",
			success:function(r){
				$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
				alertify.success("Se quito estudio :)!");
			}
		});
	}
	function crearVenta(){
		$.ajax({
			url:"../procesos/ventas/crearVenta.php",
			success:function(r) {

				alert(r);

				r = r.trim();

				if (r > 0) {
					$('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");
					$('#frmVentasEstudios')[0].reset();
					alertify.alert("Venta realizada con exito! Nota:Consulte datos en Ventas hechas!");
				} else if (r == 0) {
					alertify.alert("No hay lista de venta!!");
				} else {
					alertify.error("No se concreto venta! X");
				}
			}
		});

	}

</script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#clienteVenta').select2();
		$('#estudioVenta').select2();
		
	});
</script>