
<?php 
session_start();
if(isset($_SESSION['usuario'])){
	//echo  $_SESSION['usuario'];	
	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Categorias de estudios</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<form id="frmCategorias">
						<br>
						<h5><p class="p-2 bg-dark text-white">Ingresa categoria de estudios:</p></h5>
						
						<input type="text" class="form-control input-sm" name="categoria" id="categoria">
						<p></p>
						<span class="btn btn-primary" id="btnAgregaCategoria" >Agregar</span>
					</form>
					
				</div>
				<div class="col-sm-6">
					<div id="tablaCategoriaLoad"></div>
					
				</div>
			</div>
		</div>
		<!-- Button trigger modal -->

		<!-- Modal -->
		<div class="modal fade" id="actualizaCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Actualiza Categorias</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="frmCategoriaU">
							<input type="text" hidden="" id="idcategoria" name="idcategoria">
							<label>Categoria</label>
							<input type="text" id="categoriaU" name="categoriaU" class="form-control input-sm">
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" id="btnActualizaCategoria" class="btn btn-warning" data-dismiss="modal" >Guardar</button>

					</div>
				</div>
			</div>
		</div>


	</body>
	</html>
	<script type="text/javascript">

		$(document).ready(function(){
			$('#tablaCategoriaLoad').load("categorias/tablaCategorias.php");
			$('#btnAgregaCategoria').click(function(){
				vacios= validarFormVacio('frmCategorias');
				if (vacios > 0 ){
					alertify.alert("Debes llenar todos los campos.");
					return false;
				}

				datos=$('#frmCategorias').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/categorias/agregaCategoria.php",
					success:function(r){
						if (r==1) {
					//limpia formulario al insertar registro
					$('#frmCategorias')[0].reset();
					$('#tablaCategoriaLoad').load("categorias/tablaCategorias.php");
					alertify.success("Categoria agregada correctamente!!! :)");

				}else{
					alertify.error("No se pudo agregar Categoria! X(");
				}

			}
		});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btnActualizaCategoria').click(function(){

				datos=$('#frmCategoriaU').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/categorias/actualizaCategoria.php",
					success:function(r){
						if(r==1){
							$('#tablaCategoriaLoad').load("categorias/tablaCategorias.php");
							alertify.success("Actualizado con exito!");
						}else{
							alertify.error("No se actualizo!");
						}
						

					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		function agregaDato(idCategoria,categoria){
			$('#idcategoria').val(idCategoria);
			$('#categoriaU').val(categoria);
		}
		function eliminaCategoria(idcategoria){
			alertify.confirm('¿Desea eliminar esta categoria?', function(){ 
				$.ajax({
					type:"POST",
					data:"idcategoria=" + idcategoria,
					url:"../procesos/categorias/eliminarCategoria.php",
					success:function(r){
						if(r==1){
							$('#tablaCategoriaLoad').load("categorias/tablaCategorias.php");
							alertify.success("Eliminado con exito!!");
						}else{
							alertify.error("No se pudo eliminar :(");
						}
					}
				});
			}, function(){ 
				alertify.error('Cancelo !')
			});
		}


	</script>
	<?php 
}else{
	header("location:../index.php");
}
?>