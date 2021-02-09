<?php 
require_once "../../clases/Conexion.php";
$c=new conectar();
$conexion=$c->conexion();

$sql=" SELECT  estu.clave,
estu.nombreEst,
estu.condicionPaciente,
estu.id_estudio
 from estudio as estu ";

$result=mysqli_query($conexion,$sql);
?>


        <div class="table-responsive">

    <table class="table table-hover table-condensed table-bordered table-dark" style="text-align: center; ">
        <br>

        <tr>


            <td><b>Clave</b></td>
            <td><b>Estudio </b> </td>
            <td><b>Condiciones del paciente</b></td>
            
            <td><b>Editar</b></td>
            <td><b>Borrar</b></td>


        </tr>
        
    <?php while ($ver=mysqli_fetch_row($result)): ?> 


            <tr>
                <td> <?php echo $ver[0]; ?>  </td>
                <td> <?php echo $ver[1]; ?> </td>
                <td> <?php echo $ver[2]; ?> </td>
                
                <td>
                    <span data-toggle="modal" data-target="#abremodalUpdateEstudio" class="btn btn-warning btn-sm" onclick="agregaDatosEstudio('<?php echo $ver[3];  ?>')"><span class="fas fa-edit"></span></span>


                </td>
                <td>
                    <span class="btn btn-danger btn-sm" onclick="eliminaEstudio('<?php echo $ver[3];  ?>')"><span  class="fas fa-trash-alt"></span></span>

                </td>





            </tr>
        <?php endwhile; ?>
    </table>
</div>