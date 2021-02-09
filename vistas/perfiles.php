
<?php 
session_start();
if(isset($_SESSION['usuario'])){
	//echo  $_SESSION['usuario'];	
	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Perfiles</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>


	</body>
	</html>

	<?php 
}else{
	header("location:../index.php");
}
?>