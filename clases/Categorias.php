<?php 
class categorias{
	public function agregaCategoria($datos){
		$c=new conectar();
		$conexion=$c->conexion();



	$sql="INSERT into categoriasest(id_usuario,
nombreCategoria,
fechaCaptura ) values ('$datos[0]','$datos[1]','$datos[2]')";
return mysqli_query($conexion,$sql);

	}
	public function actualizaCategoria($datos){
		$c=new conectar();
		$conexion=$c->conexion();

		$sql=" UPDATE categoriasest set nombreCategoria='$datos[1]'
								where id_categoriaEst='$datos[0]'";
		echo mysqli_query($conexion,$sql);
	}
	public function eliminaCategoria($idcategoria){
		$c=new conectar();
		$conexion=$c->conexion();

		$sql="DELETE from categoriasest where id_categoriaEst='$idcategoria'";
		return mysqli_query($conexion,$sql);
	}
}

 ?>