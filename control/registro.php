<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1">
  <h2>pacientes</h2>
      <tr>
        <th>nombre</th>
        <th>edad</th>
        <th>sexo</th>
        <th>direccion</th>
        <th>telefono</th>
        <th>edit/delet/nueva visita</th>
      </tr>
      <?php
      include 'conexion.php';
      $sql = "SELECT * FROM datos";
      $query = mysqli_query($conn,$sql);
      while ($most = mysqli_fetch_assoc($query)) { ?>
      <tr>
            <td> <?php echo $most['nombre'];?> </td>
            <td> <?php echo $most['edad'];?> </td>
            <td> <?php echo $most['sexo'];?> </td>
            <td> <?php echo $most['direccion'];?> </td>
            <td> <?php echo $most['tel'];?> </td>
            <td><?php echo " - <a href=\"eliminar.php?id={$most['id']}\">eliminar</a>". " - <a href=\"actualizar.php?id=".$most['id']."\">actualizar</a> "." - <a href=\"nueva_visita.php?nombre=".$most['nombre']."\">nueva visita</a> "." - <a href=\"historial.php?nombre=".$most['nombre']."\">historial</a> " ?></td>
      </tr>
      <?php
        }
      ?>
    </table>
    <a href="registrar.php">aqui para registrar un nuevo cliente</a>
<h2>historial de pacientes</h2>
    <table border="1">
      <tr>
        <th>nombre</th>
        <th>sintomas</th>
        <th>receta dada </th>
        <th>fecha de visita</th>
      </tr>
        <?php
         $sql = "SELECT * FROM cliente";
        $query = mysqli_query($conn,$sql);
        while ($most = mysqli_fetch_assoc($query)) { ?>
      <tr>
          <td><?php echo $most['nombre'] ; ?></td>
          <td><?php echo $most['sintomas'] ; ?></td>
          <td><?php echo $most['receta_dada']; ?></td>
          <td><?php echo $most['fecha_de_visita']; ?></td>
        <?php
        }
        ?>
      </tr>
    </table>
  </body>
</html>
