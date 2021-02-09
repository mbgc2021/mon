<?php 
class usuarios{
 public function registroUsuario($datos){
  $c=new conectar();
  $conexion=$c->conexion();
  $fecha=date('Y-m-d');

  $sql="INSERT into usuarios (nombre,
  apellidoPat,
  apellidoMat,
  email,
  tipoUsuario,
  password,
  cedulaProfesional,
  fechaCaptura) values('$datos[0]',
  '$datos[1]',
  '$datos[2]',
  '$datos[3]',
  '$datos[4]',
  '$datos[5]',
  '$datos[6]',
  '$fecha')";

  return mysqli_query($conexion,$sql);
}
public function loginUser($datos){

  $c=new conectar();
  $conexion=$c->conexion();
  $password=sha1($datos[1]);

  $_SESSION['usuario']=$datos[0];
  $_SESSION['iduser']=self::traeID($datos);

  $sql="SELECT * from usuarios 
  where email='$datos[0]' 
  and password='$password'";
  $result=mysqli_query($conexion,$sql);

  if(mysqli_num_rows($result)> 0){
   return 1;
 }else{
   return 0;
 }
}
public function traeID($datos){
  $c=new conectar();
  $conexion=$c->conexion();

  $password=sha1($datos[1]);

  $sql="SELECT id_usuario from usuarios   
  where email='$datos[0]' 
  and password='$password'";
  $result=mysqli_query($conexion,$sql);

  return mysqli_fetch_row($result)[0];

}

public function obtenDatosUsuario($idusuario){
 $c=new conectar();
 $conexion=$c->conexion();

 $sql=" SELECT id_usuario,
 nombre,
 apellidoPat,
 apellidoMat,
 email,
 tipoUsuario,
 cedulaProfesional
 from usuarios
 where id_usuario='$idusuario'";

 $result=mysqli_query($conexion,$sql);
 $ver=mysqli_fetch_row($result);

 $datos=array(
  'id_usuario'=>$ver[0],
  'nombre'=>$ver[1],
  'apellidoPat'=>$ver[2],
  'apellidoMat'=>$ver[3],
  'email'=> $ver[4],
  'tipoUsuario'=>$ver[5],
  'cedulaProfesional'=>$ver[6]

);
 return $datos;
}
public function actualizaUsuario($datos){

  $c=new conectar();
  $conexion=$c->conexion();

  $sql="UPDATE usuarios set nombre='$datos[1]',
  apellidoPat='$datos[2]',
  apellidoMat='$datos[3]',
  email='$datos[4]',
  tipoUsuario='$datos[5]',
  cedulaProfesional='$datos[6]'

  where id_usuario='$datos[0]'";

  return mysqli_query($conexion,$sql);
}

public function eliminaUsuario($idusuario){
$c=new conectar();
  $conexion=$c->conexion();

   $sql="DELETE from usuarios where id_usuario='$idusuario'";

return mysqli_query($conexion,$sql);

}

}


?>