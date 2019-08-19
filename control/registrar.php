<?php
if(isset($_POST['nombre'])){
  if(is_null($_POST['nombre'])
   || $_POST['nombre']==''){

  }else {
include 'conexion.php';
$sql = "INSERT into datos (nombre,sexo,edad,direccion,tel) values ('".$_POST['nombre']."','".$_POST['sexo']."','".$_POST['edad']."','".$_POST['direccion']."','".$_POST['tel']."')";
if (mysqli_query($conn, $sql)) {
    header("Location:registro.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <label for="nombre">escriba el nombre de el paciente</label> <input type="text" name="nombre" value="" placeholder="nombre"> <br><br>
      <label for="sexo">eliga el sexo del paciente</label>
          <select name="sexo">
            <option value="hombre">hombre</option>
            <option value="mujer">mujer</option>
          </select>  <br><br>
        <label for="telefono">escriba el numero de telefono del cliente</label> <input type="text" name="tel" value="" placeholder="numero de telefono"><br><br>
        <label for="direccion">escriba la direccion del paciente</label> <input type="text" name="direccion" value=""><br><br>
        <label for="edad">escriba la edad del paciente</label> <input type="text" name="edad" value="">
        <input type="submit" name="enviar" value="enviar datos">
    </form>
  </body>
</html>
