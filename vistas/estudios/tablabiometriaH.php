
<?php 
require_once "../../clases/Conexion.php";
$c=new conectar();
$conexion=$c->conexion();


$sql="SELECT id_categoriaEst,nombreCategoria FROM categoriasest";
$result=mysqli_query($conexion,$sql);


?>





<div class="table-responsive">
	<br>
	<table>
		<td>
			<caption ><label>TABLA:</label></caption>
		</td>
		<td>
			<p>BIOMETRIA HEMATICA</p>
		</td>
	</table>


	<table class="table table-hover table-condensed table-bordered table-dark" style="text-align: center;" >
		
		
		

		<tr>

			<th scope="row">PARAMETRO</th>
			<th>RESULTADO</th>
			<th>NIVEL</th>
			<th>UNIDAD</th>
			<th>REFERENCIA</th>

		</tr>
		<tr><th>FORMULA ROJA</th></tr>

		<tr>

			<th>Eritrocitos</th>

			<td></td>
			<td></td>
			<td>10^6/mm3</td>
			<td>4.04 - 6.13</td>

		</tr>

		<tr>

			<th>Hemoglobina</th>

			<td></td>
			<td></td>
			<td>g/dL</td>
			<td>11.00 - 18.80</td>
			

		</tr>

		<tr>

			<th>Hematocrito</th>

			<td></td>
			<td></td>
			<td>%</td>
			<td>35.00 - 55.00</td>

		</tr>
		<tr>

			<th>Volumen Globular Medio(V.C.M.)</th>

			<td></td>
			<td></td>
			<td>fL</td>
			<td>80.00 - 100.00</td>

		</tr>
		<tr>

			<th>Hemog. Globular Media(H.C.M.)</th>
			<td></td>
			<td></td>
			<td>pg</td>
			<td>26.00 - 32.00</td>

		</tr>
		<tr>

			<th>Conc. Media de Hb. Glob.(CHCM)</th>

			<td></td>
			<td></td>
			<td>g/dL</td>
			<td>32.00 - 35.00</td>

		</tr>
		<tr>

			<th>Ancho de Dist. de Eritrocitos (R.D.W.)</th>

			<td></td>
			<td></td>
			<td>%</td>
			<td>11.00 - 15.00</td>

		</tr>

		<tr>

			<th>Plaquetas</th>

			<td></td>
			<td></td>
			<td>10^3/mm3</td>
			<td>150.00 - 450.00</td>

		</tr>

		<tr>

			<th>Volumen Plaq. Medio (V.P.M)</th>

			<td></td>
			<td></td>
			<td>fL</td>
			<td>7.00 - 11.00</td>

		</tr>
		<tr><th>FORMULA BLANCA</th></tr>
		<tr>
			<th>Leucocitos</th>

			<td></td>
			<td></td>
			<td>10^3/mm3</td>
			<td>5.00 - 10.00</td>

		</tr>
<tr>
			<th>Segmentados #</th>

			<td></td>
			<td></td>
			<td>10^3/mm3</td>
			<td>2.00 - 8.00</td>

		</tr>
		<tr>
			<th>Linfocitos #</th>

			<td></td>
			<td></td>
			<td>10^3/mm3</td>
			<td>1.00 - 5.00</td>

		</tr>
<tr>
			<th>Monocitos #</th>

			<td></td>
			<td></td>
			<td>10^3/mm3</td>
			<td>0.30 - 1.50</td>

		</tr>
		<tr>
			<th>Eosinofilos #</th>

			<td></td>
			<td></td>
			<td>10^3/mm3</td>
			<td>0.00 - 0.40</td>

		</tr>

	<tr>
			<th>Basofilos #</th>

			<td></td>
			<td></td>
			<td>10^3/mm3</td>
			<td>0.00 - 0.20</td>

		</tr>
		<tr>
			<th>Segmentados %</th>

			<td></td>
			<td></td>
			<td>%</td>
			<td>42.00 - 75.00</td>

		</tr>

		<tr>
			<th>Linfocitos %</th>

			<td></td>
			<td></td>
			<td>%</td>
			<td>20.00 - 45.00</td>

		</tr>
		<tr>
			<th>Monocitos %</th>

			<td></td>
			<td></td>
			<td>%</td>
			<td>2.00 - 10.00</td>

		</tr>
		<tr>
			<th>Eosinofilos %</th>

			<td></td>
			<td></td>
			<td>%</td>
			<td>0.00 - 10.00</td>

		</tr>

	<tr>
			<th>Basofilos %</th>

			<td></td>
			<td></td>
			<td>%</td>
			<td>0.00 - 3.00</td>

		</tr>
		

	</table>


</div>

				<td>
					<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#actualizaCategoria" onclick="agregaDato('<?php echo $ver[0] ?>','<?php echo $ver[1] ?>')"><span class="fas fa-edit"></span>
				</span>
			</td>
			<td>
				<span class="btn btn-danger btn-sm"><span class="fas fa-trash-alt" onclick="eliminaCategoria('<?php echo $ver[0] ?>')"></span></span>
			</td>
