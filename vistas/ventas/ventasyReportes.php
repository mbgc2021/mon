<?php 
require_once"../../clases/Conexion.php";
require_once"../../clases/Ventas.php";
$c = new conectar();
$conexion = $c->conexion();

$obj = new ventas();

$sql = "SELECT id_venta,
fechaCompra,
id_cliente
FROM ventas GROUP BY id_venta";

$result=mysqli_query($conexion,$sql);
?>


<h4>Orden 
</h4>
<div class="row">
	
	<div class="col-sm-12">

		<div class="table-responsive">
			<table class="table table-hover table-condensed table-bordered table-dark" id="bio" style="text-align: center; ">
				<tr>
					<td>Folio</td>
					<td>Fecha</td>
					<td>Cliente</td>
					<td>Estudio</td>
					<td>Total</td>
					<td>Ticket</td>
					<td>Reporte</td>
				</tr>
				<?php while($ver=mysqli_fetch_row($result)): ?>
					<tr>
						<td><?php echo $ver[0] ?></td>
						<td><?php echo $ver[1] ?></td>
						<td><?php echo $obj->nombreCliente($ver[2]); ?></td>
						<td>
							<table>
								<?php 
								$estudiosArray = $obj->estudioCliente($ver[0]);
								for ($i=0; $i < count($estudiosArray); $i++) { 
									?>
									<tr>
										<td><?php echo $estudiosArray[$i]; ?> </td>
										<td>
											<span class="btn btn-warning btn-sm" onclick="agregaBiometria('<?php echo $datos  ?>')"  data-toggle="modal" data-target="#editarEstudioSelect">
												Cap. Resultados
											</span> 
										</td>
									</tr>
									<?php 	
								}
								?>
							</table>
						</td>
						<td>
							<?php echo "$".$obj->obtenerTotal($ver[0]); ?>
						</td>
						<td>
							<a href="../procesos/ventas/crearTicketPdf.php?idventa=<?php echo $ver[0] ?>" class="btn btn-danger btn-sm">
								Ticket <span class="fas fa-clipboard-list"></span>
							</a>
						</td>

						<td><a href="../procesos/ventas/crearReportePdf.php?idventa=<?php echo $ver[0] ?>" class="btn btn-success btn-sm">Reporte <span class="fas fa-file-alt"></span></a>

						</td>

					</tr>

				<?php endwhile;
				?>

			</table>
		</div>



	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="editarEstudioSelect" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content ">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Resultados biometria hematica</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="frmbiometria">
					
					<div class="row">
						<div class="col-xl-12">
							<h4>Biometria hematica</h4>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<h4>PARAMETRO</h4>
						</div>

						<div class="col">
							<h4>RESULTADO</h4>
						</div>

						<div class="col">
							<h4>NIVEL</h4>
						</div>
						<div class="col">
							<h4>UNIDAD</h4>
						</div>
						<div class="col">
							<h4>REFERENCIA</h4>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<h5>FORMULA ROJA</h5>
						</div>

						<div class="col">

						</div>
						<div class="col">

						</div>
						<div class="col">

						</div>
						<div class="col">

						</div>

					</div>
					<div class="row">

						<div class="col">
							<label><strong>Eritrocitos</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text"  id="eritrocitos" name="eritrocitos">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="Eritrocitosn" name="Eritrocitosn">
						</div>
						<div class="col">
							<p>10^6/mm3</p>
						</div>
						<div class="col">
							<p>4.04 - 6.13</p>
						</div>
					</div>

					<div class="row">

						<div class="col">
							<label><strong>Hemoglobina</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="hemoglobina" name="hemoglobina">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="hemoglobinaN" name="hemoglobinaN">
						</div> 
						<div class="col">
							<p>g/dL</p>
						</div>
						<div class="col">
							<p>11.00 - 18.80</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Hematocrito</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="hematocrito" name="hematocrito">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="hematocritoN" name="hematocritoN">
						</div> 
						<div class="col">
							<p>%</p>
						</div>
						<div class="col">
							<p>35.00 - 55.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Volumen Globular Medio(V.C.M.)</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="volglobmed" name="volglobmed">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="volglobmedN" name="volglobmedN">
						</div> 
						<div class="col">
							<p>fL</p>
						</div>
						<div class="col">
							<p>80.00 - 100.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Hemog. Globular Media(H.C.M.)</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="hemglobmed" name="hemglobmed">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="hemglobmedN" name="hemglobmedN">
						</div> 
						<div class="col">
							<p>pg</p>
						</div>
						<div class="col">
							<p>26.00 - 32.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Conc. Media de Hb. Glob.(CHCM)</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="conmedhbglob" name="conmedhbglob">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="conmedhbglobN" name="conmedhbglobN">
						</div> 
						<div class="col">
							<p>g/dL</p>
						</div>
						<div class="col">
							<p>32.00 - 35.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Ancho de Dist. de Eritrocitos (R.D.W.)</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="ancdisteritrocito" name="ancdisteritrocito">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="ancdisteritrocitoN" name="ancdisteritrocitoN">
						</div> 
						<div class="col">
							<p>%</p>
						</div>
						<div class="col">
							<p>11.00 - 15.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Plaquetas</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="plaquetas" name="plaquetas">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="plaquetasN" name="plaquetasN">
						</div> 
						<div class="col">
							<p>10^3/mm3</p>
						</div>
						<div class="col">
							<p>150.00 - 450.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Volumen Plaq. Medio (V.P.M)</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="volplaqmed" name="volplaqmed">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="volplaqmedN" name="volplaqmedN">
						</div> 
						<div class="col">
							<p>fL</p>
						</div>
						<div class="col">
							<p>7.00 - 11.00</p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<h5>FORMULA BLANCA</h5>
						</div>

						<div class="col">

						</div>
						<div class="col">

						</div>
						<div class="col">

						</div>
						<div class="col">

						</div>

					</div>

					<div class="row">

						<div class="col">
							<label><strong>Leucocitos</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="leucocitos" name="leucocitos">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="leucocitosN" name="leucocitosN">
						</div> 
						<div class="col">
							<p>10^3/mm3</p>
						</div>
						<div class="col">
							<p>5.00 - 10.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Segmentados #</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="segmentados" name="segmentados">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="segmentadosN" name="segmentadosN">
						</div> 
						<div class="col">
							<p>10^3/mm3</p>
						</div>
						<div class="col">
							<p>2.00 - 8.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Linfocitos #</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="linfocitos" name="linfocitos">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="linfocitosN" name="linfocitosN">
						</div> 
						<div class="col">
							<p>10^3/mm3</p>
						</div>
						<div class="col">
							<p>1.00 - 5.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Monocitos #</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="monocitos" name="monocitos">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="monocitosN" name="monocitosN">
						</div> 
						<div class="col">
							<p>10^3/mm3</p>
						</div>
						<div class="col">
							<p>0.30 - 1.50</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Eosinofilos #</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="eosinofilos" name="eosinofilos">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="eosinoN" name="eosinoN">
						</div> 
						<div class="col">
							<p>10^3/mm3</p>
						</div>
						<div class="col">
							<p>0.00 - 0.40</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Basofilos #</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="basofilos" name="basofilos">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="basoN" name="basoN">
						</div> 
						<div class="col">
							<p>10^3/mm3</p>
						</div>
						<div class="col">
							<p>0.00 - 0.20</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Segmentados %</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="segmen" name="segmen">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="segmN" name="segmN">
						</div> 
						<div class="col">
							<p>%</p>
						</div>
						<div class="col">
							<p>42.00 - 75.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Linfocitos %</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="linfo" name="linfo">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="linfocN" name="linfocN">
						</div> 
						<div class="col">
							<p>%</p>
						</div>
						<div class="col">
							<p>20.00 - 45.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Monocitos %</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="Mono" name="Mono">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="MonocN" name="MonocN">
						</div> 
						<div class="col">
							<p>%</p>
						</div>
						<div class="col">
							<p>2.00 - 10.00</p>
						</div>
					</div>

					<div class="row">

						<div class="col">
							<label><strong>Eosinofilos %</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="eosin" name="eosin">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="eosinoN" name="eosinoN">
						</div> 
						<div class="col">
							<p>%</p>
						</div>
						<div class="col">
							<p>0.00 - 10.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<label><strong>Basofilos %</strong></label>
						</div>

						<div class="col">
							<input class="form-control" type="text" id="basof" name="basof">
						</div>

						<div class="col">
							<input class="form-control" disabled="" type="text" id="basofiN" name="basofiN">
						</div> 
						<div class="col">
							<p>%</p>
						</div>
						<div class="col">
							<p>0.00 - 3.00</p>
						</div>
					</div>
					<div class="row">

						<div class="col">
							<h4>Observaciones:</h4>
						</div>

						<div class="col">

						</div>

						<div class="col">

						</div> 
						<div class="col">

						</div>
						<div class="col">

						</div>
					</div>

					<div class="row">

						<div class="col">
							<label>Método:</label>
						</div>

						<div class="col md-4">
							<input class="form-control" type="text" id="metodobio" name="metodobio">
						</div>

						<div class="col">

						</div> 
						<div class="col">

						</div>
						<div class="col">

						</div>
					</div>
					<div class="row">

						<div class="col">
							<label>Muestra:</label>
						</div>

						<div class="col md-4">
							<input class="form-control" type="text" id="muestrabio" name="muestrabio">

						</div>

						<div class="col">

						</div> 
						<div class="col">

						</div>
						<div class="col">

						</div>
					</div>
					<div class="row">

						<div class="col">
							<label>Observaciones:</label>
						</div>

						<div class="col-md-4">
							<textarea class="form-control" id="Observacionesbio"></textarea>
						</div>

						<div class="col">

						</div> 
						<div class="col">

						</div>
						<div class="col">

						</div>
					</div>

				</form>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" id="btnAgregaBiometriaH" class="btn btn-secondary" data-dismiss="modal">Guardar</button>

			
		</div>

	</div>
	<div class="col-sm-8">

				<div id="tablaBiometriaHLoad"></div>

			</div>

