<?php
include ('conexion.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
 $folio= $_POST["folio"];
 $correo= $_POST["correo"];
 $fecha= $_POST["fecha"];
 
mysqli_query($conexion, "UPDATE registro SET nombre='$nombre',  folio='$folio',  correo='$correo', fecha='$fecha'       WHERE id=$id") or die ("Error al actualizar los datos");
echo "Actualizado correctamente";
echo "<br><a href=menu.html>Menu principal</a>";
 echo"<br><a href='compras.php'>Registro de compras</a>";
mysqli_close($conexion);