<?php
include "conexion.php";
if (isset($_GET['id'])) {
  if (is_null($_GET['id']) || $_GET['id'] =="") {

 }else {
$sql = "SELECT * FROM datos WHERE id={$_GET['id']}";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)== 1) {
    $datos = mysqli_fetch_assoc($result);
  ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <label for="nombre">escriba el nombre de el paciente</label> <input type="text" name="nombre" value="<?=$datos['nombre'] ?>" placeholder="nombre"> <br><br>
      <label for="sexo">eliga el sexo del paciente</label>
          <select name="sexo">
            <option value="hombre">hombre</option>
            <option value="mujer">mujer</option>
          </select>  <br><br>
        <label for="edad">escriba el la edad del paciente</label> <input type="text" name="edad" value="<?=$datos['edad'] ?>" placeholder="edad"><br><br>
        <label for="direccion">escriba la direccion</label> <input type="text" name="direccion" value="<?=$datos['direccion'] ?>"><br><br>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <label for="tel"> No. de telefon</label> <input type="text" name="tel" value="<?=$datos['tel'] ?>">
         <br><br>
        <input type="submit" name="enviar" value="enviar datos">
    </form>
  </body>
</html>
<?php
}else {
}
}
}else {
}
if (isset($_POST['nombre'])) {
  if (is_null($_POST['nombre']) || $_POST['nombre']=='') {
    echo "no se envio nada";
  }else {
    $sql ="UPDATE datos SET nombre='{$_POST['nombre']}',sexo='{$_POST['sexo']}',edad='{$_POST['edad']}',tel='{$_POST['tel']}',direccion='{$_POST['direccion']}' WHERE id={$_POST['id']}";
    $query = mysqli_query($conn,$sql);
    if ($query) {
    header("location: registro.php");
  }else {
  }
  }
}
  mysqli_close($conn);
?>
