<?php require_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="../img/tubos.jpg" class="img-fluid" width="100px" height="100px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Recepción
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Registro cliente</a>
          <a class="dropdown-item" href="#">Cotización</a>
          <a class="dropdown-item" href="#">Entrega de resultados</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resultados
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Orden de estudios </a>
          <a class="dropdown-item" href="#">Captura de resultados</a>
         
        </div>
      </li><li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Catálogo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Estudios</a>
          <a class="dropdown-item" href="#">Perfiles</a>
          <a class="dropdown-item" href="#">Analitos</a>
        </div>
      </li><li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrar Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Registro usuario</a>
          
        </div>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../procesos/Salir.php">Salir <i class="fas fa-power-off"></i></a>

          
        </div>
      </li>

    </ul>
    <div class="col-md-6"></div>
    <form></form>
    <label>Selecciona cliente</label>
      
      <select class="form-control input-sm" id="clienteVenta" name="clienteVenta">
        <option value="A">Selecciona </option>
        <?php $sql="SELECT id_cliente, 
        nombre,
        apellidoPat
        from clientes";
        $result= mysqli_query($conexion,$sql);
        while ($cliente=mysqli_fetch_row($result)):

          ?>

          <option value="<?php echo $cliente[0] ?>"><?php echo $cliente[2]." ".$cliente[1] ?></option>
        <?php endwhile; ?>
      </select>
 
    </div>
  </div>

</nav>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-6"  style="background-color:#aaa">
        <h1>Columna 1</h1> 
        <p>Esto es una prueba de bootstrap 4.</p>
      </div>
      <div class="col-lg-6"  style="background-color:#bbb">
        <h1>Columna 2</h1> 
        <p>Esto es una prueba de bootstrap 4.</p>
      </div>
      
    </div>
  </div>
</body>
</html>