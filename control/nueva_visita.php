<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
        <label for="sintomas">sintomas del paciente</label> <input type="text" name="sintomas" value=""><br><br>
        <label for="receta">receta del paciente</label> <br> <textarea name="receta" rows="4" cols="80"></textarea>
        <p>la receta ya no se podra cambiar una vez extendida</p>
        <input type="submit" name="enviar" value="enviar datos">
    </form>
  </body>
</html>
<?php
if(isset($_POST['sintomas'])){
  if(is_null($_POST['sintomas'])
   || $_POST['sintomas']==''){

  }else {
include 'conexion.php';
$sql = "INSERT into cliente (nombre,sintomas,receta_dada) values ('".$_GET['nombre']."','".$_POST['sintomas']."','".$_POST['receta']."')";
if (mysqli_query($conn, $sql)) {
  header("Location:registro.php");
}
mysqli_close($conn);
}
}
 ?>
