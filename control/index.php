<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
<h1>Inicie sesion con su usuario y contraseña</h1>
  <form class="" action="" method="post">
      <input type="text" name="usuario" value="" placeholder="escriba el usuario">
      <input type="password" name="pass" value="" placeholder="escriba su contraseña">
      <input type="submit" name="" value="enviar">
    </form>
  </body>
</html>
<?php
if(isset($_POST['usuario'])){
  include 'conexion.php';
  $sql = "SELECT count(usuario) as conteo from usaurio where usuario='{$_POST['usuario']}' and pass ='{$_POST['pass']}';";
  $query = mysqli_query($conn,$sql);
  $resultado = mysqli_fetch_assoc($query);
  if($resultado['conteo']==1){
    session_start();
    $_SESSION['usuario'] = $_POST['usuario'];
    header("location:registro.php");
  } else {
    session_start();
    $_SESSION['usuario'] = null;
    echo "no esta autorizado";
  }
}
else {
  header("location:");
}
 ?>
