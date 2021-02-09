<?php 
require_once "../../clases/Conexion.php";
$c=new conectar();
$conexion=$c->conexion();


$sql="SELECT id_categoriaEst,nombreCategoria FROM categoriasest";
$result=mysqli_query($conexion,$sql);


 ?>


<div class="table-responsive">
	<br>
	<table class="table table-hover table-condensed table-bordered table-dark" style="text-align: center;" >
		<caption ><label>Categorias de Estudios</label></caption>
	<tr>
		<td><b>Categoria</b></td>
		<td><b>Editar</b></td>
		<td><b>Eliminar</b></td>

	</tr>
	<?php
	while ($ver=mysqli_fetch_row($result)):
	 ?>
	
	<tr>
		<td><?php echo $ver[1] ?></td>
		<td>
			<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#actualizaCategoria" onclick="agregaDato('<?php echo $ver[0] ?>','<?php echo $ver[1] ?>')"><span class="fas fa-edit"></span>
		</span>
</td>
		<td>
			<span class="btn btn-danger btn-sm"><span class="fas fa-trash-alt" onclick="eliminaCategoria('<?php echo $ver[0] ?>')"></span></span>
		</td>
	</tr>

<?php endwhile; ?>
</table>
</div>