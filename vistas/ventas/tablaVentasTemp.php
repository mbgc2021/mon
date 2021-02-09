<?php 
session_start();
?>

<div class="table-responsive">
	<h4>Estudio/Perfil seleccionados:</h4>
	<h4><div id="nombreclienteVenta"></div></h4>
	<table class="table table-hover table-condensed table-bordered table-dark" style="text-align: center; ">

		<caption>
			<span class=" btn btn-success" onclick="crearVenta()">Generar $</span>
		</caption>
		<tr>
			<td>Nombre Estudio</td>
			<td>Condicion del paciente</td>
			<td>costo</td>
			<td>Quitar</td>

		</tr>
		<?php 
$total=0;//Contendra el total de la compra en dinero
$cliente="";//Se guarda nombre del cliente
if (isset($_SESSION['tablaComprasTemp'])):
	$i=0;
	foreach (@$_SESSION['tablaComprasTemp'] as $key) {
		$d=explode("||",@$key);
		?>
		<tr>
			<td><?php echo $d[1] ?></td>
			<td><?php echo $d[2] ?></td>
			<td><?php echo $d[3] ?></td>
			
			<td>
				<span >
					<span class="fas fa-backspace" onclick="quitarE('<?php echo $i; ?>')" ></span>
			</span>
			</td>

		</tr>
		<?php
		$total=$total+$d[3];
		$i++;
		$cliente=$d[4];

	}
endif;
 ?>
<tr>
	<td>TOTAL  <?php echo "$".$total; ?></td>
</tr>

</table>

<script type="text/javascript">
	$(document).ready(function(){
		nombre="<?php echo @$cliente ?>";
		$('#nombreclienteVenta').text("Nombre paciente:" +nombre);

	});

</script>
</div>