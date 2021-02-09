



<?php require_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <a class="navbar-brand" href="#"><img src="../img/tubos.jpg" class="img-fluid rounded-lg" width="100px" height="100px" ></a>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../vistas/inicio.php">Inicio <i class="fas fa-microscope"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Recepción <i class="fa fa-female" aria-hidden="true"></i><i class="fa fa-male" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
              <a class="dropdown-item" href="../vistas/clientes.php">Registro cliente</a>
              <!--<a class="dropdown-item" href="#">Cotización</a>-->
              <a class="dropdown-item" href="../vistas/entResultados.php">Entrega de resultados</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Resultados <i class="far fa-clipboard"></i>
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <a class="dropdown-item" href="#">Orden de estudio </a>
            <a class="dropdown-item" href="../vistas/capturaResultados.php">Captura de resultados</a>
            
          </div>
        </li>
        <?php if($_SESSION['usuario']=="admin"):
  
 ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Catálogo <i class="far fa-folder-open"></i>
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
          <a class="dropdown-item" href="../vistas/categorias.php">Categorias</a>

          <a class="dropdown-item" href="../vistas/estudio.php">Estudios</a>
         <!--<a class="dropdown-item" href="#">Perfil</a>
          
          <a class="dropdown-item" href="#">Analito</a>-->
          
        </div>
      </li>
      <?php 
endif;

 ?>
      
<?php if($_SESSION['usuario']=="admin"):

 ?>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Administrar Usuarios <i class="fas fa-users"></i>
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
        <a class="dropdown-item" href="../vistas/usuarios.php"> Registro usuarios</a>
        
      </div>
    </li>
<?php 
endif;

 ?>






    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" style="color: red" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Usuario:<?php echo $_SESSION['usuario'];?> <i class="fas fa-user-alt"></i>
     </a>
     <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
      <a class="dropdown-item" href="../procesos/Salir.php">Salir <i class="fas fa-power-off"></i></a>
    </div>
  </li>
  
</ul>
<div class="col-md-1"></div>
</div>
</div>
</nav>


</body>
</html>
<script type="text/javascript">
  


  const $dropdown = $(".dropdown");
  const $dropdownToggle = $(".dropdown-toggle");
  const $dropdownMenu = $(".dropdown-menu");
  const showClass = "show";

  $(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
      $dropdown.hover(
        function() {
          const $this = $(this);
          $this.addClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "true");
          $this.find($dropdownMenu).addClass(showClass);
        },
        function() {
          const $this = $(this);
          $this.removeClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "false");
          $this.find($dropdownMenu).removeClass(showClass);
        }
        );
    } else {
      $dropdown.off("mouseenter mouseleave");
    }
  });


</script>