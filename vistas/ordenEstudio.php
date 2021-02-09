
<?php 
session_start();
if(isset($_SESSION['usuario'])){
	//echo  $_SESSION['usuario'];	
	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Orden Estudio</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>

		<div class="container-fluid bg-success"  ></div>


	</body>
	</html>

	<?php 
}else{
	header("location:../index.php");
}
?>
