
<?php 
session_start();
if(isset($_SESSION['usuario'])){
	//echo  $_SESSION['usuario'];	
	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Entrega de resultados</title>
		<?php require_once "menu.php"; ?>
		
	</head>
	<body>

<div class="container">
	<h1>Resultados Pacientes</h1>
	<div class="row">
		
		<div class="col-sm-8">
			<div id="tablaClientesLoad">

				
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>

	</body>
	</html>
	<script type="text/javascript">

    $(document).ready(function(){

      $('#tablaClientesLoad').load("../vistas/clientes/tablaClientes.php");
      $('#btnAgregarCliente').click(function(){

       vacios= validarFormVacio('frmClientes');
       if (vacios > 0 ){
         alertify.alert ("Debes llenar todos los campos.");
         return false;
       }

       datos=$('#frmClientes').serialize();
       $.ajax({
         type:"POST",
         data:datos,
         url:"../procesos/clientes/agregaClientes.php",
         success:function(r){
          if(r==1){
          	 $('#tablaClientesLoad').load("../vistas/clientes/tablaClientes.php");
           alertify.success("Agregaste con exito un nuevo paciente!!!");
         }else{
           alertify.error("No se agrego paciente!!!!:(");
         }

       }
     });
     });
});
   </script>



	<?php 
}else{
	header("location:../index.php");
}
?>