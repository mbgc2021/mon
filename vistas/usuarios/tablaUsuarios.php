<?php 
require_once "../../clases/Conexion.php";
$c=new conectar();
$conexion=$c->conexion();

$sql=" SELECT id_usuario,
nombre,
apellidoPat,
email,
tipoUsuario,
apellidoMat,
cedulaProfesional
from usuarios";
$result=mysqli_query($conexion,$sql);
 ?>





<div class="table-responsive">
    <table   class="table table-hover table-condensed table-bordered table-dark" style="text-align: center; ">
   
    <tr>
        <td><b>Nombre</b></td>
        <td><b>Apellido</b></td>
        <td><b>Usuario</b></td>
        <td><b>Rol de usuario</b></td>
        <td><b>Editar</b></td>
        <td><b>Eliminar</b></td>

    </tr>
   <?php while($ver=mysqli_fetch_row($result)): ?>
    <tr>
        <td><?php echo $ver[1];  ?></td>
        <td><?php echo $ver[2];  ?></td>
        <td><?php echo $ver[3];  ?></td>
        <td><?php echo $ver[4];  ?></td>
        <td>
            <span data-toggle="modal" data-target="#actualizaUsuarioModal" class="btn btn-warning btn-sm" onclick="agregaDatosUsuario('<?php echo $ver[0]; ?>')"><span class="fas fa-edit"></span></span>
            

        </td>
        <td>
            <span class="btn btn-danger btn-sm" onclick=" eliminarUsuario('<?php echo $ver[0]; ?>')"><span class="fas fa-trash-alt"></span></span>
            
        </td>





    </tr>
<?php endwhile; ?>
</table>

</div>