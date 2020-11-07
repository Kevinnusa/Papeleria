<?php
include ('conexion.php');
$id=$_POST['id'];
mysqli_query($conexion, "DELETE FROM registro WHERE id=$id") or die ("Error al eliminar los datos");
echo "Eliminado correctamente";
echo "<br><a href=menu.html>Menu principal</a>";
 echo"<br><a href='compras.php'>Registro de compras</a>";
 
mysqli_close($conexion);