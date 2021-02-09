<?php 

require_once "clases/Conexion.php";

$obj=new conectar();
$conexion=$obj->conexion();

$sql="SELECT * from usuarios where email='admin'";
$result=mysqli_query($conexion,$sql);
$validar =0;
if(mysqli_num_rows($result) > 0) {
    $validar=1;
}

?>



<!DOCTYPE html>
<html lang="es">
<head>
	<title>login de usuario</title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/ind.css">
	<script src="librerias/jquery-3.5.1.min.js"></script>
    <script src="js/funciones.js"></script>
     <script src="librerias/fontawesome/js/all.js"></script>
   
     
<body style="background-color:#1E3755 ">
	
  <br><br><br>
  <div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="card shadow p-3 mb-5 bg-white rounded text-white" style="max-width:">
                <div class="card-header bg-dark text-center">Laboratorio</div>
                <div class="card-body bg-white text-dark"><img class="mx-auto d-block">
                    <p>
                        <img src="img/tubos.jpg" height="150px" class="img-fluid" >
                    </p>
                    <form id="frmLogin" action="" method="">
                        <label>Usuario</label>
                        <input type="text" class="form-control input-sm" name="usuario" id="usuario" placeholder="Ingresa usuario"><br>
                        <label class="label">Contraseña</label>
<input type="password" id="password" class="form-control input-sm" placeholder="Introduce tu contraseña" name="password" >
<span class="mdi mdi-eye" id="mostrar"><i class="far fa-eye password-icon show-password" ></i>
 <span style="cursor:pointer;"> </span></span>
                        
                        <p></p>
                        <span class="btn btn-primary btn-sm" id="entrarSistema">Entrar</span>
                        <?php   if(!$validar): ?>
                            <a href="registro.php" class="btn btn-danger btn-sm">Registrar</a>
                        <?php endif; ?>
                    </div>

                </div>



          </form>  
            

        </div>
    </div>
    
</div>
<div class="col-sm-4"></div>
</div>

</div>

</div>

</body>
</html>


<script type="text/javascript">
    

    $(document).ready(function(){

        $('#entrarSistema').click(function(){
            vacios= validarFormVacio('frmLogin');
            if (vacios > 0 ){
                alert ("Debes llenar todos los campos.");
                return false;
            }

            datos=$('#frmLogin').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url:"procesos/regLogin/login.php",
                success:function(r){
                    if (r==1){
                        window.location="vistas/inicio.php";
                    }else{
                     alert("No se pudo acceder!");

                 }
             }
         });
        });


    });

</script>
<script type="text/javascript">
    $(document).ready( function(){

$('#mostrar').click(function(){
//Comprobamos que la cadena NO esté vacía.
if($(this).hasClass('mdi-eye') && ($("#password").val() != ""))
{
$('#password').removeAttr('type');
$('#mostrar').addClass('mdi-eye-off').removeClass('mdi-eye');
$('.fa-eye').html('<i class="far fa-eye-slash"></i>');
}

else
{
$('#password').attr('type','password');
$('#mostrar').addClass('mdi-eye').removeClass('mdi-eye-off');
$('.fa-eye').html('<i class="far fa-eye"></i>');
}
});

});
</script> 