</div>
</div>
<script type="text/javascript">
	function agregaBiometria(datos){
		$.ajax({
			type:"POST",
			data:"datos="+ datos,
			url:"../procesos/estudios/agregaBiometriaH.php",
			success:function(r){
				dato=jQuery.parseJSON(r);
				
				$('#idbiometria').val(dato['id_biometria']);
				$('#eritrocitos').val(dato['Eritrocitos']);
				$('#hemoglobina').val(dato['Hemoglobina']);
				$('#hematocrito').val(dato['Hematocrito']);
				$('#volglobmed').val(dato['VolumenGlobularM']);
				$('#hemglobmed').val(dato['HemogGlobularM']);
				$('#conmedhbglob').val(dato['ConcMediaHbGlob']);
				$('#ancdisteritrocito').val(dato['AnchoDistEritrocitos']);
				$('#plaquetas').val(dato['Plaquetas']);
				$('#volplaqmed').val(dato['VolumenPlaqMedio']);
				$('#leucocitos').val(dato['Leucocitos']);
				$('#segmentados').val(dato['Segmentados1']);
				$('#linfocitos').val(dato['Linfocitos1']);
				$('#monocitos').val(dato['Monocitos1']);
				$('#eosinofilos').val(dato['Eosinofilos1']);
				$('#basofilos').val(dato['Basofilos1']);
				$('#segmen').val(dato['Segmentados2']);
				$('#linfo').val(dato['Linfocitos2']);
				$('#Mono').val(dato['Monocitos2']);
				$('#eosin').val(dato['Eosinofilos2']);
				$('#basof').val(dato['Basofilos2']);
				$('#metodobio').val(dato['metodo']);
				$('#muestrabio').val(dato['muestra']);
				$('#Observacionesbio').val(dato['observaciones']);

			}
		});

	}

</script>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('#tablaBiometriaHLoad').load("estudios/tablabiometriaH.php");
		$('#btnAgregaBiometriaH').click(function(){
			vacios= validarFormVacio('frmbiometria');
      if (vacios > 0 ){
        alertify.alert("Debes llenar todos los campos.");
        return false;
      }
			datos=$('#frmbiometria').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"../procesos/estudios/agregaBiometriaH.php",
				success:function(r){
					if(r==1){
						$('#frmbiometria')[0].reset();
						$('#tablaBiometriaHLoad').load("estudios/tablabiometriaH.php");
						alertify.success(" Datos de Biometria agregados con exito");
					}else{
						alertify.error("No se registraron resultados de biometria");
					}

				}
			});



		});

	});
</script>

