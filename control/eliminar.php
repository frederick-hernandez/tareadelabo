<?php
include "conexion.php";
$id = $_GET['id'];
if (isset($_GET['id'])) {
if (is_null($_GET['id']) || $_GET['id']=="") {
}else{
  $sql = "DELETE FROM datos WHERE id=".$_GET['id'];
  if (mysqli_query($conn,$sql)) {
    header("location:registro.php");
  }else{
    echo "error".mysqlmysqli_error($conn);
  }
  mysqli_close($conn);
}
}
 ?>
